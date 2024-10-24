<?php
include('../../config/config.php');
session_start();

if (isset($_POST['themphieunhap'])) {
	$thoiDiemHienTai = date("Y-m-d");
	$fullname = $_SESSION['id_user'];
	$nhacungcap = $_POST['nhacungcap'];
	$sanPhamNhap = $_POST['sanPhamNhap'];
	$soluongnhap = $_POST['soluongnhap'];
	$dongia = $_POST['dongia'];

	// Thêm phiếu nhập vào bảng tbl_phieunhap
	$query_phieunhap = "INSERT INTO tbl_phieunhap (thoigian, id_user, id_nhacungcap, tongtien) VALUES ('$thoiDiemHienTai', '$fullname', '$nhacungcap', 0)";
	mysqli_query($mysqli, $query_phieunhap);

	// Lấy ID của phiếu nhập vừa được thêm vào
	$id_phieunhap = mysqli_insert_id($mysqli);
	$tongTien = 0;
	// Thực hiện thêm chi tiết phiếu nhập
	if ($id_phieunhap) {
		foreach ($sanPhamNhap as $key => $id_sanpham) {
			$soLuongNhap = $soluongnhap[$key];
			$donGia = $dongia[$key];
			// Thực hiện câu lệnh SQL để thêm chi tiết phiếu nhập
			$query_insertChiTiet = "INSERT INTO tbl_chitietphieunhap (id_phieunhap, id_sanpham, soluongnhap, dongia) VALUES ('$id_phieunhap', '$id_sanpham', '$soLuongNhap', '$donGia')";
			mysqli_query($mysqli, $query_insertChiTiet);
			// cập nhật số lượng sản phẩm
			$query_getSoluongSanpham = "SELECT soluong FROM tbl_sanpham WHERE id_sanpham = '$id_sanpham'";
			$result = mysqli_query($mysqli, $query_getSoluongSanpham);
			$row = mysqli_fetch_assoc($result);
			$soluongHientai = $row['soluong'];

			$soluongMoi = (int)$soluongHientai +(int)$soLuongNhap;

			$query_updateSoluongSanpham = "UPDATE tbl_sanpham SET soluong = '$soluongMoi' WHERE id_sanpham = '$id_sanpham'";
			mysqli_query($mysqli, $query_updateSoluongSanpham);

			$thanhTien =(int) $soLuongNhap *(double) $donGia;
            $tongTien += $thanhTien;
		}
		$query_updateTongTien = "UPDATE tbl_phieunhap SET tongtien = '$tongTien' WHERE id_phieunhap = '$id_phieunhap'";
        mysqli_query($mysqli, $query_updateTongTien);
		header('Location:../../index.php?action=quanlyphieunhap&query=lietke');
		echo "Thêm phiếu nhập và chi tiết phiếu nhập thành công!";
	} else {
		echo "Lỗi khi thêm phiếu nhập.";
	}
} else {
	echo "Lỗi khi cập nhật số lượng sản phẩm.";
}
