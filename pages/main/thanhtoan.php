<?php
session_start();
include('../../admincp/config/config.php');

$id_khachhang = $_SESSION['id_khachhang'];

// Lấy thông tin khách hàng
$sql_user = "SELECT * FROM tbl_user WHERE id_user='$id_khachhang'";
$result_user = mysqli_query($mysqli, $sql_user);
$user_info = mysqli_fetch_array($result_user);

// Kiểm tra xem có thông tin người dùng không
if (!$user_info) {
    echo "Không tìm thấy thông tin người dùng.";
    exit();
}

// Kiểm tra xem người dùng có gửi địa chỉ giao hàng không
if (isset($_POST['submit_payment'])) {
    // Xác định địa chỉ giao hàng
    if (isset($_POST['use_default'])) {
        $dia_chi_giao_hang = $user_info['diachicuthe'];
    } else {
        $dia_chi_giao_hang = mysqli_real_escape_string($mysqli, $_POST['dia_chi_giao_hang']);
    }

    // Thêm giỏ hàng
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang, cart_status, cart_date, dia_chi_giao_hang) 
                    VALUES ('$id_khachhang', 1, NOW(), '$dia_chi_giao_hang')";
    
    if (mysqli_query($mysqli, $insert_cart)) {
        // Lấy ID của giỏ hàng vừa chèn
        $idcart = mysqli_insert_id($mysqli);

        // Thêm chi tiết giỏ hàng chỉ cho các sản phẩm được chọn
        // Thêm chi tiết giỏ hàng chỉ cho các sản phẩm được chọn
if (isset($_POST['selected_products']) && is_array($_POST['selected_products'])) {
    foreach ($_POST['selected_products'] as $product_id) {
        if (isset($_SESSION['cart'][$product_id])) {
            $soluong = $_SESSION['cart'][$product_id]['soluong'];
            // Sử dụng id_cart cho id_cart_details
            $insert_order_details = "INSERT INTO tbl_cart_details(id_cart_details, id_sanpham, soluongmua) 
                                      VALUES ('$idcart', '$product_id', '$soluong')";
            
            if (!mysqli_query($mysqli, $insert_order_details)) {
                echo "Lỗi khi thêm chi tiết giỏ hàng: " . mysqli_error($mysqli);
            }
        }
    }
}
		
		

        unset($_SESSION['cart']);
        header('Location: ../../index.php?quanly=camon');
        exit();
    } else {
        echo "Lỗi khi thêm giỏ hàng: " . mysqli_error($mysqli);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giao hàng</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(to left, #112D60, #B6C0C5);
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            display: flex;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1000px;
            overflow: hidden;
            height: 80vh; /* Đặt chiều cao cho container */
        }
        .left-panel {
            padding: 20px;
            width: 40%; /* Cố định chiều rộng cho panel bên trái */
            border-right: 1px solid #ccc;
        }
        .right-panel {
            padding: 20px;
            width: 60%; /* Cố định chiều rộng cho panel bên phải */
            overflow-y: auto; /* Thêm cuộn dọc */
            max-height: 100%; /* Giới hạn chiều cao */
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1em;
        }
        button:hover {
            background-color: #4cae4c;
        }
        input[type="text"]:disabled {
            background-color: #f0f0f0;
        }
        .order-details {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="left-panel">
        <h2>Thông tin khách hàng</h2>
        <p>Tên: <?php echo htmlspecialchars($user_info['fullname']); ?></p>
        <p>Số điện thoại: <?php echo htmlspecialchars($user_info['sdt']); ?></p>
        <form action="" method="POST">
            <label>Địa chỉ:
                <input type="text" id="addressInput" name="dia_chi_giao_hang" placeholder="Nhập địa chỉ giao hàng" required>
            </label>
            <label>
                <input type="checkbox" id="useDefault" name="use_default" value="1" onclick="toggleAddressInput()"> Sử dụng địa chỉ mặc định
            </label>
            <button type="submit" name="submit_payment">Xác nhận thanh toán</button>
        </form>
    </div>
    <div class="right-panel">
        <h2>Chi tiết đơn hàng</h2>
        <div class="order-details">
            <?php
            // Hiển thị chi tiết đơn hàng từ giỏ hàng
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                $total_amount = 0;
                foreach ($_SESSION['cart'] as $cart_item) {
                    // Kiểm tra nếu sản phẩm được chọn
                    if (isset($_POST['selected_products']) && in_array($cart_item['id'], $_POST['selected_products'])) {
                        $thanhtien = ($cart_item['soluong'] * $cart_item['giasp'] * (100 - $cart_item['sale'])) / 100;
                        $total_amount += $thanhtien;

                        echo "<p><strong>Sản phẩm:</strong> " . htmlspecialchars($cart_item['tensanpham']) . "</p>";
                        echo "<p><strong>Số lượng:</strong> " . htmlspecialchars($cart_item['soluong']) . "</p>";
                        echo "<p><strong>Giá:</strong> " . number_format($cart_item['giasp'], 0, ',', '.') . " VND</p>";
                        echo "<p><strong>Thành tiền:</strong> " . number_format($thanhtien, 0, ',', '.') . " VND</p>";
                        echo "<hr>";
                    }
                }
                echo "<p><strong>Tổng tiền:</strong> " . number_format($total_amount, 0, ',', '.') . " VND</p>";
            } else {
                echo "<p>Không có đơn hàng nào.</p>";
            }
            ?>
        </div>
    </div>
</div>

<script>
    function toggleAddressInput() {
        var addressInput = document.getElementById("addressInput");
        var useDefaultCheckbox = document.getElementById("useDefault");

        if (useDefaultCheckbox.checked) {
            addressInput.value = ""; // Clear the input field
            addressInput.disabled = true; // Disable the input field
        } else {
            addressInput.disabled = false; // Enable the input field
        }
    }
</script>

</body>
</html>