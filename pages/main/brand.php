<?php
  
  $sql_sp1="SELECT * FROM tbl_brand where id_brand != 16 limit 6";
  $query_sp1=mysqli_query($mysqli,$sql_sp1);

?>




        <div class="main3" id="main2-2">
            <div class="main3-title1">
                Thương hiệu  nổi tiếng
            </div>
           <div class="band-list">
                 <div class="band-list-co owl-carousel">

                    <?php
                     while ($row_sp1 = mysqli_fetch_array($query_sp1)) {
                      ?>
                      <div class="band-item">
                        <a href="index.php?quanly=seeall&idbrand=brand<?php echo $row_sp1['id_brand'] ?>">
                            <img src="admincp/modules/quanlibrand/ptc/<?php echo $row_sp1['hinhanhbrand']?>" >
                        </a>
                      </div>
                    
                    <?php } ?>

                     
                     
                 </div>
             </div>
        </div>

        