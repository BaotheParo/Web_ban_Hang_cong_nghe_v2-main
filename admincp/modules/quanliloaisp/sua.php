
<?php
	$sql_sua_loaisp = "SELECT * FROM tbl_loaisp WHERE id_loaisp='$_GET[idloaisp]' LIMIT 1";
	$query_sua_loaisp = mysqli_query($mysqli,$sql_sua_loaisp);
?>



<div class="form">
   <div class="form-title">Sửa loại Sản Phẩm </div>
   <div class="form-content">
   <form method="POST" action="modules/quanliloaisp/xuli.php?idloaisp=<?php echo $_GET['idloaisp'] ?>">
   <?php
 	while($dong = mysqli_fetch_array($query_sua_loaisp)) {
 	?>
	  <div class="input1">
         <p>Tên Loại sản phẩm</p>
	  	<input type="text" name="tenloaisp" value="<?php echo $dong['tenloaisp'] ?>">
	  </div>
	  <div class="input1">
	<div class="input2">
	<input type="submit" name="sualoaisp" value="Sửa Loại sản phẩm">
	</div>
    <?php } ?>
 </form>
   </div>
</div>