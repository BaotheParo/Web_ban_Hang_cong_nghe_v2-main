<?php 
 
 include '../../config/config.php';
 $tensanpham = $_POST['tensanpham'];
 $danhmuc = $_POST['danhmuc'];

 $hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;

$tinhtrang = $_POST['tinhtrang'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
if(isset($_POST['themsanpham'])){ 
    $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,TOPIC,hinhanh,tinhtrang,tomtat,noidung) VALUES ('$tensanpham','$danhmuc','$hinhanh','$tinhtrang','$tomtat','$noidung')";
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlybv&query=them');
}
 elseif(isset($_POST['suasanpham'])){
     $idsanpham = $_GET['idsanpham'];
    if(!empty($_FILES['hinhanh']['name']) ){
        
        
       

        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

        $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet = '$tensanpham',TOPIC = '$danhmuc',hinhanh = '$hinhanh',tinhtrang = '$tinhtrang',tomtat = '$tomtat',noidung = '$noidung' WHERE id = '$idsanpham'";

        $sql_xoa = "SELECT * FROM tbl_baiviet WHERE id = '$idsanpham'";
        $query_xoa = mysqli_query($mysqli,$sql_xoa);
        $row_xoa = mysqli_fetch_array($query_xoa);
        unlink('uploads/'.$row_xoa['hinhanh']);

        
    }else{
        $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet = '$tensanpham',TOPIC = '$danhmuc',tinhtrang = '$tinhtrang',tomtat = '$tomtat',noidung = '$noidung' WHERE id = '$idsanpham'";
    } 

    mysqli_query($mysqli,$sql_sua);
	header('Location:../../index.php?action=quanlybv&query=them');
 }else {
     //xoa san pham
     $idsanpham = $_GET['idsanpham'];
        $sql_xoa = "SELECT * FROM tbl_baiviet WHERE id = '$idsanpham'";
        $query_xoa = mysqli_query($mysqli,$sql_xoa);
        $row_xoa = mysqli_fetch_array($query_xoa);
        unlink('uploads/'.$row_xoa['hinhanh']);

        $sql_xoa = "DELETE FROM tbl_baiviet WHERE id = '$idsanpham'";

        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlybv&query=them');

        
 }

?>