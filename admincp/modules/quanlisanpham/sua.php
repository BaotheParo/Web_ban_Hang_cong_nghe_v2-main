<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>




<?php
while ($row = mysqli_fetch_array($query_sua_sp)) {
?>

	<div class="form">
		<div class="form-title">Sửa Sản Phẩm </div>

		<form method="POST" action="modules/quanlisanpham/xuli.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
			<div class="form-content">
				<div class="form-left">
					<div class="input1 input5">
						<p>Tên Sản phẩm</p>
						<input type="text" name="tensanpham" value="<?php echo $row['tensanpham'] ?>">
					</div>

					<div class="input1 input5">
						<p>Mã Sản phẩm</p>
						<input type="text" name="id_sanpham" value="<?php echo $row['id_sanpham'] ?>">
					</div>

					<div class="input1 input5">
						<p>Giá Sản phẩm</p>
						<input type="text" name="giasp" value="<?php echo $row['giasp'] ?>">
					</div>

					<div class="input1 input5">
						<p>Số Lượng</p>
						<input type="text" name="soluong" value="<?php echo $row['soluong'] ?>">
					</div>

					<div class="input1 input5">
						<p> Nơi Sản Xuất</p>
						<input type="text" name="sanxuat" value="<?php echo $row['sanxuat'] ?>">
					</div>


					<div class="input1 input5">

						<p>Thương Hiệu</p>
						<div class="custom-select" style="width:200px;">
							<select name="brand">

								<?php
								$sql_brand = "SELECT * FROM tbl_brand ORDER BY id_brand DESC";
								$query_brand = mysqli_query($mysqli, $sql_brand);
								while ($row_brand = mysqli_fetch_array($query_brand)) {
									if ($row_brand['id_brand'] == $row['id_brand']) {
										echo "<option value='$row_brand[id_brand]' selected>$row_brand[tenbrand]</option>";
									
								} else {
									echo "<option value='<?php echo $row_brand[id_brand] ?>'> $row_brand[tenbrand]</option>";
								}}
								?>
							</select>
						</div>
					</div>



					<div class="input1 input5">

						<p>Danh Mục sản phẩm</p>
						<div class="custom-select" style="width:200px;">
							<select name="danhmuc">
								<?php
								$sql_loaisp = "select distinct tenloaisp,id_loaisp FROM tbl_loaisp ORDER BY id_loaisp ASC";
								$query_loaisp = mysqli_query($mysqli, $sql_loaisp);
								while ($row_loaisp = mysqli_fetch_array($query_loaisp)) {
									if ($row_loaisp['id_loaisp'] == $row['idloaisp']) {
										echo "<option value='$row_loaisp[id_loaisp]' selected>$row_loaisp[tenloaisp]</option>";
									} else {
										echo "<option value='$row_loaisp[id_loaisp]'>$row_loaisp[tenloaisp]</option>";
									}
								}
								?>
							</select>
						</div>
					</div>

					<div class="input1 input3 input5">
						<p>Hình ảnh sản phẩm</p>
						<input type="file" name="hinhanh" />
						<img src="modules/quanlisanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="" class=" img_sp"></th>
					</div>

					<div class="input1 input3 input5">
						<p>Hình ảnh phụ của sản phẩm</p>
						<input type="file" name="images[]" multiple="multiple" />
						<?php

						$sql_picture2 = "SELECT * FROM img_product WHERE id_product='$_GET[idsanpham]'";
						$query_picture2 = mysqli_query($mysqli, $sql_picture2);

						while ($row_picture2 = mysqli_fetch_array($query_picture2)) {


						?>


							<div class="img_sp2">
								<img src="modules/quanlisanpham/upload2/<?php echo $row_picture2['img_product'] ?>" alt=""></th>

								<a href="?action=quanlysp&query=xoa_anh&id_anh=<?php echo $row_picture2['id'] ?>&idsanpham=<?php echo $row['id_sanpham'] ?>&ptc=<?php echo $row_picture2['img_product'] ?>" class="btn_xoa">Xóa</a>
							</div>


						<?php
						}

						?>
					</div>
					<div class="clear"></div>


					<div class="input1 input5">
						<p>Tình trạng</p>
						<div class="custom-select" style="width:200px;">
							<select name="tinhtrang">
								<?php
								if ($row['tinhtrang'] == 1) {
								?>
									<option value="1" selected>Kích hoạt</option>
									<option value="0">Ẩn</option>
								<?php
								} else {
								?>
									<option value="1">Kích hoạt</option>
									<option value="0" selected>Ẩn</option>
								<?php
								}
								?>

							</select>
						</div>

					</div>

					<div class="clear"></div>
					<div class="input2 input5-2">
						<input type="submit" name="suasanpham" value=" Sửa Sản Phẩm">
					</div>
				</div>


				<div class="form-right">
					<div class="input1 input6">
						<p>Tóm tắt</p>
						<textarea rows="10" name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea>
					</div>

					<div class="input1 input4 input6">
						<p>Nội Dung</p>
						<textarea rows="10" name="noidung" style="resize: none"><?php echo $row['noidung'] ?></textarea>
					</div>
					<div class="input1 input4 input6">
						<p>Thông số Kỹ thuật</p>
						<textarea rows="10" name="thongso" style="resize: none"><?php echo $row['thongso'] ?></textarea>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</form>
	<?php
}
	?>
	</div>