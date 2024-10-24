<div class="header-center">
                <div class="header-center-content">
                    <div class="header-center-left">
                        <div class="logo">
                            <a href="index.php">
                            <span>D</span>ev <span>N</span>guyen <span>S</span>tore
                        </a>
                        </div>
                    </div>
                    <div class="header-center-center">
                     <form action="index.php?quanly=timkiem" method="POST">
                        <input type="text" class="search-inp" placeholder="Tìm Kiếm trên Shop" id="searchText" autocomplete="off" aria-autocomplete="list" name="key" required>
                         <div class="input-out">
                            <ul class="list-group " id="chatList">
                                <li class="ulis">Bạn đang tìm kiếm gì đó . . .</li>  
                            </ul>

                         </div>

                        <button class="btn1" type="submit" name="timkiem"><i class="fa fa-search"></i></button>
                     </form>
                    </div>
                    <div class="header-center-right"> 
                                <div class="user">
                                <a href="index.php?quanly=user"><i class="fas fa-user-circle"></i></a>   
                                </div>
                                
                                <div class="bought">
                                    <a href="index.php?quanly=giohang"> <i class="fas fa-shopping-cart"></i></a>
                                    <?php
                                          if(isset($_SESSION['cart'])){
                                               $i = 0;
  
                                           foreach($_SESSION['cart'] as $cart_item){
    
    
   
                                               $i++;}

                                             ?>
                                     <div class="bought_items">
                                         <?php echo $i; ?>
                                     </div>
                                     <?php } ?>
                                </div>
                               
                    </div>
                </div>

            </div>

            <script>
	$(document).ready(function(){
      
      // Search
       $("#searchText").on("input", function(){
       	 var searchText = $(this).val();
         if(searchText == "") return;
         $.post('pages/main/search.php', 
         	     {
         	     	key: searchText
         	     },
         	   function(data, status){
                  $("#chatList").html(data);
         	   });
       });
       $("#serachBtn").on("click", function(){
       	 var searchText = $("#searchText").val();
         if(searchText == "") return;
         $.post('pages/main/search.php', 
         	     {
         	     	key: searchText
         	     },
         	   function(data, status){
                  $("#chatList").html(data);
         	   });
       });
      


      /** 
      auto update last seen 
      for logged in user
      **/
      
      /** 
      auto update last seen 
      every 10 sec
      **/
      setInterval(lastSeenUpdate, 10000);

    });
</script>