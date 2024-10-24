
<?php 
  
   $sql_se1= "SELECT * FROM tbl_cart";
   $query_se1 = mysqli_query($mysqli,$sql_se1);
 
   $sql_se2= "SELECT * FROM tbl_comments";
   $query_se2 = mysqli_query($mysqli,$sql_se2);
?>

<div class="line-dh1">
	<div class="line-dh1-title">Quản Lí trang web</div>

	<a href="index.php?action=quanlydonhang&query=them" class="line-dh1-content">	
		Đơn hàng mới

		<?php
		  $dem=0;
		  while($row_se1 = mysqli_fetch_array($query_se1 ))  {
			   if($row_se1['cart_status'] == 1){
				   $dem++;
			   }
			}?>

			<?php if($dem>0){?>
				<div class="box-noti"><?php echo $dem;?></div>
			<?php }?>
	
	</a>
	<?php
		  $dem2=0;
		  while($row_se2 = mysqli_fetch_array($query_se2 ))  {
			   if($row_se2['tinhtrang'] == 0){
				   $dem2++;
			   }
			}?>
	

	  <a href="index.php?action=quanlycomment&query=them" class="line-dh1-content">	
	 	Comment của khách hàng
	
		
		<?php if($dem2>0){?>
				<div class="box-noti box-noti2"><?php echo $dem2;?></div>
			<?php }?>
	
	  </a>


	  
</div>
	
<div class="clear"></div>
	
</div>

<div class="thongke_donhang">
	<p>Thống kê đơn hàng theo : <span id="text-date"></span></p>
<p>
	<select class="select-date">
		<option value="7ngay">7 ngày qua</option>
		<option value="28ngay">28 ngày qua</option>
		<option value="90ngay">90 ngày qua</option>
		<option value="365ngay">365 ngày qua</option>
	</select>
</p>
<div id="chart" style="height: 500px;"></div>
</div>
<div class="thongke_donhang">
	<p>Thống kê phiếu nhập hàng theo : <span id="text-date1"></span></p>
<p>
	<select class="select-date1">
		<option value="7ngay">7 ngày qua</option>
		<option value="28ngay">28 ngày qua</option>
		<option value="90ngay">90 ngày qua</option>
		<option value="365ngay">365 ngày qua</option>
	</select>
</p>
<div id="chart1" style="height: 500px;"></div>
</div>
