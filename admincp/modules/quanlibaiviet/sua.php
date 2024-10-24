<?php
	$sql_sua_sp = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>




<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>

<div class="form">
   <div class="form-title">Sửa Bài viết </div>
   
   <form method="POST" action="modules/quanlibaiviet/xuli.php?idsanpham=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	   <div class="form-content">
   <div class="form-left">	  
	  <div class="input1 input5">
         <p>Tên Bài viết</p>
	  	<input type="text" name="tensanpham" value="<?php echo $row['tenbaiviet'] ?>">
	  </div>
      
     
	
      <div class="input1 input5">
	 
	    <p>Chủ đề</p>
	    <div class="custom-select" style="width:200px;">
	    	<select name="danhmuc">
    
	    		<?php
	    		$sql_brand = "SELECT DISTINCT TOPIC FROM tbl_baiviet ";
	    		$query_brand = mysqli_query($mysqli,$sql_brand);
	    		while($row_brand = mysqli_fetch_array($query_brand)){
                    if($row['TOPIC'] ==$row_brand['TOPIC'] ){
                        echo "<option value='$row_brand[TOPIC]' selected>$row_brand[TOPIC]</option>";
                    }else{
	    		echo "<option value='<?php echo $row_brand[TOPIC] ?>'>$row_brand[TOPIC]</option>";
					}
	    		} 
	    		?>
	    	</select>
		</div>
	  </div>


      
      

      <div class="input1 input3 input5">
          <p>Hình ảnh bài viết</p>
		  <input type="file" name="hinhanh"  />
          <img src="modules/quanlibaiviet/uploads/<?php echo $row['hinhanh'] ?>" alt="" class=" img_sp"></th>
      </div>

	 
        <div class="clear"></div>
        
	
    <div class="input1 input5">
	    <p>Tình trạng</p>
        <div class="custom-select" style="width:200px;">
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Kích hoạt</option>
	    		<option value="0" selected>Ẩn</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    </div>
	 
	</div>
	
     <div class="clear"></div>
	<div class="input2 input5-2">
	<input type="submit" name="suasanpham" value=" Sửa Bài Viết">
	</div></div>
		
    
    <div class="form-right">
	<div class="input1 input6">
	  	<p>Tóm tắt</p>
	  	<textarea rows="10"  name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea>
	</div>

    <div class="input1 input4 input6">
	  	<p>Nội Dung</p>
	  	<textarea rows="10"  name="noidung" style="resize: none"><?php echo $row['noidung'] ?></textarea>
	</div>
	
    </div>
	<div class="clear"></div></div>
 </form>
 <?php
 } 
 ?>
</div>	