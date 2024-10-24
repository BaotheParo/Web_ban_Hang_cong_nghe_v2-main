<?php
$TOPIC = $_GET['TOPIC'];
$sql_sp = "SELECT * FROM tbl_baiviet WHERE  TOPIC='".$TOPIC."'  ORDER BY id DESC";
$query_sp1 = mysqli_query($mysqli, $sql_sp);
($row_sp1 = mysqli_fetch_array($query_sp1))
?>

<div class="main-sp-all">
    <div class="clear"></div>
    <div class="url_sp">
        <p><a href="index.php">Home</a> \ <a href="index.php?quanly=tintuc">Tin Tức</a> \ <a href="index.php?quanly=see-tintuc&&TOPIC=<?php echo $row_sp1['TOPIC'] ?>"><?php echo $row_sp1['TOPIC'] ?></a> \ <a href=""><?php echo $row_sp1['tenbaiviet'] ?></a></p>
    </div>
    <div class="main-sp main-sp-tt">
        <div class="main_sp_tt_title">
            <h1><?php echo $row_sp1['tenbaiviet'] ?></h1>
        </div>
        <div class="main_sp_tt_time">
            <p>Thời gian: <?php echo $row_sp1['time'] ?></p>
        </div>
        <div class="main_sp_tt_tomtat">
            <p><?php echo $row_sp1['tomtat'] ?></p>
        </div>
        <div class="main_sp_tt_noidung">
            <p><?php echo $row_sp1['noidung'] ?></p>
        </div>


    </div>
</div>