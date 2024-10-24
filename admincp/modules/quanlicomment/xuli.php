<?php 


include ("../../config/config.php");

$noidungcmt = $_POST['noidungcmt'];
$id_comment = $_GET['id_comment'];
$id_comment2 = $_GET['id_comment2'];


if(isset($_POST['guicomment'])){
    $sql_them = "INSERT INTO shop_cmt(id_comment_user,noidung) VALUE('".$id_comment2."','".$noidungcmt."')";
    mysqli_query($mysqli,$sql_them);  
    
    $sql_up = "UPDATE tbl_comments SET tinhtrang = 1 WHERE id_comment = '$id_comment2'";
    mysqli_query($mysqli,$sql_up);

    $ems = "Đã Gửi comment cho khách hàng !!!";
    header('Location:../../index.php?action=quanlycomment&query=them&ems='.$ems);


}
?>