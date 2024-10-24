<?php

$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_user WHERE tbl_cart.id_khachhang=tbl_user.id_user ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);



?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<div class="form2 form2-1">
    <div class="form-title">
        <p>Liệt kê Danh Sách đơn hàng </p>
    </div>
    <div class="form2-content">
        <table>

            <tr>
                <th>id</th>
                <th>Mã Đơn Hàng</th>
                <th>Tên Khách Hàng</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Ngày Đặt</th>
                <th>Quản lí</th>
            </tr>


            <?php

            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_dh)) {
                $i++;

            ?>
                <tr>
                    <th><?= $i ?></th>

                    <th><?php echo $row['id_cart'] ?></th>
                    <th><?php echo $row['fullname'] ?></th>
                    <th><?php echo $row['diachicuthe'] ?></th>
                    <th><?php echo $row['sdt'] ?></th>
                    <th><?php echo $row['cart_date'] ?></th>
                    <th class="quanli">

                        <?php if ($row['cart_status'] == 1) {
                            echo '<a href="modules/quanlidonhang/xuly.php?id_cart=' . $row['id_cart'] . '">Check</a>';
                            echo '<a href="index.php?action=donhang&query=xemdonhang&id_cart=' . $row['id_cart'] . '">Xem</a>';
                            echo '<a href="modules/quanlidonhang/invoice.php?id_cart=' . $row['id_cart'] . '">In</a>';
                            echo '<a href="modules/quanlidonhang/xuly.php?huy=' . $row['id_cart'] . '">Hủy Đơn Hàng</a>';
                        } else if ($row['cart_status'] == -1) {
                            echo "Đã hủy đơn hàng";
                            echo '<a href="index.php?action=donhang&query=xemdonhang&id_cart=' . $row['id_cart'] . '">Xem</a>';
                        } else {
                            echo '<a class ="viewed">Checked</a>';
                            echo '<a href="index.php?action=donhang&query=xemdonhang&id_cart=' . $row['id_cart'] . '">Xem</a>';
                            echo '<a href="modules/quanlidonhang/invoice.php?id_cart=' . $row['id_cart'] . '">In</a>';
                        } ?>




                    </th>
                </tr>

            <?php
            }
            ?>


        </table>

    </div>

</div>
<?php
if (isset($_GET['thanhcong'])) {
    if ($_GET['thanhcong'] == 1) {
?>
        <script>
            swal({
                title: "Success",
                text: "Xác nhập đơn hành thành công",
                icon: "success",
            });

            setTimeout(function() {
                window.location.href = ":../../index.php?action=quanlydonhang&query=them";
            }, 3000);
        </script>
    <?php
    } else if ($_GET['thanhcong'] == 0) {
    ?>
        <script>
            swal({
                title: "Fail",
                text: "Số lượng hàng trong kho không đủ",
                icon: "warning",
            });
            setTimeout(function() {
                window.location.href = "Location:../../index.php?action=quanlydonhang&query=them";
            }, 3000);
        </script>
    <?php
    } elseif ($_GET['thanhcong'] == 2) { ?>
        <script>
            swal({
                title: "Fail",
                text: "Hủy đơn hàng thành công",
                icon: "success",
            });
            setTimeout(function() {
                window.location.href = "Location:../../index.php?action=quanlydonhang&query=them";
            }, 3000);
        </script>
<?php
    }
}
?>