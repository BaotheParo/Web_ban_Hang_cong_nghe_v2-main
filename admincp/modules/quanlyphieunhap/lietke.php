<?php 
  
   $sql_phieunhap = "SELECT * FROM tbl_phieunhap ORDER BY id_phieunhap ASC";
   $query_phieunhap = mysqli_query($mysqli,$sql_phieunhap);
    
?>


<div class="form">
    <div class="form-title">
        <p>Liệt kê Danh sách phiếu nhập</p>
        <a href="?action=quanlyphieunhap&query=them" style="display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  background-color: rgb(11, 7, 247);
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;"
  onmouseover="this.style.backgroundColor='red'"
  onmouseout="this.style.backgroundColor='rgb(11, 7, 247)'"
>Thêm phiếu nhập</a>
    </div>

    <div class="form2-content">
       <table>

        <tr>
          <th>Mã phiếu nhập</th>
          <th>Người nhập</th>
          <th>Ngày nhập</th>
          <th>Tổng tiền</th>    
          <th>Thao tác</th>
        </tr>
        

        <?php
          
           $i = 0;
           while($row = mysqli_fetch_array($query_phieunhap)){
           $i++;
        
        ?>
            <tr>    
                <th><?= $row['id_phieunhap'] ?></th>                              
                <th><?php
                $idUser = $row['id_user'];
                $selectUserByid = "SELECT fullname FROM tbl_user WHERE id_user = '$idUser'";
                $queryUserByid = mysqli_query($mysqli,$selectUserByid);
                $userRow = mysqli_fetch_assoc($queryUserByid);
                echo $userRow['fullname'];                
                ?></th>

                <th><?php 
                $dateFormatted = date('d/m/Y - h:m:i', strtotime($row['thoigian']));
                echo $dateFormatted;
                ?></th>
                
                <th><?php echo number_format($row['tongtien'], 0, ',', '.') ."đ"?></th>
                <th>
                    <a href="?action=quanlyphieunhap&query=xemchitiet&idphieunhap=<?php echo $row['id_phieunhap'] ?>">Xem chi tiết</a>
                    <a href="modules/quanlyphieunhap/entry_coupon.php?idphieunhap=<?php echo $row['id_phieunhap'] ?>">In phiếu nhập</a>
                    
                </th>

            </tr>
              
       <?php 
           }
       ?>
        
        
       </table>

    </div>
   
</div>
