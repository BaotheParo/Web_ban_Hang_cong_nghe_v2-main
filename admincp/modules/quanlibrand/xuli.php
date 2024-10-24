<?php 

include('../../config/config.php');

$tenthuonghieu = $_POST['tenthuonghieu'];

$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;



if(isset($_POST['themthuonghieu'])){
	
	$sql_them = "INSERT INTO tbl_brand(tenbrand,hinhanhbrand) VALUE('".$tenthuonghieu."','".$hinhanh."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'ptc/'.$hinhanh);
	header('Location:../../index.php?action=quanlybrand&query=them');
}
elseif(isset($_POST['suathuonghieu'])){
	//sua
	if(!empty($_FILES['hinhanh']['name'])){

		move_uploaded_file($hinhanh_tmp,'ptc/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_brand SET tenbrand='".$tenthuonghieu."',hinhanhbrand='".$hinhanh."' WHERE id_brand ='$_GET[idbrand]'";

		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_brand WHERE id_brand = '$_GET[idbrand]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('ptc/'.$row['hinhanhbrand']);
		}
		
	}else{
		$sql_update = "UPDATE tbl_brand SET tenbrand='".$tenthuonghieu."' WHERE id_brand='$_GET[idbrand]'";
	}

	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlybrand&query=them');

}


else{
	$id=$_GET['idbrand'];
 	$sql_xoasp = "UPDATE tbl_sanpham SET id_brand = 16 where id_brand ='".$id."'";
	if($_GET['trangthai']==1){
	$sql_xoa = "UPDATE tbl_brand SET trangthai=0  WHERE  id_brand='".$id."'";
	mysqli_query($mysqli,$sql_xoasp);}
else
	$sql_xoa = "UPDATE tbl_brand SET trangthai=1  WHERE  id_brand='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlybrand&query=them');
}


?>