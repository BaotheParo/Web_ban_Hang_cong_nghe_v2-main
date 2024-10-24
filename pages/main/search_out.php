<?php 
    
    include 'admincp/config/config.php';

    if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['key'];
	}
    $sql_sp1="SELECT * FROM tbl_sanpham,tbl_brand,tbl_loaisp WHERE tbl_loaisp.id_loaisp = tbl_sanpham.idloaisp and tbl_sanpham.id_brand = tbl_brand.id_brand and soluong >0  AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%' ORDER BY id_sanpham DESC";
    $query_sp1=mysqli_query($mysqli,$sql_sp1);
?>

<div class="main4 main_all" id="main2-4">
        <div class="main3-title1 main4-title">
                 Các Sản thuộc <span><?php   echo $tukhoa; ?></span>
               </div>
         <div class="main4-content">

             <?php 
                
                while($row_sp1 = mysqli_fetch_array($query_sp1)){
              ?>
           <div class="sale-items content-items" >
                      <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sp1['id_sanpham'] ?>">
                      
                     
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
              




              <?php }  ?>

              
  
  
       <div class="clear"></div>
        </div>
     
</div>
