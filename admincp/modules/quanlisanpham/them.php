<div class="form">
   <div class="form-title">Thêm Sản Phẩm </div>
   
   <form method="POST" action="modules/quanlisanpham/xuli.php" enctype="multipart/form-data">
	   <div class="form-content">
   <div class="form-left">	  
	  <div class="input1 input5">
         <p>Tên Sản phẩm</p>
	  	<input type="text" name="tensanpham" required>
	  </div>
      <div class="input1 input5">
         <p>Giá Sản phẩm</p>
	  	<input type="text" name="giasp" required>
	  </div>
      
      <div class="input1 input5">
         <p> Nơi Sản Xuất</p>
	  	<input type="text" name="sanxuat" required>
	  </div>

	
      <div class="input1 input5">
	 
	    <p>Thương Hiệu</p>
	    <div class="custom-select" style="width:200px;">
	    	<select name="brand">
    
	    		<?php
	    		$sql_brand = "SELECT * FROM tbl_brand ORDER BY id_brand DESC";
	    		$query_brand = mysqli_query($mysqli,$sql_brand);
	    		while($row_brand = mysqli_fetch_array($query_brand)){
	    		?>
	    		<option value="<?php echo $row_brand['id_brand'] ?>"><?php echo $row_brand['tenbrand'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
		</div>
	  </div>


      
      <div class="input1 input5">
	 
	    <p>Danh Mục sản phẩm</p>
	    <div class="custom-select" style="width:200px;">
	    	<select name="danhmuc">
    
	    		<?php
	    		$sql_danhmucsp = "SELECT distinct id_loaisp,tenloaisp FROM tbl_loaisp ";
	    		$query_danhmucsp = mysqli_query($mysqli,$sql_danhmucsp);
	    		while($row_danhmucsp = mysqli_fetch_array($query_danhmucsp)){
	    		?>
	    		<option value="<?php echo $row_danhmucsp['id_loaisp'] ?>"><?php echo $row_danhmucsp['tenloaisp'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
		</div>
	  </div>

      <div class="input1 input3 input5">
          <p>Hình ảnh sản phẩm</p>
		  <input type="file" name="hinhanh"  />
		 
      </div>
	  <div class="input1 input3 input5">
          <p>Hình ảnh phụ của sản phẩm</p>
		  <input type="file" name="images[]" multiple="multiple" />
		 
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
	<input type="submit" name="themsanpham" value="Thêm Sản Phẩm">
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
	
	<div class="input1 input4 input6">
	  	<p>Thông số kỹ thuật</p>
		 <i><strong>Note: Khi thêm thông số kĩ thuật , chọn dạng bảng (table) với độ rộng = 100%</strong></i>
	  	<textarea rows="10"  name="thongso" style="resize: none"></textarea>
	</div>
    </div>
	<div class="clear"></div></div>
 </form>
   
</div>	