<?php 

if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
} 
$sql_sp1="SELECT * FROM tbl_sanpham,tbl_brand WHERE tbl_sanpham.id_brand = tbl_brand.id_brand and soluong > 0 ORDER BY id_sanpham DESC LIMIT 30";
$query_sp1=mysqli_query($mysqli,$sql_sp1);
?>

<div class="header">
            <div class="header-top">
                <div class="header-top-content">
                    <div class="header-top-1">
                        <marquee width="100%" behavior="scroll">
                            <?php while($row_sp1 = mysqli_fetch_array($query_sp1)){ ?>
                            <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sp1['id_sanpham'] ?>" class="header-top-1-text" id="text3"><?php echo $row_sp1['tensanpham']?></a>
                            <?php }  ?>
                        </marquee>
                    </div>
                    <div class="header-top-2">
                      
                       
                    <label class="switch" >
                      <input type="checkbox" onclick="myFunction()">
                      <span class="slider round"></span>
                    </label>
                   

                    <?php
                        
                        if(isset($_SESSION['dangky'])){ 

                            ?>
                            
                            <?php
                              if(isset($_SESSION['dangky'])){
                                echo '<div class="header-top-2-items"><a  title="Đăng Nhập" ><p >'.$_SESSION['dangky'].'</p> </a></div>';
                              }
                                
                            ?>
                           </a> </li>
                           <div class="header-top-2-items"><a href="pages/main/logout.php" title="Đăng Xuất" ><i class="fas fa-sign-in-alt"></i><p >Đăng Xuất</p> </a></div>
                            
                            <?php
                            } else { ?>

                                 <div class="header-top-2-items"><a href="index.php?quanly=login" title="Đăng Nhập" ><i class="fas fa-sign-in-alt"></i><p >Đăng Nhập</p> </a></div>


                                 <div class="header-top-2-items"><a href="index.php?quanly=signup" title="Đăng ký" ><i class="fas fa-sign-out-alt"></i><p data-i18n="header.register">Đăng Kí</p> </a></div>
                           <?php }


                    ?>


                       
                        
                    </div>
                </div>
            </div>
         

           <?php 
                 include("main/mini_header.php");

            ?>
        </div>