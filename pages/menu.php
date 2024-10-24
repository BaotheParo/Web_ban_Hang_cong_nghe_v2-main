<div class="menu wrapper-nav" id="menu main-menu-tto">
            <div class="menu-content">
                <div class="menu-left">
                <ul>
                    <li><a href="index.php?quanly=home">Home</a></li>
                </ul>
            </div>
            <?php   
                  include ('main/mini_menu.php');
            ?>
            </div>
            
        </div>

        <script type="text/javascript">
 jQuery(document).ready(function($) {
  $(window).load(function() {
   if ($('.wrapper-nav').length > 0) {
    var _top = $('.wrapper-nav').offset().top - parseFloat($('.wrapper-nav').css('marginTop').replace(/auto/, 0));
    $(window).scroll(function(evt) {
     var _y = $(this).scrollTop();
     if (_y > _top) {
      $('.wrapper-nav').addClass('fixed');
      $('.main-1').css("margin-top", "30px")
     } else {
      $('.wrapper-nav').removeClass('fixed');
      $('.main-1').css("margin-top", "0")
     }
    })
   }
  });
 });
 </script>

 <style>

     .fixed{
        position: fixed;
  width: 100%;
  z-index: 10000000000000000000000000000000000000;
  top:0;
  margin-top: 0 !important; 
     }
 </style>