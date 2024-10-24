<?php
include('../../config/config.php');

$tenloaisp = $_POST['tenloaisp'];
if(isset($_POST['themloaisp'])){
	//them
	$sql_them = "INSERT INTO tbl_loaisp(tenloaisp) VALUE('".$tenloaisp."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlyloaisp&query=them');
}elseif(isset($_POST['sualoaisp'])){
	//sua
	$sql_update = "UPDATE tbl_loaisp SET tenloaisp='".$tenloaisp."'WHERE id_loaisp='$_GET[idloaisp]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlyloaisp&query=them');
}
else{

	$id=$_GET['idloaisp'];
	$sql_xoasp = "UPDATE tbl_sanpham SET idloaisp = 21 where idloaisp ='".$id."'";

	if($_GET['trangthai']==1){
	$sql_xoa = "UPDATE tbl_loaisp SET trangthai=0  WHERE id_loaisp='".$id."'";
		mysqli_query($mysqli,$sql_xoasp);
}
else
	$sql_xoa = "UPDATE tbl_loaisp SET trangthai=1  WHERE id_loaisp='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlyloaisp&query=them');
}
