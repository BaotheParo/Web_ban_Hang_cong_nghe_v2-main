<?php
$queryGetListSP = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham");
$queryNhaCungCap= mysqli_query($mysqli, "SELECT * FROM tbl_nhacungcap");
?>


<div class="form">
   <div class="form-title">Thêm phiếu nhập hàng</div>
   <h1>Chọn sản phẩm</h1>
   <div class="form-content">
      <form method="POST" action="modules/quanlyphieunhap/xuli.php" id="form">
        
      <div>
                <select name="sanPhamNhap[]" id="sanpham" class="sanpham">
                    <?php
                    mysqli_data_seek($queryGetListSP, 0); // Đưa con trỏ về đầu kết quả
                    while ($row = mysqli_fetch_array($queryGetListSP)) {
                        echo "<option value='" . $row['id_sanpham'] . "'>" . $row['tensanpham'] . "</option>";
                    }
                    ?>
                </select>
                <label for="soluongnhap">Số lượng: </label>
                <input type="text" name="soluongnhap[]">

                <label for="">Đơn giá</label>
                <input type="text" name="dongia[]">
                <input type="button" value="Hủy" name="huy" class="btnHuy">
            </div>
                  
            <select name="nhacungcap" id="">
            <?php
                    while ($row_nhacungcap = mysqli_fetch_array($queryNhaCungCap)) {
                        echo "<option value='" . $row_nhacungcap['mancc'] . "'>" . $row_nhacungcap['tenncc'] . "</option>";
                    }
                    ?>
            </select>
         <input type="button" value="Thêm" id="btnThem">
         <div class="input2">
            <input type="submit" name="themphieunhap" value="Thêm phiếu nhập">
         </div>


      </form>

   </div>

</div>

<script>
    document.querySelectorAll('.btnHuy').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var parentDiv = btn.parentElement; // Lấy phần tử cha của nút "Hủy"
            parentDiv.remove(); // Xóa phần tử cha, tức là hàng chứa nút "Hủy"
        });
    });

    document.getElementById("btnThem").addEventListener("click", function() {
        // Lấy phần tử form
        var form = document.getElementById("form");

        // Tạo chuỗi HTML chứa các phần tử mới
        var newElementsHTML = `
            <div>
                <select name="sanPhamNhap[]" id="sanpham" class="sanpham">
                    <?php
                    mysqli_data_seek($queryGetListSP, 0); // Đưa con trỏ về đầu kết quả
                    while ($row = mysqli_fetch_array($queryGetListSP)) {
                        echo "<option value='" . $row['id_sanpham'] . "'>" . $row['tensanpham'] . "</option>";
                    }
                    ?>
                </select>
                <label for="soluongnhap">Số lượng: </label>
                <input type="text" name="soluongnhap[]">
                <label for="">Đơn giá</label>
                <input type="text" name="dongia[]">
                <input type="button" value="Hủy" name="huy" class="btnHuy">
            </div>
        `;

        // Chèn chuỗi HTML vào đầu của form
        form.insertAdjacentHTML("afterbegin", newElementsHTML);
        
        // Lắng nghe sự kiện click cho nút "Hủy" mới
        var newBtnHuy = form.querySelector('.btnHuy');
        newBtnHuy.addEventListener('click', function() {
            var parentDiv = newBtnHuy.parentElement; // Lấy phần tử cha của nút "Hủy"
            parentDiv.remove(); // Xóa phần tử cha, tức là hàng chứa nút "Hủy"
        });
    });
</script>
