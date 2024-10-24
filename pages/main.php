<div class="main margin_top">

        <?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='login'){
					include("main/login.php");
        }elseif($tam=='signup'){
					include("main/signup.php");
        }elseif($tam=='home'){
			include("main-all.php");
        } elseif($tam=='logout'){
			include("main/logout.php");
		}elseif($tam =='sanpham'){
			include("main/spchitiet.php");
		}elseif($tam =='giohang'){
			include("main/giohang.php");
		}elseif($tam =='seeall'){
			include("main/tatcasp.php");
		}elseif($tam =='user'){
			include("main/user.php");
		}elseif($tam =='suauser'){
			include("main/suauser.php");
		}
		
		elseif($tam =='lietkedonhang'){
			include("main/lietkedonhang.php");
		}
		elseif($tam =='xemdonhang'){
			include("main/xemdonhang.php");
		}
		elseif($tam =='timkiem'){
			include("main/search_out.php");
		}elseif($tam =='see-tintuc'){
			include("main/see-all-tintuc.php");
		}elseif($tam =='seetintuc'){
			include("main/see_tintuc.php");
		}elseif($tam =='tintuc'){
			include("main/see-all-tintuc2.php");
		}elseif($tam =='camon'){
			include("main/camon.php");
		}elseif($tam =='loaisanpham'){
			include("main/see-all-sp3.php");

		}elseif($tam =='lienhe'){
			include("main/404.php");
			
		}elseif($tam =='ctv'){
			include("main/404.php");
			
		}else{
	     	include("main-all.php");
		}
				
				
?>
            
           
          

        
    </div>