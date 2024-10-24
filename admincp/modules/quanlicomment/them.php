<div class="form-title">Quản lí comment người dùng ( Những comment chưa được trả lời )</div>
<?php
  
  $sql_comment = "SELECT * FROM tbl_comments  ORDER BY id_comment DESC";
    $query_comment = mysqli_query($mysqli,$sql_comment);

    

?>

<?php if (isset($_GET['ems'])) { ?>
	 		<div class=" note_sp1" >
                 <a >
			  <?php echo htmlspecialchars($_GET['ems']);?></a>
			</div>
			<?php } ?>
<?php while ($row_comment = mysqli_fetch_array($query_comment)){
     
     if($row_comment['tinhtrang'] == 0){
    
    ?>
    
<div class="form">
   
   <div class="form-content">
   <form method="POST" action="modules/quanlicomment/xuli.php?id_comment=<?php echo $row_comment['id_sp'] ?>&id_comment2=<?php echo $row_comment['id_comment'] ?> " style="width: 100%;">
	   <table>
           <tr >
               <th>Link bài viết</th>
               <th class="tr1">Nội dung bình luận</th>
               <th class="tr1">Nội dung shop trả lời</th>
           </tr>
           
           <tr class="tr1">
               <th><a href="../index.php?quanly=sanpham&id_sanpham=<?php echo $row_comment['id_sp'] ?>" target="br">Link</a></th>
               <th class="tr1 tr3"> <a ><?php echo $row_comment['noidungcmt'] ?></a></th>
               <th><input type="text" name="noidungcmt"></th>
               <th class="tr2"><input type="submit" value="Gửi comment" name="guicomment"></th>
           </tr>
           
           <?php } }?>
       </table>
 </form>
   </div>
</div>


<style>
    .tr1{
        width: 500px !important;
    }
    .tr1 input{
        width: 100% !important;
        padding: 10px;
        border-radius: 10px;
        border: none;
    }
    .tr2 input{
        
    padding: 8px 25px;
    font-size: 14px;
    color: #fff;
    border-radius: 4px;
    background: #288ad6;
    margin-top: 10px;
    line-height: 20px;
    border: none;
    cursor: pointer;margin-top: 0px !important;

    
    }
    .tr2 input:hover{
        background-color: red;
        
    }
    .tr3 a{
        padding: 15px;
        background-color: rgb(255, 153, 0);
        border-radius: 10px;
    }
</style>