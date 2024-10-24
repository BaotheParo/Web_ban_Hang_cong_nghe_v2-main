<?php

$sql_nhacungcap = "SELECT * FROM tbl_nhacungcap ORDER BY mancc ASC";
$query_nhacungcap = mysqli_query($mysqli, $sql_nhacungcap);

?>


<div class="form2" style="width:100%">
    <div class="form-title">
        <p>Liệt kê nhà cung cấp</p>
    </div>
    <div class="form2-content">
        <table class="table">

            <tr>
                <th>Stt</th>
                <th>Tên nhà cung cấp</th>

                <th>Trạng thái</th>
                <th>Địa chỉ</th>
                <th>Quản lí</th>
            </tr>


            <?php

            $i = 0;
            while ($row = mysqli_fetch_array($query_nhacungcap)) {
                $i++;

            ?>
                <tr>
                    <th><?= $i ?></th>
                    <th><?= $row['tenncc'] ?></th>
                    <?php if ($row['trangthai'] == 0) {
                        echo "<th>Vô hiệu hóa</th>";
                    } else {
                        echo "<th>Sẵn sàng</th>";
                    }
                    ?>
                    <th><?= $row['diachi'] ?></th>
                    <th>
                        <a href="?action=quanlynhacungcap&query=sua&idncc=<?php echo $row['mancc'] ?>">Sửa</a>
                        <?php if ($row['trangthai'] == 1) {
                            echo '<a href="modules/quanlynhacungcap/xuli.php?idncc=' . $row['mancc'] . '&trangthai=' . $row['trangthai'] . '">Vô hiệu hóa</a>';
                        }else{
                            echo '<a href="modules/quanlynhacungcap/xuli.php?idncc=' . $row['mancc'] . '&trangthai=' . $row['trangthai'] . ' "style="background-color:green">Khôi phục</a>';
                        }?>

                    </th>
                </tr>

            <?php
            }
            ?>


        </table>

    </div>

</div>