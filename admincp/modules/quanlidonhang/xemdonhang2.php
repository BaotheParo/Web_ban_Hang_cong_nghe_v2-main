
<style>

  .title_donhang{
    text-align: center;
    padding: 20px;
    font-size: 25px;
    font-weight: 600;
    
  }
  .td_sp{
    float :right;
    margin-right: 25px;
  }
  .Thank{
    font-size: 25px;
    text-align: center;
    font-weight: 600;
  }
</style>

<p class="title_donhang">Xem đơn hàng</p>

<?php 

	$mysqli = new mysqli("localhost","root","","shop");
  
	
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>
<?php
  
	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  require "pdfcrowd-5.5.0/pdfcrowd.php";
  
  $sql_user = "SELECT * FROM tbl_user ";
  $query_user = mysqli_query($mysqli,$sql_user);

  $sql_cart = "SELECT * FROM tbl_cart";
  $query_cart = mysqli_query($mysqli,$sql_cart);

  $why2=2;
  
?>
<p class="codecart">Mã Đơn Hàng :  <?php echo $code ?></p>
<p class="thongtinkhachhang">
    
    <?php 
      while($row_user = mysqli_fetch_array($query_user)){
         while($row_cart = mysqli_fetch_array($query_cart)){
        if($row_user['id_user'] == $row_cart['id_khachhang']){
          echo "Tên Khách Hàng : ".$row_user['fullname']."<br>";
          echo "Địa Chỉ : ".$row_user['diachicuthe']."<br>";
          echo "Số Điện Thoại : ".$row_user['sdt']."<br>";
          echo "Email : ".$row_user['email']."<br>";
        }
        break;
      }}
    ?>

</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
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
  	$thanhtien = ($row['giasp'])/100;
  	$tongtien += $thanhtien ;
    



  ?>
  <tr class="tr_sp">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
   	
  </tr>
  <?php
  } 
  ?>
  <tr>
  	<td colspan="6" >
   		<p class="td_sp">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
   	</td>
  
  </tr>

</table>
<p class="Thank">Cảm ơn quý khách đã mua sản phẩm của cửa hàng</p>




