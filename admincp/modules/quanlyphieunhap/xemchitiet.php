

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

<p class="title_donhang">Xem chi tiết phiếu nhập</p>

<?php 

	$mysqli = new mysqli("localhost","root","","shop");
  
	
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>
<?php
  
	$code = $_GET['idphieunhap'];
	$sql_lietke_phieunhap = "SELECT * FROM tbl_chitietphieunhap WHERE id_phieunhap='$code'";
	$query_lietke_phieunhap = mysqli_query($mysqli,$sql_lietke_phieunhap);

  
  $sql_user = "SELECT * FROM tbl_user ";
  $query_user = mysqli_query($mysqli,$sql_user);

  $sql_cart = "SELECT * FROM tbl_cart";
  $query_cart = mysqli_query($mysqli,$sql_cart);

  $why2=2;
  
?>
<p class="codecart">Mã phiếu nhập :  <?php echo $code ?></p>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>ID sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  
  
  </tr >
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_phieunhap)){
  	$i++;
  	$thanhtien = ($row['dongia']*$row['soluongnhap']);
  	$tongtien += $thanhtien ;
  ?>
  <tr class="tr_sp">
  	<td><?php echo $i ?></td>
    <td><?php
    $id_sanpham = $row['id_sanpham'];
    $selectTenByMaSP = "SELECT tensanpham FROM tbl_sanpham WHERE id_sanpham = '$id_sanpham' ";
    $querySelectTenByMaSP = mysqli_query($mysqli, $selectTenByMaSP);
    $rowSelectTenByMaSP = mysqli_fetch_assoc($querySelectTenByMaSP);

    echo $rowSelectTenByMaSP['tensanpham'] ?></td>
    <td><?php echo $row['soluongnhap'] ?></td>
    <td><?php echo number_format($row['dongia'],0,',','.').'VND' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'VND' ?></td>
   	
  </tr>
  <?php
  } 
  ?>

</table>
<h1 class="td_sp">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'VND' ?></h1>
