<?php
  
  $sql_sp1="SELECT * FROM tbl_sanpham,tbl_brand WHERE tbl_sanpham.id_brand = tbl_brand.id_brand and soluong > 0 ORDER BY id_sanpham DESC LIMIT 5";
  $query_sp1=mysqli_query($mysqli,$sql_sp1);

?>


<div class="banner">
          
            
                <div class="tab-link">
                <div class="tab-link_i"><a target="_blank" href="https://www.facebook.com/quan.nguyentrong.35325"><i class="fab fa-facebook-f"></i></a> </div> 
                <div class="tab-link_i"><a target="_blank" href="https://www.youtube.com/channel/UCmCJIuawU-mSDhO6IAA08eA"><i class="fab fa-youtube"></i></a> </div> 
                 <div class="tab-link_i"><a target="_blank" href="https://join.skype.com/invite/y7fWogfcQCpP"><i class="fab fa-skype"></i></a> </div>
                <div class="tab-link_i"><a target="_blank" href="https://github.com/quandarius-pfp"> <i class="fab fa-github"></i></a>  </div> 
                </div>
                <div class="banner-list ">
                <div class="owl-carousel banner-list-content ">
                           

                           <?php 

                while($row_sp1 = mysqli_fetch_array($query_sp1)){
                 ?>
                   
              
                     <div class="banner-items">
                               <div class="banner-items-left">
                                
                                    <div class="banner-title1"> New product </div>
                                   <div class="banner-title2"><a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sp1['id_sanpham'] ?>"><?php echo $row_sp1['tensanpham'] ?></a></div>
                                   <div class="banner-btn">
                                       <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sp1['id_sanpham'] ?>">Buy Now</a>
                                   </div>
                               </div>
                               <div class="banner-items-right">
                               <img src="admincp//modules/quanlisanpham/uploads/<?php echo $row_sp1['hinhanh']?>" alt="">
                               </div>
                           </div>
                     

              <?php } ?>

                          

                           
               </div>
                         
                </div>
           
        </div>
