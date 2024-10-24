<?php

session_start();


if (isset($_SESSION['dangky'])) {
   
    if(isset($_POST['key'])){
    
	   include '../config/db.conn.php';

	   
	   $key = "%{$_POST['key']}%";
     
	   $sql = "SELECT * FROM tbl_sanpham
	           WHERE tensanpham
	           LIKE ? OR name LIKE ?";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$key, $key]);

       if($stmt->rowCount() > 0){ 
         $users = $stmt->fetchAll();

         foreach ($users as $user) {
        
       ?>
       <li class="search_li">
		<a href="profile/user_pr.php?user=<?=$user['username']?>" class="">
			<div class="d-flex align-items-center ">
			    <img src="uploads/<?=$user['p_p']?>" class="w-10 rounded-circle user-chat-img">
			    <h3 class="fs-xs m-2"><?=$user['name']?></h3>            	
			</div>
		 </a>
	   </li>
       <?php } }else { ?>
         <div class="alert alert-info 
    				 text-center">
		   <i class="fa fa-user-times d-block fs-big"></i>
           The user "<?=htmlspecialchars($_POST['key'])?>"
           is  not found.
		</div>
    <?php }
    }

}else {
	header("Location: ../../index.php");
	exit;
}