<div class="form">
	<div class="form-title">Thêm tài khoản</div>
	<div class="form-content">
		<form method="POST" action="modules/quanlynhanvien/xuli.php" style="display: flex;justify-content: space-between;width:100%">

			<div class="input1">
				<p>Username</p>
				<input type="text" name="username" required>
			</div>
			<div class="input1">

				<p>Passowrd</p>
				<input type="text" name="password" required>
			</div>

			<div class="input1">
				<p>Fullname</p>
				<input type="text" name="fullname" required>
			</div>

			<div class="input1">
				<p>Số điện thoại</p>
				<input type="text" name="sdt" required>
			</div>

			<div class="input1">
				<p>Email</p>
				<input type="text" name="email" required>
			</div>

			<div class="input1">
				<p>Địa chỉ</p>
				<input type="text" name="diachi" required>
			</div>
			<div class="input1">
				Quyền <br>
				<select name="quyen" id="">
					<?php
					$sql_quyen = mysqli_query($mysqli, 'SELECT DISTINCT quyen FROM tbl_user');
					while ($row_quyen = mysqli_fetch_array($sql_quyen)) {
					?>
						<option value="<?php echo $row_quyen['quyen'] ?>"><?php echo $row_quyen['quyen'] ?></option>
					<?php
					}
					?>
				</select>
			</div>
	</div>
	<div class="input2">
		<input type="submit" name="themnhanvien" value="Thêm tài khoản">
	</div>
	</form>
</div>
</div>