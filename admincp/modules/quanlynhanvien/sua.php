<?php
	$sql_sua_nv = "SELECT * FROM tbl_user WHERE id_user='$_GET[idtk]' LIMIT 1";
	$query_sua_nv = mysqli_query($mysqli,$sql_sua_nv);
?>

<div class="form">
   <div class="form-title">Sửa tài khoản </div>
   <div class="form-content">
   <form method="POST" action="modules/quanlynhanvien/xuli.php?idtk=<?php echo $_GET['idtk'] ?>">
   <?php
 	while($dong = mysqli_fetch_array($query_sua_nv)) {
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
        
      <div class="input1">
         <p>Quyền truy cập :</p>
            <select name="quyen" id="">
            <?php
						$sql_phanquyen = mysqli_query($mysqli, 'select distinct quyen FROM tbl_user ');
						while ($row_quyen = mysqli_fetch_array($sql_phanquyen)) {
							if ($row_quyen['quyen'] == $dong['quyen']) {
								?>
								<option selected value="<?php echo $row_quyen['quyen'] ?>">
									<?php echo $row_quyen['quyen'] ?>
								</option>
								<?php
							} else {
								?>
								<option value="<?php echo $row_quyen['quyen'] ?>">
									<?php echo $row_quyen['quyen'] ?>
								</option>
								<?php
							}
						}
						?>
            </select>

	  </div>    
	<div class="input2">
	<input type="submit" name="suanhanvien" value="Sửa tài khoản">
	</div>
    <?php } ?>
 </form>
   </div>
</div>
