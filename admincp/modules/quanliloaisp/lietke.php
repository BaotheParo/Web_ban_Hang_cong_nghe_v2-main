<?php 
  
   $sql_loaisp = "SELECT * FROM tbl_loaisp ";
   $query_loaisp = mysqli_query($mysqli,$sql_loaisp);

?>


<div class="form2">
    <div class="form-title">
        <p>Liệt kê Loại sản phẩm</p>
    </div>
    <div class="form2-content">
       <table>

        <tr>
          <th>Stt</th>
          <th>Tên Loại Sản phẩm</th>
          <th>Quản lí</th>
        </tr>
        

        <?php
          
           $i=0;
           while($row = mysqli_fetch_array($query_loaisp)){
           $i++;
        
        ?>
            <tr>
                <th><?= $i ?></th>
                <th><?= $row['tenloaisp'] ?></th>
                <th>
                    <a href="?action=quanlyloaisp&query=sua&idloaisp=<?php echo $row['id_loaisp'] ?>">Sửa</a>

                    <?php if ($row['trangthai'] == 1) {
                            echo '<a href="modules/quanliloaisp/xuli.php?idloaisp=' . $row['id_loaisp'] . '&trangthai=' . $row['trangthai'] . '">Vô hiệu hóa</a>';
                        }else{
                            echo '<a href="modules/quanliloaisp/xuli.php?idloaisp=' . $row['id_loaisp'] . '&trangthai=' . $row['trangthai'] . ' "style="background-color:green">Khôi phục</a>';
                        }?> 
                </th>
            </tr>
              
       <?php 
           }
       ?>
        
        
       </table>

    </div>
   
</div>