<?php
session_start();
include('../../admincp/config/config.php');

// Kiểm tra nếu có người dùng đã đăng nhập
if (!isset($_SESSION['id_khachhang'])) {
    header('Location: login.php'); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

$id_khachhang = $_SESSION['id_khachhang'];

// Lấy thông tin khách hàng
$sql_user = "SELECT * FROM tbl_user WHERE id_user='$id_khachhang'";
$result_user = mysqli_query($mysqli, $sql_user);
$user_info = mysqli_fetch_array($result_user);

if (!$user_info) {
    echo "Không tìm thấy thông tin người dùng.";
    exit();
}

// Khởi tạo biến địa chỉ giao hàng
$dia_chi_giao_hang = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_payment'])) {
    // Kiểm tra nếu sử dụng địa chỉ mặc định
    if (isset($_POST['use_default']) && $_POST['use_default'] == 1) {
        $dia_chi_giao_hang = $user_info['diachicuthe']; // Giả sử có trường 'diachicuthe' trong bảng người dùng
    } else {
        $dia_chi_giao_hang = $_POST['dia_chi_giao_hang'];
    }

    // Thêm giỏ hàng
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang, cart_status, cart_date, dia_chi_giao_hang) 
                    VALUES ('$id_khachhang', 1, NOW(), '$dia_chi_giao_hang')";
    
    if (mysqli_query($mysqli, $insert_cart)) {
        $idcart = mysqli_insert_id($mysqli);

        // Chèn từng sản phẩm vào bảng chi tiết giỏ hàng
        if (isset($_POST['selected_products'])) {
            foreach ($_POST['selected_products'] as $product_id) {
                $cart_item = $_SESSION['cart'][$product_id];
                $soluong = $cart_item['soluong'];
                $id_sanpham = $cart_item['id_sanpham'];

                $insert_order_details = "INSERT INTO tbl_cart_details(id_cart_details, id_sanpham, soluongmua) 
                                         VALUES ('$idcart', '$id_sanpham', '$soluong')";
                mysqli_query($mysqli, $insert_order_details);
            }

            // Xóa các sản phẩm đã thanh toán khỏi giỏ hàng
            foreach ($_POST['selected_products'] as $product_id) {
                unset($_SESSION['cart'][$product_id]);
            }

            header('Location: ../../index.php?quanly=camon');
            exit();
        }
    } else {
        echo "Lỗi khi thêm giỏ hàng: " . mysqli_error($mysqli);
        exit();
    }
}
?>
