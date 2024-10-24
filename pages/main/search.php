<?php

session_start();
    if(isset($_POST['key'])){
    
	   include '../../admincp/config/config.php';

	   
	   $key = "%{$_POST['key']}%";
     
	   $sql_search = "SELECT *  FROM tbl_sanpham WHERE tensanpham  LIKE '%".$key."%' and soluong >0";
	   $query_search = mysqli_query($mysqli, $sql_search);
	   while($row_search = mysqli_fetch_array($query_search)){

	    ?>									
       <li class="search_li">
		<a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_search['id_sanpham'] ?>" class="hover_search_li">
		    <?=$row_search['tensanpham']?>
		 </a>
	   </li>
       <?php } }else{
		   echo "Không tìm thấy kết quả";
	   } ?>
    

<style>
	.hover_search_li:hover{
  color:red;
}
</style>