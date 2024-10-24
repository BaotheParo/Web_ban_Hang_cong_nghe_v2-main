<?php
	$sql_sua_nhacungcap = "SELECT * FROM tbl_nhacungcap WHERE mancc='$_GET[idncc]' LIMIT 1";
	$query_sua_nhacungcap = mysqli_query($mysqli,$sql_sua_nhacungcap);
?>

<div class="form">
   <div class="form-title">Sửa nhà cung cấp</div>
   <div class="form-content">
   <form method="POST" action="modules/quanlynhacungcap/xuli.php?idncc=<?php echo $_GET['idncc'] ?>">
   <?php
 	while($dong = mysqli_fetch_array($query_sua_nhacungcap)) {
 	?>
	  <div class="input1">
         <p>Tên nhà cung cấp</p>
	  	<input type="text" name="tennhacungcap" value="<?php echo $dong['tenncc'] ?>">
	  </div>
	  <div class="input1">
	 
	    <p>Địa chỉ</p>
	    <input type="text" name="diachi" value="<?php echo $dong['diachi'] ?>">
	  </div>
	<div class="input2">
	<input type="submit" name="suanhacungcap" value="Sửa nhà cung cấp">
	</div>
    <?php } ?>
 </form>
   </div>
</div>
