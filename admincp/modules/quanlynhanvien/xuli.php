<?php
include('../../config/config.php');
$quyen = $_POST['quyen'];
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$diachicuthe = $_POST['diachi'];
if(isset($_POST['themnhanvien'])){
	$sql_them = "INSERT INTO tbl_user(username,password,fullname,sdt,email,diachicuthe,quyen) VALUES ('$username','$password','$fullname','$sdt',
    '$email','$diachicuthe','$quyen')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlynhanvien&query=them');
	
}elseif(isset($_POST['suanhanvien'])){
	//sua
	$sql_update = "UPDATE tbl_user SET username='".$username."',password='".$password."' ,quyen = '$quyen',fullname='".$fullname."',sdt='".$sdt."',email='".$email."',diachicuthe='".$diachicuthe."' WHERE id_user='$_GET[idtk]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlynhanvien&query=them');
}
else{

	$id=$_GET['idtk'];
	if($_GET['trangthai']==1)
	$sql_xoa = "UPDATE tbl_user SET trangthai=0  WHERE id_user='".$id."'";
else
	$sql_xoa = "UPDATE tbl_user SET trangthai=1  WHERE id_user='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlynhanvien&query=them');
}
