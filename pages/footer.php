<footer>
<div class="row1">
            <div class="col">
            <div class="logo">
                            <a href="index.php">
                            <span>D</span>ev <span>N</span>guyen <span>S</span>tore
                        </a>
                        </div>
                <br>
                <br>
                <p>Nơi bạn tìm thấy sự hòa quyện giữa phong cách và sự thoải mái qua những đôi giày Sneaker đẳng cấp.</p>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p>958 LacLongQuan Street</p>
                <p>TanBinh District</p>
                <p>HoChiMinh City</p>
                <p class="email-id">acoyeuekhong@yahoo.com</p>
                <h4>+84 22 2222 2222</h4>
            </div>
            <div class="col">
                <h3>Links <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Policy</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>NewsLetter <div class="underline"><span></span></div></h3>
                <form>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Nhập email của bạn" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Sneaker Oasis Copyright © 2023 - Privacy Policy</p>
</footer>

<style>
    footer{
        margin-top: 20px;
    font-family: "Poppins", sans-serif;
    width: 100%;
    position: absolute;
    background: linear-gradient(to bottom, #112D60, #B6C0C5);
    color: #fff;
    padding-top:10px ;
    font-size: 13px;
    line-height: 20px;
    border-top-left-radius: 125px;
    
  }

  .row1{
    width: 85%;
    margin: auto;
    display: flex;    
    justify-content: space-between;
  }

  .col{
    flex-basis: 25%;
    padding: 10px;
  }

  

  .col:nth-child(2){
    flex-basis: 15%;
  }

  .logo1{
    width: 80px;
    margin-bottom: 30px;
  }

  .col h3{
    width: fit-content;
    margin-bottom: 40px;
    position: relative;
    
  }
  .email-id{
    width: fit-content;
    border-bottom: 1px solid #ccc;
    margin-bottom: 5px;
  }

  ul li{
    list-style: none;
    margin-bottom: 12px;
  }

  ul li a{
    text-decoration: none;
    color: #fff;
  }
  footer form{
    padding-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #ccc;
    margin-bottom: 50px;
  }

  footer form .fa-solid{
    font-size: 18px;
    margin-right: 10px;
  }

  form input{
    width: 100%;
    background: transparent;
    color: #ccc;
    border: 0;
    outline: none;
  }
  
  form button{
    background: transparent;
    border: 0;
    outline: none;
    cursor: pointer;
  }

  form button .fa-solid{
    font-size: 16px;
    color: #ffffff;
  }

  .social-icons .fa-brands{
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    color: #000;
    margin-right: 15px;
    cursor: pointer;
  }

  hr{
    width: 90%;
    border: 0;
    border-bottom: 1px solid #ccc;
    margin: 20px auto;
  }

  .copyright{
    text-align: center;
    padding-bottom: 10px;
  }

  .underline {
        width: 100%;
        height: 5px;
        background: #767676;
        border-radius: 3px;
        position: relative;
        margin-bottom: 15px;
    }

    .underline span {
        width: 15px;
        height: 100%;
        background: #fff;
        border-radius: 3px;
        position: absolute;
        top: 0;
        left: 10px;
        animation: moving 2s linear infinite;
    }

    @keyframes moving {
        0% { left: 10px; }
        50% { left: 100%; }
        100% { left: 10px; }
    }
</style>