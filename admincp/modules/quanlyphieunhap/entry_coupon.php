<?php
    include("./tfpdf/tfpdf.php");
    // include './admincp/config/config.php';
    // include './admincp/config/db.conn.php';
	$mysqli = new mysqli("localhost","root","","shop");

	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}
    
    $code = $_GET['idphieunhap'];
	$sql_lietke_phieunhap = "SELECT * FROM tbl_phieunhap,tbl_chitietphieunhap, tbl_sanpham WHERE tbl_phieunhap.id_phieunhap = tbl_chitietphieunhap.id_phieunhap and tbl_chitietphieunhap.id_sanpham = tbl_sanpham.id_sanpham AND tbl_chitietphieunhap.id_phieunhap='".$code."' ORDER BY tbl_chitietphieunhap.id_phieunhap DESC";
    $query_lietke_phieunhap = mysqli_query($mysqli, $sql_lietke_phieunhap);
    $result = $mysqli->query($sql_lietke_phieunhap);
    $row1 = mysqli_fetch_array($query_lietke_phieunhap);
    $i = 0;
    $tongtien = 0;
    while($row = mysqli_fetch_array($query_lietke_phieunhap)){
  	$i++;
  	$thanhtien = ($row['dongia']*$row['soluongnhap']);
  	$tongtien += $thanhtien ;
}

    $entry_coupon_array= [];
    if ( $result->num_rows >=0){
        while($row = $result->fetch_assoc()){
            $item_array = [
                "ID_product" => $i,
                "Name_product" => $row['tensanpham'],
                "Quantity" => $row['soluongnhap'],
                "Price" => $row['dongia']."VND",
                "Total" => $thanhtien."VND",
            ];
            $entry_coupon_array[] = $item_array;
            // echo $row['tensanpham'];
        };
        }   else{
        echo "No data found in the database";
  }

    $pdf = new tFPDF();
    $pdf->AddPage();


    // Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu','',28);
    $pdf->SetX(60);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFillColor(0,0,0);
    $pdf->Cell(90, 20, "Phiếu nhập hàng", 1, 0, "C", true);


    $pdf->ln();
    $pdf->ln();
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(0, 4, "", 0, 1, "");
    $pdf->SetFont('DejaVu', '', 16);
    $pdf->Cell(0, 7, "ID phiếu nhập : " . $row1['id_phieunhap'] . "", 0, 1, "");
    $pdf->Cell(70, 7, "Ngày lập phiếu: " . $row1['thoigian'] . "", 0, 1, "");
    $pdf->SetFont('DejaVu', '', 12);
    $pdf->ln();
    $pdf->ln();
    $pdf->SetX(0);
    $pdf->SetFont('DejaVu', '',12);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(25,10,"STT",1,0,"C",true);
    $pdf->Cell(85,10,"Tên sản phẩm",1,0,"C",true);
    $pdf->Cell(20,10,"Số lượng",1,0,"L",true);
    $pdf->Cell(40,10,"Đơn giá",1,0,"C",true);
    $pdf->Cell(40,10,"Thành tiền",1,0,"C",true);

    $pdf->ln();

    $cell_height = 16;
    $i = 1;
        foreach ($entry_coupon_array as $item){
        $pdf->SetFont('DejaVu', '', 12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(25, $cell_height, $i++, "B", 0, "L");    
         $current_y = $pdf->GetY();
        $pdf->MultiCell(75, $cell_height, $item['Name_product'], 1, "L");
    // Lưu trữ vị trí hiện tại sau khi sử dụng MultiCell()
       $current_x = $pdf->GetY(); 
        $pdf->SetXY(105, $current_y);
     // Đặt lại vị trí hiện tại
        $pdf->Cell(30, $cell_height, $item['Quantity'], "B", 0, "C");
        $pdf->Cell(40, $cell_height, $item['Price'], "B", 0, "L");
        $pdf->Cell(40, $cell_height, $item['Total'], "B", 0, "L");
        $pdf->SetXY(0, $current_x);

        $pdf->ln();
      }
    

    $pdf->ln();
    $pdf->SetFont('DejaVu', '', 15);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(150,9,"Tổng cộng: ",0,0,"R");
    $pdf->Cell(49,10,$tongtien."VND",0,0,"C");



    $pdf->Output();

?>