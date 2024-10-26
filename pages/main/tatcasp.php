<?php
  
  $sql_sp1="SELECT * FROM tbl_sanpham,tbl_brand,tbl_loaisp WHERE tbl_sanpham.id_brand = tbl_brand.id_brand  and tbl_sanpham.idloaisp = tbl_loaisp.id_loaisp and soluong ORDER BY id_sanpham DESC LIMIT 30";
  $query_sp1=mysqli_query($mysqli,$sql_sp1);
   
  $sql_sp2 = "SELECT * FROM tbl_loaisp  where trangthai = 1";
  $query_sp2 = mysqli_query($mysqli,$sql_sp2);
  
  $sql_sp3= "SELECT * FROM tbl_brand where trangthai =1";
  $query_sp3 = mysqli_query($mysqli,$sql_sp3);

?>


<div class="box-show">
 <div class="box-show-title">Bộ lọc sản phẩm</div>
 
  
 <div id="myBtnContainer">
   <div class="btn1-title">Danh mục sản phẩm</div>
   <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <?php 

   while($row_sp2 = mysqli_fetch_array($query_sp2)){ ?>
    <button class="btn" id="btn-loaisp<?php echo $row_sp2['id_loaisp'] ?>" onclick="filterSelection('danhmuc<?php echo $row_sp2['id_loaisp'] ?>')"> <?php echo $row_sp2['tenloaisp'] ?></button>
   <?php  }?>
  
 

 
   <div class="btn1-title">Thương Hiệu</div>
  <?php 
  while($row_sp3 = mysqli_fetch_array($query_sp3)){ ?>
    <button class="btn" id="btn-brand<?php echo $row_sp3['id_brand'] ?>" onclick="filterSelection('brand<?php echo $row_sp3['id_brand'] ?>')"> <?php echo $row_sp3['tenbrand'] ?></button>
<?php  }?>
<div class="btn1-title">Theo Giá Sản Phẩm</div>
   <button class="btn " onclick="filterSelection('pr1')"> Từ 0 đến 200.000₫</button>
   <button class="btn " onclick="filterSelection('pr2')"> Từ 200.000₫ đến 500.000₫</button>
   <button class="btn " onclick="filterSelection('pr3')"> Từ 500.000₫ đến 1.000.000₫</button>
   <button class="btn " onclick="filterSelection('pr4')"> Từ 1.000.000₫ đến 5.000.000₫</button>
    <button class="btn " onclick="filterSelection('pr5')"> Từ 5.000.000₫ đến 10.000.000₫</button>
    <button class="btn " onclick="filterSelection('pr6')"> Từ 10.000.000₫ đến 20.000.000₫</button>
    <button class="btn " onclick="filterSelection('pr7')"> Trên 20.000.000₫</button>
 </div>
 
</div>
<div class="main4 main_all" id="main2-4">
        <div class="main3-title1 main4-title">
                 Các Sản phẩm mới nhất 
               </div>
         <div class="main4-content">

             <?php 
                  $pr=0;
                while($row_sp1 = mysqli_fetch_array($query_sp1)){
                  $new_price = $row_sp1['giasp'];
                 if($new_price < 200000){
                   $pr = 1;
                 }elseif($new_price < 500000 && $new_price >= 200000){
                   $pr = 2 ;
                 }elseif($new_price < 1000000 && $new_price >= 500000){
                   $pr = 3 ;
                 }elseif($new_price >= 1000000 && $new_price < 5000000){ 
                    $pr = 4 ;
                 }elseif($new_price >= 5000000 && $new_price < 10000000){
                    $pr = 5 ;
                 }elseif($new_price >= 10000000 && $new_price < 20000000){
                  $pr = 6;
               }elseif($new_price >= 20000000 ){
                $pr = 7 ;
             }
              ?>
           <div class="sale-items content-items filterDiv danhmuc<?php echo $row_sp1['idloaisp'] ?> brand<?php echo $row_sp1['id_brand'] ?> pr<?php echo $pr ?>" >
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
     
</div>

<script>
  window.onload=function(){
    <?php 
      if(isset($_GET['idbrand']))
        $idbrand = $_GET['idbrand'];
      else if(isset($_GET['idloaisp']))
        $idbrand = $_GET['idloaisp'];
      else
        $idbrand="";
      ?>
    var tmp = "<?php echo $idbrand ?>";
  if (tmp ==""){
    filterSelection("all" )
  }else
    $("#btn-" + tmp).trigger("click");
  }
  
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

