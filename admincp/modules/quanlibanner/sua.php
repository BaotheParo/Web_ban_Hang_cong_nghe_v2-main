<?php 
    
    $sql_sua_brand = "SELECT * FROM tbl_banner WHERE id_banner = '$_GET[idbanner]'";
    $query_sua_brand = mysqli_query($mysqli,$sql_sua_brand);


?>




<div class="form">
   <div class="form-title">Sửa Banner </div>
   <div class="form-content">
<?php 
  
  while($row= mysqli_fetch_array($query_sua_brand)){

?>
   <form method="POST" action="modules/quanlibanner/xuli.php?idbanner=<?php echo $row['id_banner'] ?>" enctype="multipart/form-data">
	  
	 
      <div class="input1 input3">
          <p>Hình ảnh thương hiệu</p>
		  <input type="file" name="hinhanh"  />
          <img src="modules/quanlibanner/uploads/<?php echo $row['anh_banner'] ?>" alt="" class=" img_banner"></th>
      </div>
	  <div class="input1">
	 
	    <p>Thứ tự</p>
	    <input type="text" name="thutu" value="<?= $row['thutu'] ?>">
	  </div>
     
	<div class="input2">
	<input type="submit" name="suabanner" value="Sửa Banner">
	</div>
 </form>
 <?php } ?>
   </div>
</div>