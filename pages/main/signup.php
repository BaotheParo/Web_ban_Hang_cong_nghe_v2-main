
<div class="main5" style="margin-top: 20px;">

<?php
	if(isset($_POST['dangky'])) {
		$username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city2 = $_POST['calc_shipping_provinces'];
    $mall = $_POST['calc_shipping_district'];
    $fulladress = $_POST['fulladress'];
  
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    
     if($city2 == 1){
      $city = "An Giang";
     }else if($city2 == 2){
      $city = "Bà Rịa - Vũng Tàu";
      }else if($city2 == 3){
      $city = "Bạc Liêu";
      }else if($city2 == 4){
      $city = "Bắc Kạn";
      }else if($city2 == 5){
      $city = "Bắc Giang";
      }else if($city2 == 6){
      $city = "Bắc Ninh";
      }else if($city2 == 7){
      $city = "Bến Tre";
      }else if($city2 == 8){
      $city = "Bình Dương";
      }else if($city2 == 9){
      $city = "Bình Định";
      }else if($city2 == 10){
      $city = "Bình Phước";
      }else if($city2 == 11){
      $city = "Bình Thuận";
      }else if($city2 == 12){
      $city = "Cà Mau";
      }else if($city2 == 13){
      $city = "Cao Bằng";
      }else if($city2 == 14){
      $city = "Cần Thơ";
      }else if($city2 == 15){
      $city = "Đà Nẵng";
      }else if($city2 == 16){
      $city = "Daklak";
      }else if($city2 == 17){
      $city = "Dăk Nông";
      }else if($city2 == 18){
      $city = "Đồng Nai";
      }else if($city2 == 19){
      $city = "Đồng Tháp";
      }else if($city2 == 20){
      $city = "Điện Biên";
      }else if($city2 == 21){
      $city = "Gia Lai";
      }else if($city2 == 22){
      $city = "Hà Giang";
      }else if($city2 == 23){
      $city = "Hà Nam";
      }else if($city2 == 24){
      $city = "Hà Nội";
      }else if($city2 == 25){
      $city = "Hà Tĩnh";
      }else if($city2 == 26){
      $city = "Hải Dương";
      }else if($city2 == 27){
      $city = "Hải Phòng";
      }else if($city2 == 28){
      $city = "Hòa Bình";
      }else if($city2 == 29){
      $city = "Hậu Giang";
      }else if($city2 == 30){
      $city = "Hưng Yên";
      }else if($city2 == 31){
      $city = "Thành Phố Hồ Chí Minh";
      }else if($city2 == 32){
      $city = "Khánh Hòa";
      }else if($city2 == 33){
      $city = "Kiên Giang";
      }else if($city2 == 34){
      $city = "Kon Tum";
      }else if($city2 == 35){
      $city = "Lai Châu";
      }else if($city2 == 36){
      $city = "Lào Cai";
      }else if($city2 == 37){
      $city = "Lạng Sơn";
      }else if($city2 == 38){
      $city = "Lâm Đồng";
      }else if($city2 == 39){
      $city = "Long An";
      }else if($city2 == 40){
      $city = "Nam Định";
      }else if($city2 == 41){
      $city = "Nghệ An";
      }else if($city2 == 42){
      $city = "Ninh Bình";
      }else if($city2 == 43){
      $city = "Ninh Thuận";
      }else if($city2 == 44){
      $city = "Phú Thọ";
      }else if($city2 == 45){
      $city = "Phú Yên";
      }else if($city2 == 46){
      $city = "Quảng Bình";
      }else if($city2 == 47){
      $city = "Quảng Nam";
      }else if($city2 == 48){
      $city = "Quảng Ngãi";
      }else if($city2 == 49){
      $city = "Quảng Ninh";
      }else if($city2 == 50){
      $city = "Quảng Trị";
      }else if($city2 == 51){
      $city = "Sóc Trăng";
      }else if($city2 == 52){
      $city = "Sơn La";
      }else if($city2 == 53){
      $city = "Tây Ninh";
      }else if($city2 == 54){
      $city = "Thái Bình";
      }else if($city2 == 55){
      $city = "Thái Nguyên";
      }else if($city2 == 56){
      $city = "Thanh Hóa";
      }else if($city2 == 57){
      $city = "Thừa Thiên Huế";
      }else if($city2 == 58){
      $city = "Tiền Giang";
      }else if($city2 == 59){
      $city = "Trà Vinh";
      }else if($city2 == 60){
      $city = "Tuyên Quang";
      }else if($city2 = 61){
      $city = "Vĩnh Long";
      }else if($city2 == 62){
      $city = "Vĩnh Phúc";
      }else if($city2 == 63){
      $city = "Yên Bái";
      }


    
  
 
    if (mysqli_num_rows(mysqli_query($mysqli,"SELECT username FROM tbl_user WHERE username='$username'")) > 0){
      $em = "Tài khoản (".$username.") đã tồn tại ";
      echo '<script>window.location="index.php?quanly=signup&em='.$em.'"</script>';
  }else {
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_user(username,password,fullname,sdt,email,tinh,tp,diachicuthe,hinhanh) VALUES('$username','$password','$fullname','$phone','$email','$city','$mall','$fulladress','$hinhanh')");
		if($sql_dangky){
			if(1!=0){
         move_uploaded_file($hinhanh_tmp,'pages/ptc/'.$hinhanh);
					
			$_SESSION['dangky'] = $fullname;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
      echo '<script>window.history.go(-2)</script>';
			} 
			 
		
		}
  }
   
  
	}
?>

<div class="main2 main-login main-signup"></div>

<div class="login-box login-box2">
<?php if (isset($_GET['em'])) { ?>
	 		<div class=" alert-warning1" >
			  <?php echo htmlspecialchars($_GET['em']);?>
			</div>
			<?php } ?>
  <h2>Đăng Kí</h2>
  <form method="POST" action=""  enctype="multipart/form-data">
      <div class="form-left">
      
      <div class="user-box">
      <input type="text" name="username" required="">
      <label>Tên Đăng Nhập</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Mật Khẩu</label>
    </div>
    <div class="user-box">
      <input type="text" name="fullname" required="">
      <label>Họ Và Tên người dùng</label>
    </div>
    <div class="user-box">
      <input type="text" name="phone" required="">
      <label>Số Điện Thoại</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>Gmail</label>
    </div>
    
    <input type="submit" value="Đăng Ký" name="dangky" class="dangky">
   
    <a href="index.php?quanly=login" class="check-btn">Đăng Nhập nếu có tài khoản</a>
      </div>
      <div class="form-right">
        <div class="box-select2">
           <select name="calc_shipping_provinces" class="city1" required="" id="city">
             <option value="">Tỉnh / Thành phố</option>
           </select>
           <select name="calc_shipping_district" class="city1" required="">
            <option value="">Quận / Huyện</option>
           </select>
        </div>
           <input class="billing_address_1" name="" type="hidden" value="">
           <input class="billing_address_2" name="" type="hidden" value="">
         <div class="user-box">
          <input type="text" name="fulladress" required="">
          <label>Địa chỉ cụ thể</label>
        </div>
        <div class="user-box">
            <p>Ảnh đại diện</p>
           <input type="file" name="hinhanh" required="">
           
    </div>
      </div>
    
  </form>
</div>

</div>

<style>

   .dangky{
     background-color: rgba(0,0,0,.0);
     border:1px solid #03e9f4;
     padding: 10px 20px;
     color:#fff;
   }
   .dangky:hover{
    background: #03e9f4;
  color: #fff !important;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
   }
    .login-box {
  position: absolute;
  top: 500px;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
} 
.login-box2{
    width: 800px ;    
    }
.login-box2 form {
    display: flex ;
    justify-content: space-between;
}
.form-left{
    width: 47% ;
}
.form-right{
    width: 47% ;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 10px;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -30px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4 !important;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff !important;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

.main-login{
     background: linear-gradient(#141e30, #243b55);
     min-height: 500px;
}
.city1{
    width: 60% !important;  
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
  margin-top: 19px;
}
.city1 option{
    color: #000 !important;
}
.main-signup{
    height: 800px ;
}
.user-box p{
    color :#fff;
    font-size: 17px;
}
</style>
