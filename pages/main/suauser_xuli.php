<?php 
 
 include('../../admincp/config/config.php');
 $id_user = $_GET['id_user'];
if(isset($_POST['suauser'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['fulladress']; 
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    
    $hinhanh = time().'_'.$hinhanh;
    
   

 if(!empty($_FILES['hinhanh']['name'])){
    $sql = "SELECT * FROM tbl_user WHERE id_user = '".$id_user."'";
    $query = mysqli_query($mysqli,$sql);
   while($row = mysqli_fetch_array($query)){
      unlink('../ptc/'.$row['hinhanh']);
    }
    $sql_update = "UPDATE tbl_user SET fullname = '".$fullname."', email = '".$email."',hinhanh = '".$hinhanh."', sdt = '".$phone."', diachicuthe = '".$address."'   WHERE id_user = '".$id_user."'";
    $row_update = mysqli_query($mysqli,$sql_update);
    move_uploaded_file($hinhanh_tmp,'../ptc/'.$hinhanh);
   
    if($row_update){
       echo '<script>window.location="index.php?quanly=user"</script>';
    
}
 }else{
        $sql_update = "UPDATE tbl_user SET fullname = '".$fullname."', email = '".$email."', sdt = '".$phone."', diachicuthe  = '".$address."'   WHERE id_user = '".$id_user."'";
        $row_update = mysqli_query($mysqli,$sql_update);
        if($row_update){
          echo '<script>window.location="../../index.php?quanly=user"</script>';
        }
        
    
    
    
}}

?>