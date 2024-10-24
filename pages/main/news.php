<?php 

$sql_sp = "SELECT * FROM tbl_baiviet ORDER BY tbl_baiviet.id DESC";
   $query_sp1 = mysqli_query($mysqli,$sql_sp);
?>

<div class="main3" id="main2-5">
            <div class="main3-title1 main4-title">Tin tức mới nhất</div>
            <div class="main5-co owl-carousel">
              <?php      while($row_sp1 = mysqli_fetch_array($query_sp1)){ ?>
                <div class="tt-items">
                    <a href="index.php?quanly=seetintuc&TOPIC=<?php echo $row_sp1['TOPIC'] ?>">
                        <div class="tt-pic">
                              <img src="admincp/modules/quanlibaiviet/uploads/<?php echo $row_sp1['hinhanh']?>" alt="">
                        </div>
                      
                        <div class="clear"></div>
                        <div class="tt-co">
                          <?php echo $row_sp1['tenbaiviet'] ?>
                        </div>
                        <div class="date-time-cmt">
                            <?php echo $row_sp1['time'] ?>
                        </div>
                        <div class="tt-titl">
                            <?php echo $row_sp1['tomtat'] ?>
                        </div>
                    </a>
                    
                </div>
                <?php } ?>
               
               
                
            </div>
            <div class="clear"></div>
        </div>