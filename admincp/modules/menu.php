<div class="sidebar close">
  <div class="logo-details">
    <i class='bx bxl-c-plus-plus'></i>
    <span class="logo_name">CodingLab</span>
  </div>
  <ul class="nav-links">
    <?php
    if ($_SESSION['quyen'] == "nhanvien" || $_SESSION['quyen'] == "chudoanhnghiep")
      echo "<li>
    <a href='index.php?action=home'>
      <i class='bx bx-grid-alt'></i>
      <span class='link_name'>Dashboard</span>
    </a>
    <ul class='sub-menu blank'>
      <li><a class='link_name' href='#'>Dashboard</a></li>
    </ul>
  </li>"; ?>


    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection'></i>
          <span class="link_name"> Danh mục</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Quản lí danh mục</a></li>
        <?php if ($_SESSION['quyen'] == "quanlykho" || $_SESSION['quyen'] == "chudoanhnghiep")
          echo  "<li><a href='index.php?action=quanlyloaisp&query=them'>Quản lí Loại sản phẩm</a></li>
          <li><a href='index.php?action=quanlybrand&query=them'>Quản Lí Thương Hiệu</a></li>
        ";
        ?>
        
        <?php if ($_SESSION['quyen'] == "nhanvien" || $_SESSION['quyen'] == "chudoanhnghiep")
          echo  "<li><a href='index.php?action=quanlybv&query=them'>Quản Lí Bài Viết </a></li>
        ";
        ?>
      </ul>
    </li>
    <?php if ($_SESSION['quyen'] == "quanlykho" || $_SESSION['quyen'] == "chudoanhnghiep")
      echo " <li>
        <a href='index.php?action=quanlysanpham&query=them'>
          <i class='bx bx-book-alt'></i>
          <span class='link_name'>Quản lí sản phẩm </span>
        </a>
        <ul class='sub-menu blank'>
            <li><a class='link_name' href='#'>Quản lí sản phẩm</a></li>
          </ul>

    </li>";?>
   
   <?php if ($_SESSION['quyen'] == "admin" || $_SESSION['quyen'] == "nhanvien" || $_SESSION['quyen'] == "chudoanhnghiep")
          echo  " <li>
          <a href='index.php?action=quanlykhachhang&query=them'>
            <i class='bx bx-pie-chart-alt-2'></i>
            <span class='link_name'>Users</span>
          </a>
          <ul class='sub-menu blank'>
            <li><a class='link_name' href='#'>Quản lí khách hàng</a></li>
          </ul>
        </li>
        ";
        ?>
   
   <?php if ($_SESSION['quyen'] == "quanlykho" || $_SESSION['quyen'] == "chudoanhnghiep")
    echo "    <li>
    <a href='index.php?action=quanlynhacungcap&query=them'>
      <i class='bx bx-line-chart'></i>
      <span class='link_name'>Quản lí nhà cung cấp</span>
    </a>
    <ul class='sub-menu blank'>
      <li><a class='link_name' href='#'>Quản lí nhà cung cấp</a></li>
    </ul>
  </li>


    <li>
      <a href='index.php?action=quanlyphieunhap&query=lietke'>
        <i class='bx bx-comment-edit'></i>
        <span class='link_name'>Quản lí phiếu nhập</span>
      </a>
      <ul class='sub-menu blank'>
        <li><a class='link_name' href='#'>Quản lí phiếu nhập</a></li>
      </ul>
    </li>"
; ?>
  
  <?php if ($_SESSION['quyen'] == "nhanvien" || $_SESSION['quyen'] == "chudoanhnghiep")
    echo "
    <li>
      <div class='iocn-link'>
        <a href='#'>
          <i class='bx bx-plug'></i>
          <span class='link_name'>Website</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>

      <ul class='sub-menu'>
        <li><a class='link_name' href='#'>Quản lí website</a></li>
        <li><a href='index.php?action=quanlybanner&query=them'>Banner</a></li>
      </ul>

    </li>
";?>

<?php if ($_SESSION['quyen'] == "admin" || $_SESSION['quyen'] == "chudoanhnghiep")
echo "
    <li>
        <a href='index.php?action=quanlynhanvien&query=them'>
          <i class='fa-solid fa-person'></i>
          <span class='link_name'>Quản lí tài khoản</span>
        </a>
        <ul class='sub-menu blank'>
        <li><a class='link_name' href='#'>Quản lí tài khoản</a></li>
      </ul>



  </li>";?>
  <li>
  <div class='iocn-link'>
        <a href='\Web_ban_Hang_cong_nghe_v2-main\pages\main\logout.php'>
          <i class='fa fa-sign-out'></i>
          <span class='link_name'>Đăng xuất</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>

      <ul class='sub-menu'>
        <li><a class='link_name' href='\Web_ban_Hang_cong_nghe_v2-main\pages\main\logout.php'>Đăng xuất</a></li>

      </ul>
  </li>
</div>