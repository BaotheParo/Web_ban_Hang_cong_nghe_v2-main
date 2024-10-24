<?php 
    
    $sql_sua_brand = "SELECT * FROM tbl_brand WHERE id_brand = '$_GET[idbrand]'";
    $query_sua_brand = mysqli_query($mysqli,$sql_sua_brand);


?>




<div class="form">
   <div class="form-title">Sửa  Thương Hiệu </div>
   <div class="form-content">
<?php 
  
  while($row= mysqli_fetch_array($query_sua_brand)){

?>
   <form method="POST" action="modules/quanlibrand/xuli.php?idbrand=<?php echo $row['id_brand'] ?>" enctype="multipart/form-data">
	  
	  <div class="input1">
         <p>Tên Thương Hiệu</p>
	  	<input type="text" name="tenthuonghieu" value="<?= $row['tenbrand'] ?>">
	  </div>
      <div class="input1 input3">
          <p>Hình ảnh thương hiệu</p>
		  <input type="file" name="hinhanh"  />
          <img src="modules/quanlibrand/ptc/<?php echo $row['hinhanhbrand'] ?>" alt="" class=" img_brand"></th>
      </div>

	<div class="input2">
	<input type="submit" name="suathuonghieu" value="Sửa thương hiệu sản phẩm">
	</div>
 </form>
 <?php } ?>
   </div>
</div>