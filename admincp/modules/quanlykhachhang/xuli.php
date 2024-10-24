<?php
include('../../config/config.php');

$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$diachicuthe = $_POST['diachi'];

if(isset($_POST['themkhachhang'])){
	//them
	$sql_them = "INSERT INTO tbl_user(username,password,fullname,sdt,email,diachicuthe) VALUES ('$username','$password','$fullname','$sdt',
    '$email','$diachicuthe')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlykhachhang&query=them');
}

elseif(isset($_POST['suakhachhang'])){
	//sua
	
	$sql_update = "UPDATE tbl_user SET username='".$username."',password='".$password."' 
	, fullname = '$fullname', sdt='$sdt' , email = '$email' , diachicuthe = '$diachicuthe'WHERE id_user='$_GET[idkh]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlykhachhang&query=them');
}

else{

	$id=$_GET['idkh'];
	if($_GET['trangthai']==1)
		$sql_xoa = "UPDATE tbl_user SET trangthai=0  WHERE id_user='".$id."'";
	else
		$sql_xoa = "UPDATE tbl_user SET trangthai=1  WHERE id_user='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlykhachhang&query=them');
}
?>

