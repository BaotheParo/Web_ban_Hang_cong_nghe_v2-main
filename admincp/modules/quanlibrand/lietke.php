<?php 
  
   $sql_brand = "SELECT * FROM tbl_brand ";
   $query_brand = mysqli_query($mysqli,$sql_brand);
  


?>


<div class="form2 form2-1">
    <div class="form-title">
        <p>Liệt kê Thương Hiệu Sản phẩm </p>
    </div>
    <div class="form2-content">
       <table>

        <tr>
          <th>Stt</th>
          <th>Tên Thương Hiệu </th>
          <th>Hình ảnh</th>
          <th>Quản lí</th>
        </tr>
        

        <?php
          
           $i=0;
           while($row = mysqli_fetch_array($query_brand)){
           $i++;
        
        ?>
            <tr>
                <th><?= $i ?></th>
             
                <th><?= $row['tenbrand'] ?></th>
                <th><img src="modules/quanlibrand/ptc/<?php echo $row['hinhanhbrand'] ?>" alt="" class=" img_brand"></th>
                <th>
                    <a href="?action=quanlybrand&query=sua&idbrand=<?php echo $row['id_brand'] ?>">Sửa</a>
                    <?php if ($row['trangthai'] == 1) {
                            echo '<a href="modules/quanlibrand/xuli.php?idbrand=' . $row['id_brand'] . '&trangthai=' . $row['trangthai'] . '">Vô hiệu hóa</a>';
                        }else{
                            echo '<a href="modules/quanlibrand/xuli.php?idbrand=' . $row['id_brand'] . '&trangthai=' . $row['trangthai'] . ' "style="background-color:green">Khôi phục</a>';
                        }?> 
                </th>
            </tr>
              
       <?php 
           }
       ?>
        
        
       </table>

    </div>
   
</div>