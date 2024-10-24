<?php
include('../../config/config.php');

$tennhacungcap = $_POST['tennhacungcap'];
$diachi = $_POST['diachi'];
if(isset($_POST['themnhacungcap'])){
	//them
	$sql_them = "INSERT INTO tbl_nhacungcap(tenncc,diachi) VALUE('".$tennhacungcap."','".$diachi."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlynhacungcap&query=them');
}elseif(isset($_POST['suanhacungcap'])){
	//sua
	$sql_update = "UPDATE tbl_nhacungcap SET tenncc='".$tennhacungcap."',diachi='".$diachi."' WHERE mancc='$_GET[idncc]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlynhacungcap&query=them');
}
else{
	$id=$_GET['idncc'];
	if($_GET['trangthai']==1)
		$sql_xoa = "UPDATE tbl_nhacungcap SET trangthai=0  WHERE mancc='".$id."'";
	else
		$sql_xoa = "UPDATE tbl_nhacungcap SET trangthai=1  WHERE mancc='".$id."'";

	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlynhacungcap&query=them');
}
