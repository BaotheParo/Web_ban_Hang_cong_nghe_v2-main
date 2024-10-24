<?php 
  
   $sql_sp = "SELECT * FROM tbl_sanpham,tbl_brand where tbl_sanpham.id_brand =tbl_brand.id_brand   ORDER BY id_sanpham DESC";
   $query_sp = mysqli_query($mysqli,$sql_sp);
  


?>


<div class="form2 form2-1">
    <div class="form-title">
        <p>Liệt kê  Sản phẩm </p>
    </div>
    <div class="form2-content">
       <table>

        <tr>
          <th>Stt</th>
          <th>Tên Sản Phẩm </th>
          <th>Mã Sản Phẩm</th>
          <th>Giá Sản Phẩm </th>
          <th>Số Lượng</th>
          <th>Brand</th>
          <th>Hình ảnh</th>
          <th>Tình trạng</th>
          <th>Quản lí</th>
        </tr>
        

        <?php
          
           $i=0;
           while($row = mysqli_fetch_array($query_sp)){
           $i++;
        
        ?>
            <tr>
                <th><?= $i ?></th>
             
                <th class="width1"><?= $row['tensanpham'] ?></th>
                <th><?= $row['id_sanpham']?></th>
                <th><?= $row['giasp'] ?></th>
                <th><?= $row['soluong'] ?></th>
                <th><?= $row['tenbrand'] ?></th>
               
                <th><img src="modules/quanlisanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="" class=" img_brand"></th> 
                <th>
                    <?php 
                        if($row['tinhtrang'] == 1){
                            echo "Hiện";
                        }else{
                            echo "Ẩn ";
                        }
                    ?>
                </th>
                <th>
                    <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
                    <a href="modules/quanlisanpham/xuli.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a>
                </th>
            </tr>
              
       <?php 
           }
       ?>
        
        
       </table>

    </div>
   
</div>