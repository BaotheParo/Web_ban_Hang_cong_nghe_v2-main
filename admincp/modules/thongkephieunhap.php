<?php
include('../config/config.php');
require('../../carbon/autoload.php');
$currentDate = new DateTime();
$now = $currentDate->format('Y-m-d');
if (isset($_POST['thoigian'])) {
    $thoigian = $_POST['thoigian'];
} else {
    $thoigian = '';
    $currentDate = new DateTime();
    $currentDate->sub(new DateInterval('P365D'));
    $subdays = $currentDate->format('Y-m-d');
}


if ($thoigian == '7ngay') {
    $currentDate = new DateTime();
    $currentDate->sub(new DateInterval('P7D'));
    $subdays = $currentDate->format('Y-m-d');
} elseif ($thoigian == '28ngay') {
    $currentDate = new DateTime();
    $currentDate->sub(new DateInterval('P28D'));
    $subdays = $currentDate->format('Y-m-d');
} elseif ($thoigian == '90ngay') {
    $currentDate = new DateTime();
    $currentDate->sub(new DateInterval('P90D'));
    $subdays = $currentDate->format('Y-m-d');
} elseif ($thoigian == '365ngay') {
    $currentDate = new DateTime();
    $currentDate->sub(new DateInterval('P365D'));
    $subdays = $currentDate->format('Y-m-d');
}


$currentDate = new DateTime();
$now = $currentDate->format('Y-m-d');
$sql = "SELECT * FROM tbl_sanpham";
$sql_query = mysqli_query($mysqli, $sql);
$listsp = array();
$chart_data = [];

while ($val = mysqli_fetch_array($sql_query)) {
    $chart_data[] = array(
        'id' => $val['id_sanpham'],
        'ten' => $val['tensanpham'],
        'quantity' => 0
    );
}
$listsp = $chart_data;
$sql = "SELECT * FROM tbl_phieunhap WHERE thoigian BETWEEN '$subdays' AND '$now' ORDER BY thoigian ASC";
$sql_query = mysqli_query($mysqli, $sql);
while ($val = mysqli_fetch_array($sql_query)) {
    $idtmp = $val['id_phieunhap'];
    $sql1 = "SELECT * FROM tbl_chitietphieunhap WHERE id_phieunhap = $idtmp";
    $sql_query1 = mysqli_query($mysqli, $sql1);
    while ($val1 = mysqli_fetch_array($sql_query1)) {
        foreach ($listsp as &$item) {
            if ($item['id'] == $val1['id_sanpham']) {
                $item['quantity'] += $val1['soluongnhap'];
                break; 
            }
        }
    }
}
foreach ($listsp as &$item) {
    unset($item['id']);
}
echo $data = json_encode($listsp);?>
