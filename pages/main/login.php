

<?php
	if(isset($_POST['dangnhap'])){
		$username = $_POST['username'];
		$password = ($_POST['password']);
		$sql = "SELECT * FROM tbl_user WHERE username='".$username."' AND password='".$password."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['fullname'];
			$_SESSION['id_khachhang'] = $row_data['id_user'];
      $_SESSION['quyen']=$row_data['quyen'];
      $_SESSION['fullname']=$row_data['fullname'];
      $_SESSION['id_user']=$row_data['id_user'];
      if($_SESSION['quyen']=="khach")
        echo '<script>window.history.go(-2)</script>';
      else
      $_SESSION['dangnhap']=$username;
     
        echo'<script>window.location.assign("/Web_ban_Hang_cong_nghe_v2-main/admincp/index.php")</script>';
		}else{
      session_unset();
session_destroy();
      $em = " Sai tên đăng nhập hoặc mật khẩu , xin vui lòng thử lại";
      echo '<script>window.location="index.php?quanly=login&em='.$em.'"</script>';
		}
	} 
?>


<div class="main2 main-login"></div>

<div class="login-box"><?php if (isset($_GET['em'])) { ?>
	 		<div class=" alert-warning1" >
			  <?php echo htmlspecialchars($_GET['em']);
              echo '<script>setTimeout(function() {
                window.location.href = "index.php?quanly=login";
              }, 3000);</script>';
              ?>
			</div>
			<?php } ?>
  <h2>Đăng Nhập</h2>
  <form  action="" method="POST" autocomplete="off">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Tên đăng nhập</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Mật khẩu</label>
    </div>
    <input type="submit" value="Đăng Nhập" name="dangnhap" class="dangky">
    <a href="index.php?quanly=signup" class="check-btn">Đăng kí nếu chưa có tài khoản</a>
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
  top: 450px;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
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
     min-height: 550px;
}
</style>