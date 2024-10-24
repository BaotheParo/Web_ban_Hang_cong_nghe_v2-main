<?php
  
  $sql_sp1="SELECT * FROM tbl_sanpham,tbl_brand,tbl_loaisp WHERE tbl_sanpham.id_brand = tbl_brand.id_brand and tbl_sanpham.idloaisp = tbl_loaisp.id_loaisp and soluong > 0 ORDER BY id_sanpham DESC LIMIT 8";
  $query_sp1=mysqli_query($mysqli,$sql_sp1);

?>


<div class="main4" id="main2-4">
        <div class="main3-title1 main4-title">
                 Sản Phẩm mới nhất
               </div>
         <div class="main4-content">

             <?php 

                while($row_sp1 = mysqli_fetch_array($query_sp1)){
                   
              ?>
           <div class="sale-items content-items" >
                      <a href="">
 
                     
                      <div class="items-img-sale">
                      <img src="admincp//modules/quanlisanpham/uploads/<?php echo $row_sp1['hinhanh']?>" alt="">
                      </div>
                      <div class="items-title-sale">
                         <p><?php echo $row_sp1['tensanpham'] ?></p>
                      </div>
                      <div class="place">
                      <i class="fa-solid fa-location-dot"></i> <p> <?php echo $row_sp1['sanxuat'] ?></p>
                      </div>
                      <div class="loaisp">
                      <i class="fa-solid fa-plus"></i> <p><?php echo $row_sp1['tenloaisp'] ?></p>
                      </div>
                      <div class="brand">
                      <i class="fa-brands fa-viacoin"></i> <p><?php echo $row_sp1['tenbrand'] ?></p>
                      </div>
                      <div class="box-price">
                             
                            <div class="items-price-news">
                            <p><?php echo number_format(($row_sp1['giasp']),0,',','.' ).' ₫' ;?> </p>
                       </div>
                       
                    </div>
                    
                </a><div class="items-show">
                        <div  class="btn-show">
                           
                              <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sp1['id_sanpham'] ?>"><i class="fa-solid fa-eye"></i></a>  
                         
                        </div>
                        
                    </div>
              </div>
              <?php } ?>

              
  
  
       <div class="clear"></div>
        </div>
        <div class="main4-btn">
            <a href="index.php?quanly=seeall">
                See - More
            </a>
        </div>
</div>

<script src="js/app/app.js">
 
</script>