<?php


$id_user = $_SESSION['id_user'];
$sql_lietke_dh = "SELECT * FROM tbl_cart WHERE id_khachhang = '$id_user'" ;


$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);



?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<head>
    <style>
        /* CSS cho bảng */
table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

/* CSS cho các thông tin đơn hàng */
.form-title {
  text-align: center;
  margin-bottom: 20px;
  font-size: 24px; /* Kích thước font */
  font-weight: bold; /* Đậm */
  color: #fff; /* Màu chữ */
  text-transform: uppercase; /* Chuyển đổi sang chữ in hoa */
  background: linear-gradient(#141e30, #243b55); /* Linear gradient cho màu nền */
  padding: 10px; /* Khoảng cách giữa nội dung và viền */
  border-radius: 5px; /* Bo tròn viền */
}


.form2 {
  margin-top: 20px;
  background-color: #ffffff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-title {
  text-align: center;
  margin-bottom: 20px;
}

/* CSS cho trạng thái đơn hàng */
.quanli {
  font-weight: bold;
  color: #0000ff; /* Màu xanh cho trạng thái "Chưa giao" */
}

.quanli.cancelled {
  color: #ff0000; /* Màu đỏ cho trạng thái "Đã hủy" */
}

.quanli.delivered {
  color: #008000; /* Màu xanh lá cây cho trạng thái "Đã giao" */
}
    </style>
</head>
<div class="form2 form2-1">
    <div class="form-title">
        <p>Liệt kê Danh Sách đơn hàng </p>
    </div>
    <div>
        <table>

            <tr>
                <th>id</th>
                <th>Mã Đơn Hàng</th>
                
                <th>Ngày Đặt</th>
                <th>Thao tác</th>
                <th>Trạng thái</th>
            </tr>


            <?php

            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_dh)) {
                $i++;

            ?>
                <tr>
                    <th><?= $i ?></th>
                    <th><?php echo $row['id_cart'] ?></th>
                    <th><?php echo $row['cart_date'] ?></th>
                    <th class="quanli">

                        <?php if ($row['cart_status'] == 1) {
                            echo "Chưa giao";
                        } 
                        else if ($row['cart_status'] == -1 ){
                            echo "Đã hủy";
                        }
                        else {    
                            echo "Đã giao";
                        } ?>
                    </th>
                    <th><a href="index.php?quanly=xemdonhang&id_cart=<?php echo $row['id_cart'] ?>">Xem đơn hàng</a></th>
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
                text: "Xóa đơn hàng thành công",
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