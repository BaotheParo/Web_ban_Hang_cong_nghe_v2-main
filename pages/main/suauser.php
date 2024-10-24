
<?php 
  if(isset($_SESSION['dangky'])){
  

  
  $sql_select = "SELECT * FROM tbl_user WHERE id_user = '".$_SESSION['id_khachhang']."'";
  $row_select = mysqli_query($mysqli,$sql_select);

  $row_data = mysqli_fetch_array($row_select);
     
  
?>




<div class="main2 main-login main-signup"></div>

<div class="login-box login-box2">
<?php if (isset($_GET['em'])) { ?>
	 		<div class=" alert-warning1" >
			  <?php echo htmlspecialchars($_GET['em']);?>
			</div>
			<?php } ?>
  <h2>Sửa Thông tin người dùng</h2>
  <form method="POST" action="pages/main/suauser_xuli.php?id_user=<?php echo $_SESSION['id_khachhang'] ?>"  enctype="multipart/form-data">
      <div class="form-left">
      
      
    
    <div class="user-box">
      <input type="text" name="fullname" required="" value="<?php echo $row_data['fullname'] ?>">
      <label>Họ Và Tên người dùng</label>
    </div>
    <div class="user-box">
      <input type="text" name="phone" required="" value="<?php echo $row_data['sdt'] ?>">
      <label>Số Điện Thoại</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="" value="<?php echo $row_data['email'] ?>">
      <label>Gmail</label>
    </div>
    
    <input type="submit" value="Sửa Thông tin người dùng" name="suauser" class="dangky">
   
   
      </div>
      <div class="form-right">
        <div class="box-select2">
           <select name="calc_shipping_provinces" class="city1"  id="city" >
             <option value="">Tỉnh / Thành phố</option>
           </select>
           <select name="calc_shipping_district" class="city1" >
            <option value="">Quận / Huyện</option>
           </select>
        </div>
           <input class="billing_address_1" name="" type="hidden" value="">
           <input class="billing_address_2" name="" type="hidden" value="">
         <div class="user-box">
          <input type="text" name="fulladress" required="" value="<?php echo $row_data['diachicuthe'] ?>">
          <label>Địa chỉ cụ thể</label>
        </div>
        <div class="user-box">
            <p>Ảnh đại diện</p>
           <input type="file" name="hinhanh">
           
    </div>
      </div>
    
  </form>
</div>

</div>
<?php }else{

    echo '<script>window.location="index.php"</script>';
 } ?>


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
    width: 800px !important;    
    }
.login-box2 form {
    display: flex !important;
    justify-content: space-between;
}
.form-left{
    width: 47% !important;
}
.form-right{
    width: 47% !important;
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
    height: 800px !important;
}
.user-box p{
    color :#fff;
    font-size: 17px;
}
</style>
