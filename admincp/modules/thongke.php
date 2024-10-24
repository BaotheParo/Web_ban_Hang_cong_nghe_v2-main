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
$sql = "SELECT * FROM tbl_thongke WHERE ngaydat BETWEEN '$subdays' AND '$now' ORDER BY ngaydat ASC";
$sql_query = mysqli_query($mysqli, $sql);
$chart_data=[];
while ($val = mysqli_fetch_array($sql_query)) {

	$chart_data[] = array(
		'date' => $val['ngaydat'],
		'order' => $val['donhang'],
		'sales' => $val['doanhthu'],
		'quantity' => $val['soluongban']

	);
}
echo $data = json_encode($chart_data); ?>