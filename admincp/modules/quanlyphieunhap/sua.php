
<?php
	$sql_sua_phieunhap = "SELECT * FROM tbl_phieunhap WHERE id_phieunhap='$_GET[idphieunhap]' LIMIT 1";
	$query_sua_phieunhap = mysqli_query($mysqli,$sql_sua_phieunhap);
?>



<div class="form">
   <div class="form-title">Sửa loại Sản Phẩm </div>
   <div class="form-content">
   <form method="POST" action="modules/quanlyphieunhap/xuli.php?idphieunhap=<?php echo $_GET['idphieunhap'] ?>">
   <?php
 	while($dong = mysqli_fetch_array($query_sua_phieunhap)) {
 	?>
	  <div class="input1">
         <p>Id nhà cung cấp</p>
	  	<input type="text" name="mancc" value="<?php echo $dong['mancc'] ?>">
	  </div>
	  <div class="input1">
         <p>Ngày nhập</p>
	  	<input type="text" name="ngaynhap" value="<?php echo $dong['ngaynhap'] ?>">
	  </div>
	  <div class="input1">
	 
	    <p>Tổng tiền</p>
	    <input type="text" name="tongtien" value="<?php echo $dong['tongtien'] ?>">
	  </div>
	<div class="input2">
	<input type="submit" name="suaphieunhap" value="Sửa phiếu nhập">
	</div>
    <?php } ?>
 </form>
   </div>
</div>