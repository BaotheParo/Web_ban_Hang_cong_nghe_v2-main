<?php 

if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}

$sql_sp1 = "SELECT * FROM tbl_sanpham, tbl_brand WHERE tbl_sanpham.id_brand = tbl_brand.id_brand AND soluong > 0 ORDER BY id_sanpham DESC LIMIT 30";
$query_sp1 = mysqli_query($mysqli, $sql_sp1);
?>

<div class="header">
    <div class="header-top">
        <div class="header-top-content">
            <div class="header-top-1">
                <div class="marquee-container">
                    <marquee behavior="scroll" scrollamount="5">
                        <?php while ($row_sp1 = mysqli_fetch_array($query_sp1)) { ?>
                        <a href="index.php?quanly=sanpham&id_sanpham=<?php echo $row_sp1['id_sanpham'] ?>" class="header-top-1-text"><?php echo $row_sp1['tensanpham'] ?></a>
                        <?php } ?>
                    </marquee>
                </div>
            </div>
            <div class="header-top-2">
                <label class="switch">
                    <input type="checkbox" onclick="myFunction()">
                    <span class="slider round"></span>
                </label>
                <div class="header-user">
                    <?php if (isset($_SESSION['dangky'])) { ?>
                        <div class="header-top-2-items">
                            <p><?php echo $_SESSION['dangky']; ?></p>
                        </div>
                        <div class="header-top-2-items">
                            <a href="pages/main/logout.php" title="Đăng Xuất"><i class="fas fa-sign-in-alt"></i><p>Đăng Xuất</p></a>
                        </div>
                    <?php } else { ?>
                        <div class="header-top-2-items">
                            <a href="index.php?quanly=login" title="Đăng Nhập"><i class="fas fa-sign-in-alt"></i><p>Đăng Nhập</p></a>
                        </div>
                        <div class="header-top-2-items">
                            <a href="index.php?quanly=signup" title="Đăng ký"><i class="fas fa-sign-out-alt"></i><p>Đăng Kí</p></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php include("main/mini_header.php"); ?>
</div>

<style>
    .header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #e1e1e1;
}

.header-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

.header-top-content {
    display: flex;
    width: 100%;
}

.header-top-1 {
    flex: 1;
    overflow: hidden; /* Ngăn không cho nội dung tràn ra ngoài */
    white-space: nowrap; /* Ngăn dòng xuống */
}

.marquee-container {
    display: inline-block; /* Để đảm bảo marquee không tràn ra ngoài */
    width: 100%; /* Chiếm toàn bộ chiều rộng */
}

.header-top-1-text {
    color: #4CAF50;
    text-decoration: none;
    margin: 0 15px;
    font-weight: bold;
}

.header-top-2 {
    display: flex;
    align-items: center;
}

.switch {
    margin-right: 20px;
}

.switch input {
    display: none;
}

.slider {
    width: 30px;
    height: 15px;
    background-color: #ccc;
    border-radius: 15px;
    position: relative;
    cursor: pointer;
}

.slider:before {
    content: "";
    position: absolute;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: white;
    transition: .4s;
}

input:checked + .slider {
    background-color: #4CAF50;
}

input:checked + .slider:before {
    transform: translateX(15px);
}

.header-user {
    display: flex;
    align-items: center;
}

.header-top-2-items {
    margin-left: 20px;
    display: flex;
    align-items: center;
}

.header-top-2-items a {
    text-decoration: none;
    color: #333;
    display: flex;
    align-items: center;
}

.header-top-2-items i {
    margin-right: 5px;
}

.header-top-2-items p {
    margin: 0;
}   
</style>