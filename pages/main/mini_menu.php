<div class="menu-right">
                <ul> 
                 
                <?php 
                  $sql_loaisp="SELECT * FROM tbl_loaisp where trangthai = 1 LIMIT 5";
                  $query_loaisp=mysqli_query($mysqli,$sql_loaisp);
                  
                ?>

                 
                
                   
                   
                    <div class="has-drop1">
                         <li class="has-drop-li"><a ><p >Thiết bị máy tính</p> <i class="fas fa-sort-down"></i></a></li>
                         <div class="drop-co-1">
                         <?php 
                                 $sql_loaisp2 ="SELECT * FROM tbl_loaisp where trangthai = 1 LIMIT 5";
                                 $query_loaisp2=mysqli_query($mysqli,$sql_loaisp2);
                                  while($row_loaisp2=mysqli_fetch_array($query_loaisp2)){ ?>
                                          
                                          <li><a href="index.php?quanly=seeall&idloaisp=loaisp<?php echo $row_loaisp2['id_loaisp'] ?>"><?php echo $row_loaisp2['tenloaisp'] ?></a></li>
                                       
                                  <?php } ?>
                  
                
                         

                         </div>
                    </div>

                    <div class="has-drop1">
                         <li class="has-drop-li"><a href="#" > <p >Thương Hiệu</p>  <i class="fas fa-sort-down"></i></a></li>
                         <div class="drop-co-1">
                         <?php 
                                 $sql_loaisp3 ="SELECT * FROM tbl_brand where trangthai = 1 limit 6";
                                 $query_loaisp3=mysqli_query($mysqli,$sql_loaisp3);
                                  while($row_loaisp3=mysqli_fetch_array($query_loaisp3)){ ?>
                                          
                                          <li><a href="index.php?quanly=seeall&idbrand=brand<?php echo $row_loaisp3['id_brand'] ?>"><?php echo $row_loaisp3['tenbrand'] ?></a></li>
                                       
                                  <?php } ?>

                             
                         </div>
                    </div>
                    
                    
                    <div class="has-drop1">
                         <li class="has-drop-li"><a href="#" > <p >Bài Viết</p> <i class="fas fa-sort-down"></i></a></li>
                         <div class="drop-co-1">
                         <?php 
                                 $sql_loaisp3 ="SELECT DISTINCT TOPIC FROM tbl_baiviet  ORDER BY id DESC";
                                 $query_loaisp3=mysqli_query($mysqli,$sql_loaisp3);
                                  while($row_loaisp3=mysqli_fetch_array($query_loaisp3)){ ?>
                                          <li><a href="index.php?quanly=see-tintuc&TOPIC=<?php echo $row_loaisp3['TOPIC'] ?>"><?php echo $row_loaisp3['TOPIC'] ?></a></li>
                                  <?php } ?>
                         </div>
                    </div>
                    <div class="has-drop1"> <li class="has-drop-li"> <a href="index.php?quanly=lienhe" > <p > Liên Hệ </p></a></li></div>
                    <div class="has-drop1"> <li class="has-drop-li"><a href="index.php?quanly=ctv" > <p  >Tuyển CTV </p> </a></li></div>
                    <div class="clear"></div>
                </ul>
            </div>