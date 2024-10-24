<?php
    
    include 'admincp/mudules2/getLast.php';
    $sql_sp = "SELECT * FROM tbl_loaisp,tbl_brand,tbl_sanpham WHERE  tbl_loaisp.id_loaisp = tbl_sanpham.idloaisp AND tbl_sanpham.id_brand = tbl_brand.id_brand AND  tbl_sanpham.id_sanpham = '$_GET[id_sanpham]'   LIMIT 1";
    $query_sp = mysqli_query($mysqli,$sql_sp);
  

    $sql_danhmuc = "SELECT * FROM tbl_loaisp";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
    

    $sql_sp1="SELECT * FROM tbl_sanpham,tbl_brand,tbl_loaisp WHERE tbl_sanpham.id_brand = tbl_brand.id_brand  and tbl_loaisp.id_loaisp = tbl_sanpham.idloaisp and soluong >0 ORDER BY id_sanpham DESC LIMIT 30";
    $query_sp1=mysqli_query($mysqli,$sql_sp1);



   
    $tbl_comment = "SELECT * FROM tbl_comments,tbl_user WHERE tbl_comments.id_user = tbl_user.id_user AND tbl_comments.id_sp = '$_GET[id_sanpham]' ORDER BY tbl_comments.id_comment DESC";
    $query_comment = mysqli_query($mysqli,$tbl_comment);
    
    if(isset($_SESSION['id_khachhang'])){
      $id_user =  $_SESSION['id_khachhang']; 
    }
   
?>
<?php
   
   while($row_sp = mysqli_fetch_array($query_sp)) {
    while($row_loaisp = mysqli_fetch_array($query_danhmuc)){
     
       
       if($row_sp['id_loaisp'] == $row_loaisp['id_loaisp']){
           $key_loaisp = $row_loaisp['id_loaisp'];
           $name_loaisp = $row_loaisp['tenloaisp'];
       }}
?>
   
<div class="main-sp-all">
    <div class="clear"></div>
    <div class="url_sp">
        <p><a href="#"><?php echo $name_loaisp ?></a> \ <a href="#"><?php echo $row_sp['tenloaisp'] ?></a> \ <a href="#"><?php echo $row_sp['tenbrand'] ?></a></p>
    </div>
    <div class="main-sp" id="main_sp">
        
    
      <div class="main-sp-top" id="main2-6">
        <div class="tensanpham">
        <?php echo $row_sp['tensanpham'] ?>
        </div>

          <div class="main-sp-left">
             <div class="main1_sp_left">
                    
               
                    <div class="container1">



  <div class="mySlides">
    <img src="admincp/modules/quanlisanpham/uploads/<?php echo $row_sp['hinhanh'] ?>" style="width:100%">
  </div>
   

  <?php 
   $sql_picture2 = "SELECT * FROM img_product WHERE id_product='$_GET[id_sanpham]'";
   $query_picture2 = mysqli_query($mysqli,$sql_picture2);
  while($row_picture2 = mysqli_fetch_array($query_picture2)){
  ?>
  


  <div class="mySlides">
    <img src="admincp/modules/quanlisanpham/upload2/<?php echo $row_picture2['img_product'] ?>" style="width:100%">
  </div>
   
  <?php } ?>
   
   
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="admincp/modules/quanlisanpham/uploads/<?php echo $row_sp['hinhanh'] ?>" style="width:100%;" onclick="currentSlide(1)" >
    </div>
     
    <?php

$sql_picture2 = "SELECT * FROM img_product WHERE id_product='$_GET[id_sanpham]'";
$query_picture2 = mysqli_query($mysqli,$sql_picture2);
$i=0;
while($row_picture2 = mysqli_fetch_array($query_picture2)){
$i++;

?>

   

<div class="column">
      <img class="demo cursor" src="admincp/modules/quanlisanpham/upload2/<?php echo $row_picture2['img_product'] ?>" style="width:100%;" onclick="currentSlide(<?php echo $i+1 ?>)" >
    </div>



<?php
}

?>





   
  </div>
</div>


                    
             </div>
          <form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>" method="POST">
             <div class="main1_sp_right">
                 <div class="sp_line1">
                     <p>Mã SP: <span><?php echo $row_sp['id_sanpham'] ?></span>  | Số lượng có sẵn : <span><?php echo $row_sp['soluong'] ?></span>  | Lượt mua : <span><?php echo  $row_sp['luongmua'] ?></span> </p>
                 </div>
                 <div class="sp_line2">
                     <div class="sp_line2-title">
                         Thông Số sản phẩm
                     </div>
                     <div class="sp_line2-content">
                         <?php echo $row_sp['tomtat'] ?>
                     </div>
                 </div>
                 <div class="sp_line4">
                     <table>
                     <tr>
                         <th>Danh Mục sản phẩm </th>
                         <td><?php echo $row_sp['tenloaisp'] ?></td>
                        

                     </tr>
                     <tr>
                         <th>Thương Hiệu</th>
                         <td><?php echo $row_sp['tenbrand'] ?></td>
                     </tr>
                     <tr>
                         <th>Nơi Sản Xuất</th>
                         <td><?php echo $row_sp['sanxuat'] ?></td>
                     </tr>
                    </table>
                 </div>
                 
                 
                 <div class="sp_line3 ">
                     <div>

                     <p><span class="box-new_price"><?php echo number_format(($row_sp['giasp']),0,',','.' ).' ₫'  ?></span> </p>
                     </div>
                      
                      <div class="sp_tag1">
                          <div class="sp_tag">Giá đã bao gồm VAT </div>
                         
                          <div class="sp_tag sp_tag2">Bảo hành 12 tháng </div>
                      </div>
                 </div>
                 <input type="submit" class="themgiohang" value="ĐẶT MUA NGAY" name="themgiohang">
                 <p class="or">--------------- Hoặc ---------------</p>
                 <input type="submit" class="tuvan" name="tuvan" value="Nhận tư vấn qua gmail hoặc phone">
                 <p class="or"><i>*Note: Với những sản phẩm hết hàng có sẵn thì có thể phải chờ một thời gian để shop nhập hàng . Vui lòng lưu ý khi đặt hàng </i></p>
             </div>

             </form>


          </div>
         
          <div class="main-sp-right">
              <div class="main-sp-right-title">
                  Có thể bạn quan tâm
              </div>
              <div class="main-sp-right-content">
                  <marquee direction="down"  >
                      
                  <?php  
                    
                    
                      while($row_sp1 = mysqli_fetch_array($query_sp1)){
                         if($row_sp1['id_loaisp'] == $row_sp['idloaisp'] && $row_sp1['id_sanpham'] != $row_sp['id_sanpham'] ){
                  
                  ?>
                    <div class="sp-right-content-item">
                        <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sp1['id_sanpham']?>">
                        <div class="sp-right-content-item-img">
                            <img src="admincp/modules/quanlisanpham/uploads/<?php echo $row_sp1['hinhanh'] ?>" alt="">
                        </div>
                        <div class="sp-right-content-item-title">
                        <?php echo $row_sp1['tensanpham'] ?>
                        </div>
                       
                        </a></div>

                        <?php } } ?>
                       
                       
                  </marquee>
              </div>
          </div>
   <div class="clear"></div>   </div>
   <div class="main_sp_top2">
     
     <div class="main_sp_top2_content">
       <div class="main_sp_top2_content_left" id="main_sp_top2_content_left">
         <div class="main_sp_top2_title">
       Đánh giá tổng quan về : <span><?php echo $row_sp['tensanpham'] ?></span> 
     </div> 
     <div class="content_sp" id="content_sp"> <?php echo $row_sp['noidung'] ?> </div>
     <div class="view-more-area" id="view-more-area">
        
     </div>
       <div class="btn-see_more" onclick="seemore()">
          <a id="notsee" class="notsee">
        
        </a>
        </div>
       </div>
       <div class="main_sp_top2_content_right" id="main_sp_top2_content_right">
           <div class="main_sp_top2_title">
                Thông số kĩ thuật
          </div> 
          <div class="main_sp_top2_content">
         
  
    <?php echo $row_sp['thongso'] ?>
  

          </div>
       </div>
       <div class="clear"></div>
    
     </div>
   </div>
   <div class="main_sp_top2">
     <div class="main_sp_top2_content" id="main_sp_top2_content">
       <div class="main_sp_top2_content_left" id="main_sp_top2_content_left2">
          <div class="main_sp_top2_title">
             Đánh giá của khách hàng
          </div> 

          <?php if (isset($_GET['ems'])) { ?>
	 		<div class="ems-send" >
			  <?php echo htmlspecialchars($_GET['ems']);?>
			</div>
			<?php } ?>
          <?php   if(isset($_SESSION['dangky'])) { ?>


          <div class="content_sp2">
 
              <form action="admincp/mudules2/xuli_cmt.php?id_sanpham=<?php echo $row_sp['id_sanpham'] ?>&id_user=<?php echo $id_user ?>" method="POST" >

              <textarea rows="5"  name="binhluan" style="resize: none" placeholder="Để lại bình luận của bạn , nhân viên tư vấn sẽ sớm phản hồi lại"></textarea>

              <input type="submit" name="guibinhluan" value="Gửi bình luận" class="send_cmt">
              
              <div class="clear"></div>
              </form>

          </div>


          <?php }else{ ?>

            <div class="login-sp2"> <a href="index.php?quanly=login " class="login-sp"> Đăng nhập để bình luận , đánh giá về sản phẩm</a></div>
                 
          <?php } ?>
          

        <?php while($row_comment =mysqli_fetch_array($query_comment) ){?>


          <div class="user-comment">
            <div class="user-comment-left">
              <div class="user-comment-left-img">

                <img src="pages/ptc/<?php echo $row_comment['hinhanh'] ?>" alt="" class="user-avatar">
              </div>
            
              <div class="name-user"><?php echo $row_comment['fullname'] ?></div>
              <div class="time-comment"><?php echo last_time($row_comment['time_cmt'])  ?></div>
            </div>
            <div class="user-comment-right">
              <div class="user-comment">
                <?php echo $row_comment['noidungcmt'] ?>
              </div>
              <?php 
                     $tal_shop_comment = "SELECT * FROM shop_cmt  WHERE id_comment_user = '$row_comment[id_comment]'   ";
                     $query_shop_comment = mysqli_query($mysqli,$tal_shop_comment);
                 
                    while ($row_comment_shop = mysqli_fetch_array($query_shop_comment)) {
                     
                  
                 ?>  
              <div class="shop-box-comment">
                <div class="admin-avatar">
                  <img src="img/anh2.png" alt="" class="admin-img">
                </div>
                <div class="box-cmt">     
                  <div class="admin-name">
                    <a>Admin DevNguyenStore</a>  
                  </div>
                  <div class="admin-cmt">
                   <?php echo $row_comment_shop['noidung'] ?>
                  </div>
                  <div class="time-admin-cmt">
                       1/1/2022 17:40
                  </div>
                  
                  

                </div>
                
                <div class="none-comment"></div>
              </div><?php } ?>
            </div>
          </div>
          <?php } ?>
       </div>

     </div>
  

   </div>
   <div class="clear"></div>
 
    </div>
  </div>
<?php }  ?>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>
<style>
    * {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container1 {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 20%;
  height: 70px !important;
  margin: 12px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
  padding: 10px;
  width: 100% !important;
  height: 100% !important;
  object-fit: cover;
}

.active,
.demo:hover {
  opacity: 1;
}














</style>
<script src="js/app/app.js">
 
</script>