<div class="footer">
    <div class="footer-content">

        <div class="colum1">
            <div class="colum1-title">Danh mục loại sản phẩm</div>
            <div class="colum1-list">

                <?php
                $query = mysqli_query($mysqli, "SELECT * FROM tbl_loaisp LIMIT 4");
                while ($row = mysqli_fetch_array($query)) {
                    echo '<a href="#">' . $row['tenloaisp'] . '</a>';
                }
                ?>

                <a href="#">....</a>
            </div>
        </div>
        <div class="colum1">
            <div class="colum1-title">Danh mục thương hiệu</div>
            <div class="colum1-list">

                <?php
                $query = mysqli_query($mysqli, "SELECT * FROM tbl_brand LIMIT 4");
                while ($row = mysqli_fetch_array($query)) {
                    echo '<a href="#">' . $row['tenbrand'] . '</a>';
                }
                ?>
                <a href="#">....</a>
            </div>
        </div>
        <div class="colum1">
            <div class="colum1-title">Dịch vụ</div>
            <div class="colum1-list">

                <a href="">Bảo Hành</a>
                <a href="">Vận Chuyển</a>
                <a href="">Trả Hàng</a>
                <a href="">Thanh Toán</a>
                <a href="">Tuyển Nhân Viên</a>


            </div>
        </div>
        <div class="colum1">
            <div class="colum1-title">Liên hệ </div>
            <div class="colum1-list">

                <a href=""><i class="fa-solid fa-phone"></i> 123456789</a>
                <a href=""><i class="fa-solid fa-location-dot"></i> 114 Nguyen Phi Khanh Street Tan Dinh Ward District 1, Ho Chi Minh City,Vietnam </a>
                <a href=""><i class="fa-solid fa-envelope"></i> vincenttuan1098@gmail.com</a>



            </div>
        </div>

    </div>
    <div class="clear"></div>
</div>