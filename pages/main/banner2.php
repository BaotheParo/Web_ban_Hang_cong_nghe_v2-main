<?php
  
  $sql_sp1="SELECT * FROM tbl_banner ORDER BY thutu  ";
  $query_sp1=mysqli_query($mysqli,$sql_sp1);

?>


<div class="main3" id="main2-3">
            <div class="main3_re-content owl-carousel">
                      
                      <?php
                     while ($row_sp1 = mysqli_fetch_array($query_sp1)) {
                      ?>
                      <div class="main3_re-content-items">
                          <a href="">
                            <img src="admincp/modules/quanlibanner/uploads/<?php echo $row_sp1['anh_banner']?>" alt="">
                          </a>
                    </div>
                    <?php } ?>
            
        </div>