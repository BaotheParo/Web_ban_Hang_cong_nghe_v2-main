<?php
	$sql_sua_user = "SELECT * FROM tbl_user WHERE id_user='$_GET[idkh]' LIMIT 1";
	$query_sua_user = mysqli_query($mysqli,$sql_sua_user);
?>

<div class="form">
   <div class="form-title">Sửa thông tin khách hàng</div>
   <div class="form-content">
   <form method="POST" action="modules/quanlykhachhang/xuli.php?idkh=<?php echo $_GET['idkh'] ?>">
   <?php
 	while($dong = mysqli_fetch_array($query_sua_user)) {
 	?>
	  <div class="input1">
         <p>Username</p>
	  	<input type="text" name="username" value="<?php echo $dong['username'] ?>">
	  </div>
	  <div class="input1">
	 
	    <p>Password</p>
	    <input type="text" name="password" value="<?php echo $dong['password'] ?>">
	  </div>

      <div class="input1">
         <p>Fullname</p>
	  	<input type="text" name="fullname" required value="<?php echo $dong['fullname'] ?>">
	  </div>

      <div class="input1">
         <p>Số điện thoại</p>
	  	<input type="text" name="sdt" required value="<?php echo $dong['sdt'] ?>">
	  </div>

      <div class="input1">
         <p>Email</p>
	  	<input style="width:300px"type="text" name="email" required value="<?php echo $dong['email'] ?>">
	  </div>

      <div class="input1">
         <p>Địa chỉ</p>
	  	<input type="text"style="width:300px" name="diachi" required  value="<?php echo $dong['diachicuthe'] ?>">
	  </div>


	<div class="input2">
	<input type="submit" name="suakhachhang" value="Sửa thông tin khách hàng">
	</div>
    <?php } ?>
 </form>
   </div>
</div>
