<p class="title_donhang">Xem đơn hàng</p>
<?php
	$code = $_GET['id_cart'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.id_cart_details='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  $data = 42;
  
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  
  
  </tr >
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  	$thanhtien = ($row['giasp']*$row['soluongmua']);
  	$tongtien += $thanhtien ;
    

  ?>
  <tr class="tr_sp">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['id_cart_details'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.').'VND' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'VND' ?></td>
   	
  </tr>
  <?php
  } 
  ?>
  <tr>
  	<td colspan="6" >
   		<p class="td_sp">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'VND' ?></p>
   	</td>
  
  </tr>

</table> 
<table>

<th>
  <a href="index.php?quanly=lietkedonhang">Quay Lại trang đơn Hàng</a>  
</th>
</table>