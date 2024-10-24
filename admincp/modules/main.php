<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Drop Down Sidebar</span>
    </div>
    <div class="home-content2">
        <?php 
       include ('config/config.php');
      if(isset($_GET['action']  )  && isset($_GET['query'])){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $tam = '';
        $query = '';
    }
    if($tam=='quanlyloaisp' && $query=='them'){
       include 'modules/quanliloaisp/them.php';
       include 'modules/quanliloaisp/lietke.php';
    }

    elseif ($tam=='quanlynhacungcap' && $query=='them') {
      include("modules/quanlynhacungcap/them.php");
      include("modules/quanlynhacungcap/lietke.php");
    }
    
    elseif ($tam=='quanlynhacungcap' && $query=='sua') {
      include("modules/quanlynhacungcap/sua.php");
    }

    elseif ($tam=='quanlykhachhang' && $query=='them') {
      include("modules/quanlykhachhang/them.php");
      include("modules/quanlykhachhang/lietke.php");
    }
    elseif ($tam=='quanlykhachhang' && $query=='sua') {
      include("modules/quanlykhachhang/sua.php");
    }
    elseif ($tam=='quanlynhanvien' && $query=='them') {
      include("modules/quanlynhanvien/them.php");
      include("modules/quanlynhanvien/lietke.php");
    }
    elseif ($tam=='quanlyphieunhap' && $query=='lietke') {
      include("modules/quanlyphieunhap/lietke.php");
    }
    elseif ($tam=='quanlyphieunhap' && $query=='them') {
      include("modules/quanlyphieunhap/them.php");
    }

    elseif ($tam=='quanlyphieunhap' && $query=='xemchitiet') {
      include("modules/quanlyphieunhap/xemchitiet.php");
    }
    elseif ($tam=='quanlynhanvien' && $query=='sua') {
      include("modules/quanlynhanvien/sua.php");
    }
    elseif ($tam=='quanlyloaisp' && $query=='sua') {
        include("modules/quanliloaisp/sua.php");
    }elseif ($tam=='quanlybrand' && $query=='them') {
    include("modules/quanlibrand/them.php");  
    include("modules/quanlibrand/lietke.php");
}elseif ($tam=='quanlybrand' && $query=='sua') {
  include("modules/quanlibrand/sua.php");

}elseif ($tam=='quanlysanpham' && $query=='them') {
  include("modules/quanlisanpham/them.php");
  include("modules/quanlisanpham/lietke.php");
  

}elseif ($tam=='quanlysp' && $query=='sua') {
  include("modules/quanlisanpham/sua.php");

}elseif ($tam=='quanlysp' && $query=='xoa_anh') {
  include("modules/quanlisanpham/sua_anh_phu.php");

}
elseif ($tam=='quanlybanner' && $query=='them') {
  
  include("modules/quanlibanner/them.php");
  include("modules/quanlibanner/lietke.php");

}
elseif ($tam=='quanlycomment' && $query=='them') {
  
  include("modules/quanlicomment/them.php");
 

}
elseif ($tam=='quanlybanner' && $query=='sua') {
  
  include("modules/quanlibanner/sua.php");


}elseif ($tam=='quanlydonhang' && $query=='them') {
  
  include("modules/quanlidonhang/lietke.php");
}elseif ($tam=='quanlybv' && $query=='them') {
  include("modules/quanlibaiviet/them.php");
  include("modules/quanlibaiviet/lietke.php");
}elseif ($tam=='quanlybv' && $query=='sua') {
  
 include ("modules/quanlibaiviet/sua.php");
  
}elseif ($tam=='donhang' && $query=='xemdonhang') {
  
  include("modules/quanlidonhang/xemdonhang.php");
}
elseif ($tam=='home') {
  if($_SESSION['quyen']=="nhanvien" ||$_SESSION['quyen']=="chudoanhnghiep")
  include("modules/dashboard.php");

}

else {
  if($_SESSION['quyen']=="nhanvien" ||$_SESSION['quyen']=="chudoanhnghiep")
  include("modules/dashboard.php");
}

    
    
      ?>
    </div>
    
  </section>