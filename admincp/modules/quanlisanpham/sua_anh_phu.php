<?php 

    $mysqli = new mysqli("localhost","root","","shop");
    

    $id_anh = $_GET['id_anh'];
	$ptc= $_GET['ptc'];
	
	$sql_xoa2 = "DELETE FROM img_product WHERE id='".$id_anh."'";
     mysqli_query($mysqli,$sql_xoa2);
     unlink('modules/quanlisanpham/upload2/'.$ptc);
 
     header('Location:index.php?action=quanlysp&query=sua&idsanpham='.$_GET['idsanpham']);
     

?>