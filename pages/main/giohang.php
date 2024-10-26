<?php

if (!isset($_SESSION['id_khachhang'])) {
    header('Location: login.php');
    exit();
}

$id_khachhang = $_SESSION['id_khachhang'];

// Lấy thông tin khách hàng
$sql_user = "SELECT * FROM tbl_user WHERE id_user='$id_khachhang'";
$result_user = mysqli_query($mysqli, $sql_user);
$user_info = mysqli_fetch_array($result_user);
?>

<div class="main_giohang">
  <div class="url_sp2">
    <p><a href="#">Home</a> / <a href="#">Giỏ Hàng</a></p>
  </div>
  <div class="main_giohang_content">
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
      $i = 0;
      $tongtien = 0;

      foreach ($_SESSION['cart'] as $cart_item) {
        $thanhtien = ($cart_item['soluong'] * $cart_item['giasp'] * (100 - $cart_item['sale'])) / 100;
        $tongtien += $thanhtien;
        $i++;
      }
    ?>
      <div class="gio_hang_title"> Thanh Toán Đơn Hàng ( <span><?php echo $i ?></span> đơn hàng có sẵn) </div>

      <form action="pages/main/thanhtoan.php" method="POST">
        <?php foreach ($_SESSION['cart'] as $key => $cart_item) {
          $thanhtien = ($cart_item['soluong'] * $cart_item['giasp'] * (100 - $cart_item['sale'])) / 100;
          $tien = ($cart_item['giasp'] * (100 - $cart_item['sale'])) / 100;
        ?>
          <div class="giohang_content">
            <div class="gio_hang_content_left">
              <div class="thongtinhang_left">
                <img src="admincp/modules/quanlisanpham/uploads/<?php echo $cart_item['hinhanh']; ?>" alt="">
              </div>
              <div class="thongtinhang_right">
                <div class="thongtinhang_masp">Mã sản phẩm: <span><?php echo $cart_item['id_sanpham']; ?></span></div>
                <div class="thongtinhang_right_name"><?php echo $cart_item['tensanpham']; ?></div>
                <div class="thongtinhang_price"> Giá : <span><?php echo number_format($tien, 0, ',', '.') . '₫ '; ?></span></div>
                <div class="thongtinhang_price">Số Lượng :</div>
                <div class="soluong">
                  <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>" class="cong"><i class="fa-solid fa-plus" aria-hidden="true"></i></a>
                  <span><?php echo $cart_item['soluong']; ?></span>
                  <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>" class="tru"><i class="fa-solid fa-minus" aria-hidden="true"></i></a>
                </div>
                <div class="thanhtien">
                  Thành tiền : <span><?php echo number_format($thanhtien, 0, ',', '.') . ' ₫' ?></span>
                </div>
              </div>
            </div>
            <div class="gio_hang_content_right">
              <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
            </div>
            <div>
              <label>
                <input type="checkbox" name="selected_products[]" value="<?php echo $key; ?>" onclick="displaySelectedProducts()"> Chọn
              </label>
              <input type="hidden" name="product_ids[]" value="<?php echo $cart_item['id_sanpham']; ?>">
              <input type="hidden" name="quantities[]" value="<?php echo $cart_item['soluong']; ?>">
              <input type="hidden" class="product-price" value="<?php echo $thanhtien; ?>">
            </div>
          </div>
        <?php } ?>
        <div class="tongtien"><strong>Tổng Tiền giỏ hàng :</strong> <span><?php echo number_format($tongtien, 0, ',', '.') ?>₫</span></div>

<!-- Thông tin mua hàng -->
<div class="customer-info">
  <h3>Thông Tin Mua Hàng</h3>

  <!-- Họ và tên người mua -->
  <div class="info-item">
    <i class="fa-solid fa-user"></i>
    <p><strong>Họ và tên:</strong> <?php echo htmlspecialchars($user_info['fullname']); ?></p>
  </div>

  

  <!-- Số điện thoại -->
  <div class="info-item">
    <i class="fa-solid fa-phone"></i>
    <p><strong>Số điện thoại:</strong> <?php echo htmlspecialchars($user_info['sdt']); ?></p>
  </div>

  <!-- Địa chỉ giao hàng -->
  <div class="info-item">
    <i class="fa-solid fa-location-dot"></i>
    <label>Địa chỉ:
      <input type="text" id="addressInput" name="dia_chi_giao_hang" placeholder="Nhập địa chỉ giao hàng" required>
    </label>
    <label>Sử dụng địa chỉ mặc định
      <input type="checkbox" id="useDefault" name="use_default" value="1" onclick="toggleAddressInput()">
    </label>
  </div>

  <!-- Phương thức thanh toán -->
  <div class="info-item payment-options">
    <label>
      <input type="radio" name="payment_method" value="COD" checked>
      <img src="https://i.pinimg.com/736x/3e/35/15/3e3515428abe4843bb69cf936e404090.jpg" alt="COD" class="payment-icon">
      <span>COD</span>
    </label>
    <label>
      <input type="radio" name="payment_method" value="MOMO" disabled>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCp0JctwLH5Hgagb0TY-xvAuWK2NCGU4fZgQ&s" alt="Momo" class="payment-icon">
      <span>Momo (unable)</span>
    </label>
    <label>
      <input type="radio" name="payment_method" value="VNPAY" disabled>
      <img src="https://vnpay.vn/s1/statics.vnpay.vn/2023/6/0oxhzjmxbksr1686814746087.png" alt="VNPAY" class="payment-icon">
      <span>VNPAY (unable)</span>
    </label>
  </div>

  <!-- Sản phẩm đã chọn -->
  <div id="selectedProducts">
    <h4>Sản phẩm đã chọn:</h4>
    <ul id="productList"></ul>
    <p><strong>Tổng tiền phải trả:</strong> <span id="selectedTotal">0₫</span></p>
  </div>
</div>



        <div class="buy_btn">
          <button type="submit" name="submit_payment" id="submitButton" disabled>Đặt Hàng (Thanh toán trực tiếp)</button>
        </div>
        
      </form>

      <div class="clear"></div>
    <?php } else { ?>
      <div class="giohang_nothing">
        <div class="giohang_nothing_img">
          <img src="img/empty_cart.jpg" alt="">
        </div>
        <div class="giohang_nothing_text">
          <p>Giỏ hàng của bạn đang trống</p>
          <p>Vui lòng chọn sản phẩm vào giỏ hàng</p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<style>

.customer-info .payment-options {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 10px;
}

.payment-options label {
  display: flex;
  align-items: center;
  gap: 5px;
}

.payment-icon {
  width: 35px;
  height: 35px;
}

  .customer-info {
    margin-top: 20px;
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 5px;
    background-color: #f9f9f9;
  }
  .customer-info h3, .customer-info h4 {
    margin-bottom: 10px;
  }
  .info-item {
    display: flex;
    align-items: center;
    margin: 5px 0;
  }
  .info-item i {
    margin-right: 10px;
    color: #666;
  }
  .customer-info #selectedProducts {
    margin-top: 15px;
  }
</style>

<script>
  function toggleAddressInput() {
    var addressInput = document.getElementById("addressInput");
    var useDefault = document.getElementById("useDefault");
    
    if (useDefault.checked) {
      addressInput.value = "<?php echo htmlspecialchars($user_info['diachicuthe']); ?>";
      addressInput.readOnly = true;
    } else {
      addressInput.value = "";
      addressInput.readOnly = false;
    }
  }

  function displaySelectedProducts() {
    var selectedProducts = document.querySelectorAll('input[name="selected_products[]"]:checked');
    var productList = document.getElementById("productList");
    var selectedTotalElement = document.getElementById("selectedTotal");
    var submitButton = document.getElementById("submitButton");
    
    productList.innerHTML = ""; // Xóa nội dung cũ trước khi thêm mới
    let selectedTotal = 0;

    selectedProducts.forEach(function(checkbox) {
      var productContainer = checkbox.closest('.giohang_content');
      var productName = productContainer.querySelector('.thongtinhang_right_name').innerText;
      var productQuantity = productContainer.querySelector('.soluong span').innerText;
      var productPrice = parseFloat(productContainer.querySelector('.product-price').value);

      selectedTotal += productPrice;

      var li = document.createElement("li");
      li.textContent = `${productName} - Số lượng: ${productQuantity}`;
      productList.appendChild(li);
    });

    selectedTotalElement.innerText = selectedTotal.toLocaleString('vi-VN') + '₫';

    // Kích hoạt hoặc vô hiệu hóa nút "Đặt Hàng"
    submitButton.disabled = selectedProducts.length === 0;
  }
</script>