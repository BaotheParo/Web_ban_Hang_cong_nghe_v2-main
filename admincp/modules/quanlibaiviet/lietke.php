<?php
$sql_sp = "SELECT * FROM tbl_baiviet  ORDER BY id DESC";
$query_sp = mysqli_query($mysqli, $sql_sp);
?>
<div class="form2 form2-1">
    <div class="form-title">
        <p>Liệt kê bài viết </p>
    </div>
    <div class="form2-content">
        <table>
            <tr>
                <th>Stt</th>
                <th>Tên bài viết </th>
                <th>Loại bài viết</th>
                <th>Hình ảnh</th>
                <th>Tình trạng</th>
                <th>Quản lí</th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_sp)) {
                $i++;
            ?>
                <tr>
                    <th><?= $i ?></th>
                    <th class="width1"><?= $row['tenbaiviet'] ?></th>
                    <th><?= $row['TOPIC'] ?></th>
                    <th><img src="modules/quanlibaiviet/uploads/<?php echo $row['hinhanh'] ?>" alt="" class=" img_brand"></th>
                    <th>
                        <?php
                        if ($row['tinhtrang'] == 1) {
                            echo "Hiện";
                        } else {
                            echo "Ẩn ";
                        }
                        ?>
                    </th>
                    <th>
                        <a href="?action=quanlybv&query=sua&idsanpham=<?php echo $row['id'] ?>">Sửa</a>
                        <a href="modules/quanlibaiviet/xuli.php?idsanpham=<?php echo $row['id'] ?>">Xóa</a>
                    </th>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>