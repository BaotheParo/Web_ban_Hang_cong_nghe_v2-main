
<div class="main_giohang">
  <div class="url_sp2">
    <p><a href="#">Home</a> / <a href="#">Giỏ Hàng</a></p>
  </div>
  <div class="main_giohang_content">
  <?php
if(isset($_SESSION['cart'])){
  $i = 0;
  
  foreach($_SESSION['cart'] as $cart_item){
    $thanhtien = ($cart_item['soluong']*$cart_item['giasp']*(100 -$cart_item['sale']))/100;
    
   
    $i++;}

?>
  <div class="gio_hang_title"> Thanh Toán  Đơn Hàng ( <span><?php echo $i ?></span>  đơn hàng có sẵn)  </div>
  <?php } else {?>
  <div class="gio_hang_title"> Không có hàng trong giỏ  !!! </div>
  <?php } ?>



  <?php
if(isset($_SESSION['cart'])){
  $i = 0;
  $tongtien = 0;

  foreach($_SESSION['cart'] as $cart_item){
    $thanhtien = ($cart_item['soluong']*$cart_item['giasp']*(100 -$cart_item['sale']))/100;
    $tongtien+=$thanhtien;
    $tien = ($cart_item['giasp']*(100 -$cart_item['sale']))/100;
   
    $i++;

?>
 <div class="that_scrool" id="sanpham<?php echo $cart_item['id'] ?>"></div>
  <div class="giohang_content">
     <div class="gio_hang_content_left">
       <div class="thongtinhang_left">
               <img src="admincp/modules/quanlisanpham/uploads/<?php echo $cart_item['hinhanh']; ?>" alt="">
       </div>
       <div class="thongtinhang_right">
                 <div class="thongtinhang_masp">Mã sản phẩm: <span><?php echo $cart_item['id_sanpham']; ?></span> </div>
                 <div class="thongtinhang_right_name"><?php echo $cart_item['tensanpham']; ?></div>
                 <div class="thongtinhang_price"> Giá : <span><?php echo number_format($tien,0,',','.').'₫ '; ?></span> </div>
                 <div class="thongtinhang_price">Số Lượng :</div>
                 <div class="soluong">
                   <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>" class="cong"><i class="fa-solid fa-plus" aria-hidden="true"></i></a>
                       <span> <?php echo $cart_item['soluong']; ?></span>  
                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>" class="tru"><i class="fa-solid fa-minus" aria-hidden="true"></i></a>
                 </div>
                 <div class="thanhtien">
                       Thành tiền : <span><?php echo number_format($thanhtien,0,',','.').' ₫' ?></span>
                 </div>
       </div>
       
     </div>
     <div class="gio_hang_content_right">
      
        <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-trash-can"></i></a> 
      
     </div>
  </div>
  <?php } ?>



    <div class="tongtien">Tổng Tiền : <span><?php echo number_format($tongtien,0,',','.') ?>₫</span></div>

    <?php if(isset($_SESSION['dangky'])){
         ?>
      <div class="buy_btn">
      <a href="pages/main/thanhtoan.php">Đặt Hàng (Thanh toán trực tiếp)</a>
    </div>

    <?php  }else { ?>
           
      <div class="login-sp2 login_giohang"> <a href="index.php?quanly=login " class="login-sp"> Đăng nhập để thanh toán sản phẩm</a></div>

    <?php  } ?>
    

    
    <div class="clear"></div>
  
  <?php }else { ?>
      
    <div class="giohang_nothing">
      <div class="giohang_nothing_img">
        <img src="img/empty_cart.jpg" alt="">
      </div>
      <div class="giohang_nothing_text">
        <p>Giỏ hàng của bạn đang trống</p>
        <p>Vui lòng chọn sản phẩm vào giỏ hàng</p>
      </div>
    </div>
</div>
  <?php } ?>
</div>