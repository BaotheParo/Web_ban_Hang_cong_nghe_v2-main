<?php
include '../../config/config.php';
if (isset($_POST['themsanpham'])) {
	$tensanpham = $_POST['tensanpham'];
	$giasp = $_POST['giasp'];
	$sanxuat = $_POST['sanxuat'];
	$brand = $_POST['brand'];
	$danhmuc = $_POST['danhmuc'];
	$noidung = $_POST['noidung'];
	$tomtat  = $_POST['tomtat'];
	$tinhtrang = $_POST['tinhtrang'];
	$thongso = $_POST['thongso'];
	$idloaisp = $_POST['danhmuc'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time() . '_' . $hinhanh;
	$files = $_FILES['images'];
	$files_names = $files['name'];
	$sql_them = "INSERT INTO tbl_sanpham(tensanpham,giasp,soluong,sanxuat,id_brand,idloaisp,noidung,tomtat,thongso,hinhanh,tinhtrang) VALUES ('$tensanpham','$giasp',0,'$sanxuat','$brand','$danhmuc','$noidung','$tomtat','$thongso','$hinhanh','$tinhtrang')";
	move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
	mysqli_query($mysqli, $sql_them);
	foreach ($files_names as $key => $value) {
		move_uploaded_file($files['tmp_name'][$key], 'upload2/' . $value);
	}
	$id_pro = mysqli_insert_id($mysqli);
	foreach ($files_names as $key => $value) {
		$sql_them2 = "INSERT INTO img_product(id_product,img_product) VALUES ('$id_pro','$value')";
		mysqli_query($mysqli, $sql_them2);
	}

	header('Location:../../index.php?action=quanlysanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
	//sua
	$tensanpham = $_POST['tensanpham'];
	$giasp = $_POST['giasp'];
	$soluong = $_POST['soluong'];
	$sanxuat = $_POST['sanxuat'];
	$brand = $_POST['brand'];
	$danhmuc = $_POST['danhmuc'];
	$noidung = $_POST['noidung'];
	$tomtat  = $_POST['tomtat'];
	$tinhtrang = $_POST['tinhtrang'];
	$thongso = $_POST['thongso'];
	$idloaisp = $_POST['danhmuc'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time() . '_' . $hinhanh;


	$files = $_FILES['images'];
	$files_names = $files['name'];
	if (!empty($_FILES['hinhanh']['name'])) {
		move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);

		$sql_update = "UPDATE tbl_sanpham SET tensanpham='" . $tensanpham . "',giasp='" . $giasp . "',soluong='" . $soluong . "',sanxuat='" . $sanxuat . "',hinhanh='" . $hinhanh . "',tomtat='" . $tomtat . "',noidung='" . $noidung . "',thongso='" . $thongso . "',tinhtrang='" . $tinhtrang . "',id_brand='" . $brand . "' ,idloaisp='" . $idloaisp . "' WHERE id_sanpham='$_GET[idsanpham]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli, $sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/' . $row['hinhanh']);
		}
	} else {
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='" . $tensanpham . "',giasp='" . $giasp . "',soluong='" . $soluong . "',sanxuat='" . $sanxuat . "',tomtat='" . $tomtat . "',noidung='" . $noidung . "',thongso='" . $thongso . "',tinhtrang='" . $tinhtrang . "',id_brand='" . $brand . "',idloaisp='" . $idloaisp . "' WHERE id_sanpham='$_GET[idsanpham]'";
	}




	foreach ($files_names as $key => $value) {
		if (!empty($files['name'][$key])) {
			move_uploaded_file($files['tmp_name'][$key], 'upload2/' . $value);
			$sql_them2 = "INSERT INTO img_product(id_product,img_product) VALUES ('$_GET[idsanpham]','$value')";
			mysqli_query($mysqli, $sql_them2);
		}
	}






	mysqli_query($mysqli, $sql_update);
	header('Location:../../index.php?action=quanlysanpham&query=them');
} else {
	$id = $_GET['idsanpham'];
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
	$query = mysqli_query($mysqli, $sql);
	while ($row = mysqli_fetch_array($query)) {
		unlink('uploads/' . $row['hinhanh']);
	}

	$sql2 = "SELECT * FROM img_product WHERE id_product = '$id' ";
	$query2 = mysqli_query($mysqli, $sql2);
	while ($row2 = mysqli_fetch_array($query2)) {
		unlink('upload2/' . $row2['img_product']);
	}

	$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='" . $id . "'";
	mysqli_query($mysqli, $sql_xoa);

	$sql_xoa2 = "DELETE FROM img_product WHERE id_product='" . $id . "'";
	mysqli_query($mysqli, $sql_xoa2);


	header('Location:../../index.php?action=quanlysanpham&query=them');
}
