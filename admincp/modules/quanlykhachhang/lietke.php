<?php 
  
   $sql_user = "SELECT * FROM tbl_user where quyen ='khach' ORDER BY id_user ASC";
   $query_user = mysqli_query($mysqli, $sql_user);
  
?>


<div class="form2" style="width:100%">
    <div class="form-title">
        <p>Liệt kê khách hàng</p>
    </div>
    <div class="form2-content">
       <table>

        <tr>
          <th>Stt</th>
          <th>Username</th>
          <th>Fullname</th>
          <th>SDT</th>
          <th>Địa chỉ</th>
          <th>Quản lí</th>
        </tr>
        

        <?php
          
           $i = 0;
           while($row = mysqli_fetch_array($query_user)){
           $i++;
        
        ?>
            <tr>
                <th><?= $i ?></th>
                <th><?= $row['username'] ?></th>
                <th><?= $row['fullname']?></th>
                <th><?= $row['sdt']?></th>
                <th><?= $row['diachicuthe']?></th>
                <th>
                    <a href="?action=quanlykhachhang&query=sua&idkh=<?php echo $row['id_user'] ?>">Sửa</a>
                    <?php if ($row['trangthai'] == 1) {
                            echo '<a href="modules/quanlykhachhang/xuli.php?idkh=' . $row['id_user'] . '&trangthai=' . $row['trangthai'] . '">Vô hiệu hóa</a>';
                        }else{
                            echo '<a href="modules/quanlykhachhang/xuli.php?idkh=' . $row['id_user'] . '&trangthai=' . $row['trangthai'] . ' "style="background-color:green">Khôi phục</a>';
                        }?>                 
                        </th>
            </tr>
              
       <?php 
           }
       ?>
        
        
       </table>

    </div>
   
</div>
