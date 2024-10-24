<div class="form">
   <div class="form-title">Thêm bài viết</div>
   
   <form method="POST" action="modules/quanlibaiviet/xuli.php" enctype="multipart/form-data">
	   <div class="form-content">
   <div class="form-left">	  
	  <div class="input1 input5">
         <p>Tên Bài viết</p>
	  	<input type="text" name="tensanpham" required>
	  </div>
      <div class="input1 input5">
	    <p>Loại bài viết</p>
	    <div class="custom-select" style="width:200px;">
	    	<select name="danhmuc">
    
	    		<?php
	    		$sql_brand = "SELECT DISTINCT TOPIC FROM tbl_baiviet ORDER BY id DESC";
	    		$query_brand = mysqli_query($mysqli,$sql_brand);
	    		while($row_brand = mysqli_fetch_array($query_brand)){
	    		?>
	    		<option value="<?php echo $row_brand['TOPIC'] ?>"><?php echo $row_brand['TOPIC'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
		</div>
	  </div>


      
     

      <div class="input1 input3 input5">
          <p>Hình ảnh bài viết</p>
		  <input type="file" name="hinhanh"  />
		 
      </div>
	  
       
	
    <div class="input1 input5">
	    <p>Tình trạng</p>
	    <div class="custom-select" style="width:200px;">
	    	<select name="tinhtrang">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
	    </div>
	 
	</div>
	
     <div class="clear"></div>
	<div class="input2 input5-2">
	<input type="submit" name="themsanpham" value="Thêm bài viết">
	</div></div>
		
    
    <div class="form-right">
	<div class="input1 input6">
	  	<p>Tóm tắt</p>
	  	<textarea rows="10"  name="tomtat" style="resize: none"></textarea>
	</div>

    <div class="input1 input4 input6">
	  	<p>Nội Dung</p>
	  	<textarea rows="10"  name="noidung" style="resize: none"></textarea>
	</div>
	
	
    </div>
	<div class="clear"></div></div>
 </form>
   
</div>	