<?php 
  
include '../../config/config.php';


$thutu = $_POST ['thutu'];

$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;


if(isset($_POST['thembanner'])){

    $sql_them = "INSERT INTO tbl_banner(anh_banner,thutu) VALUES ('$hinhanh','$thutu')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlybanner&query=them');
}


elseif(isset($_POST['suabanner'])){
	//sua
	if(!empty($_FILES['hinhanh']['name'])){

		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_banner SET anh_banner='".$hinhanh."',thutu='".$thutu."' WHERE id_banner ='$_GET[idbanner]'";

		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_banner WHERE id_banner = '$_GET[idbanner]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['anh_banner']);
		}
		
	}else{
		$sql_update = "UPDATE tbl_banner SET thutu='".$thutu."' WHERE id_banner ='$_GET[idbanner]'";
	}

	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlybanner&query=them');

}else{
	$id=$_GET['idbanner'];
	$sql = "SELECT * FROM tbl_banner WHERE id_banner = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_banner WHERE id_banner='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlybanner&query=them');
}
?>