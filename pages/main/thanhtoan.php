<?php
	session_start();
	include('../../admincp/config/config.php');
	require('../../carbon/autoload.php');
    
	$now = date('Y-m-d');
	$id_khachhang = $_SESSION['id_khachhang'];
	$insert_cart = "INSERT INTO tbl_cart(id_khachhang,cart_status,cart_date) VALUE('".$id_khachhang."',1,'".$now."')";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	$id_sql ="SELECT * FROM tbl_cart ORDER BY tbl_cart.id_cart DESC LIMIT 1";
	$id_ex = mysqli_query($mysqli,$id_sql);
	$id_ex1 = mysqli_fetch_array($id_ex);
	$idcart = $id_ex1['id_cart'];

	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['id'];
			$soluong = $value['soluong'];
			$insert_order_details = "INSERT INTO tbl_cart_details(id_cart_details,id_sanpham,soluongmua) VALUE('".$idcart."','".$id_sanpham."','".$soluong."')";
			mysqli_query($mysqli,$insert_order_details);
			
		}
		$tieude = "Đặt hàng website banhangcongnghe.net thành công!";
		$noidung = "<p>Cảm ơn quý khách đã đặt hàng của chúng tôi với mã đơn hàng : ".$code_order."</p>";
		$noidung.="<h4>Đơn hàng đặt bao gồm :</h4p>";
        $dem=0;
		 $tongtien =0;
		foreach($_SESSION['cart'] as $key => $val){
			
			$noidung.= "<ul style='border:1px solid blue;margin:10px;'>
				<li>".$val['tensanpham']."</li>
				<li>".$val['id_sanpham']."</li>
				<li>".number_format($val['giasp'],0,',','.')."đ</li>
				<li>".$val['soluong']."</li>
				<li><img src='admincp/modules/quanlibaiviet/uploads/<?php echo ".$val['hinhanh']."?>' ></li>
				</ul>";
				$dem++;
				$tongtien += $val['giasp']*$val['soluong']*(100 - $val['sale'])/100;
		}
         	
	}
	unset($_SESSION['cart']);
	 header('Location:../../index.php?quanly=camon');


?>