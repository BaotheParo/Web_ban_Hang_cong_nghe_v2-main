<?php 

include('../config/config.php');

$id_user = $_GET['id_user'];
$id_sanpham = $_GET['id_sanpham'];

$binhluan = $_POST['binhluan'];

if(isset($_POST['guibinhluan']))
{
    $sql_cmt = "INSERT INTO tbl_comments(id_user,id_sp,noidungcmt) VALUES('$id_user','$id_sanpham','$binhluan')";
    $sql_cmt_query = mysqli_query($mysqli,$sql_cmt);
    $ems = "Đã gửi bình luận , xin vui lòng chờ đợi để nhân viên của chúng tôi xử lý";
    header("Location:../../index.php?quanly=sanpham&id_sanpham=$id_sanpham&ems=$ems");
}
?>