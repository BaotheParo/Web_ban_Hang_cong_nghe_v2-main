<?php 
  
  $sql_nhanvien = "SELECT * FROM tbl_user"; 
   $query_nhanvien = mysqli_query($mysqli, $sql_nhanvien);
?>


<div class="form2" style="width:100%">
    <div class="form-title">
        <p>Liệt kê tài khoản</p>
    </div>
    <div class="form2-content">
       <table>

        <tr>
          <th>Stt</th>
          <th>Username</th>
          <th>Fullname</th>
          <th>Tên Quyền</th>
          <th>Email</th>
          <th>Số điện thoại</th>
          <th>Quản lí</th>
        </tr>
        

        <?php
          
           $i = 0;
           while($row = mysqli_fetch_array($query_nhanvien)){
           $i++;
        
        ?>
            <tr>
                <th><?= $i ?></th>
                <th><?= $row['username'] ?></th>
                <th><?= $row['fullname']?></th>
                <th><?= $row['quyen']?></th>
                <th><?= $row['email']?></th>
                <th><?= $row['sdt']?></th>

                <th>
                    <a href="?action=quanlynhanvien&query=sua&idtk=<?php echo $row['id_user'] ?>">Sửa</a>
                    <?php if ($row['trangthai'] == 1) {
                            echo '<a href="modules/quanlynhanvien/xuli.php?idtk=' . $row['id_user'] . '&trangthai=' . $row['trangthai'] . '">Vô hiệu hóa</a>';
                        }else{
                            echo '<a href="modules/quanlynhanvien/xuli.php?idtk=' . $row['id_user'] . '&trangthai=' . $row['trangthai'] . ' "style="background-color:green">Khôi phục</a>';
                        }?> 
                </th>
            </tr>
              
       <?php 
           }
       ?>
        
        
       </table>

    </div>
   
</div>
