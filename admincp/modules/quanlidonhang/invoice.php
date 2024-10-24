<?php
include('.\tfpdf\tfpdf.php');
// include './admincp/config/config.php';
// include './admincp/config/db.conn.php';

$mysqli = new mysqli("localhost", "root", "", "shop");

if ($mysqli->connect_errno) {
  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
  exit();
}

$code = $_GET['id_cart'];
$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.id_cart_details='" . $code . "' ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
$result = $mysqli->query($sql_lietke_dh);

$sql_lietke_user = "SELECT * FROM tbl_user, tbl_cart WHERE tbl_user.id_user = tbl_cart.id_khachhang";
$query_lietke_user = mysqli_query($mysqli, $sql_lietke_user);

$row1 = mysqli_fetch_array($query_lietke_user);
// $i = 0;
// while ($row = mysqli_fetch_array($query_lietke_dh)){
//   $i++;
// };

$i = 0;
$tongtien = 0;

while ($row = mysqli_fetch_array($query_lietke_dh)) {
  $i++;
  $thanhtien = ($row['giasp']) / 100;
  $tongtien += $thanhtien;
};
$invoice_array = [];
if ($result->num_rows >= 0) {
  while ($row = $result->fetch_assoc()) {
    $item_array =
      [
        "ID" => $i,
        "ID_your_order" => $row['id_cart_details'],
        "Name_product" => $row['tensanpham'],
        "Quantity" => $row['soluongmua'],
        "Price" => $row['giasp'] . "VND",
        "Sale_Price" => $thanhtien . "VND"
      ];
    $invoice_array[] = $item_array;
    // echo $row['tensanpham'];


  };
} else {
  echo "No data found in the database";
}




$pdf = new tFPDF();
// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
$pdf->SetFont('DejaVu', '', 28);
$pdf->AddPage();
// $pdf->SetFont("Arial", "B", 28);
$pdf->SetX(60);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(0, 0, 0);
$pdf->Cell(90, 20, "Hóa đơn", 1, 0, "C", true);


$pdf->ln();
$pdf->ln();
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(0, 4, "", 0, 1, "");
$pdf->SetFont('DejaVu', '', 16);

// $pdf->SetFont("Arial", "B", 16);
$pdf->Cell(0, 7, "ID hóa đơn: " . $row1['id_cart'] . "", 0, 1, "");
// $pdf->SetFont("Arial", "", 12);
$pdf->SetFont('DejaVu', '', 12);

$pdf->Cell(70, 7, "Tên khách hàng : " . $row1['username'] . "", 0, 1, "");
$pdf->Cell(70, 7, "Thời gian : " . $row1['cart_date'] . "", 0, 1, "");


$pdf->ln();
$pdf->ln();
$pdf->SetX(0);
$pdf->SetFont('DejaVu', '', 12);

// $pdf->SetFont("Arial", "B", 12);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(25, 10, "STT", 1, 0, "C", true);
$pdf->Cell(85, 10, "Tên sản phẩm", 1, 0, "C", true);
$pdf->Cell(20, 10, "Số lượng", 1, 0, "L", true);
$pdf->Cell(40, 10, "Đơn giá", 1, 0, "C", true);
$pdf->Cell(45, 10, "Tổng tiền", 1, 0, "L", true);

$pdf->ln();


$cell_height = 16;
$i = 1;
foreach ($invoice_array as $item) {
  $pdf->SetFont('DejaVu', '', 12);

  $pdf->SetTextColor(0, 0, 0);
  $pdf->Cell(15, $cell_height, $i++, "B", 0, "C");
$current_y = $pdf->GetY();

$pdf->MultiCell(85, $cell_height, $item['Name_product'], 1, "L");
$current_x = $pdf->GetY();
$pdf->SetXY(110, $current_y);

$pdf->Cell(20, $cell_height, $item['Quantity'], "B", 0, "C");
$pdf->Cell(40, $cell_height, $item['Price'], "B", 0, "C");
$pdf->Cell(45, $cell_height, $item['Sale_Price'], "B", 0, "C");
$pdf->SetXY(0, $current_y);

$pdf->ln();
}

$pdf->ln();
// $pdf->SetFont("Arial", "B", 15);
$pdf->SetFont('DejaVu', '', 15);

$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(150, 9, "Tổng tiền : ", 0, 0, "R");
$pdf->Cell(40, 9, $tongtien . "VND", 0, 0, "R");



$pdf->Output();
