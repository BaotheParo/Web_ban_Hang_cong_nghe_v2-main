<?php
include('../../config/config.php');

$now = date('Y-m-d');
if (isset($_GET['id_cart'])) {
    $id_cart = $_GET['id_cart'];
    $sql_detailcard = "SELECT * FROM tbl_cart_details WHERE tbl_cart_details.id_cart_details = '$id_cart' ORDER BY tbl_cart_details.id_cart_details DESC";
    $query_detail = mysqli_query($mysqli, $sql_detailcard);
    $tmp = 1;
    $tongtien = 0;


    while ($row_sanpham1 = mysqli_fetch_array($query_detail)) {
        $id_sp = $row_sanpham1['id_sanpham'];
        $id_sl = $row_sanpham1['soluongmua'];
        $sql_pr = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_sanpham = '$id_sp'";
        $pr = mysqli_query($mysqli, $sql_pr);
        $row_pr = mysqli_fetch_array($pr);
        $tongtien += $id_sl * (float) $row_pr['giasp'];

        if ($id_sl > $row_pr['soluong']) {
            $tmp = 0;
            break;
        }
    }
    if ($tmp == 1) {
        $sql_card = "SELECT * FROM tbl_cart WHERE  tbl_cart.id_cart='$id_cart' ";
        $query_card = mysqli_query($mysqli, $sql_card);
        $row_card = mysqli_fetch_array($query_card);
        $id_khachhang = $row_card['id_khachhang'];
        $get_so = "SELECT donhangdamua FROM tbl_user WHERE id_user='$id_khachhang'";
        $get_so_query = mysqli_query($mysqli, $get_so);
        $get_so_data = mysqli_fetch_array($get_so_query);
        $get_so2 = "SELECT tongtien FROM tbl_user WHERE id_user='$id_khachhang'";
        $get_so_query2 = mysqli_query($mysqli, $get_so2);
        $get_so_data2 = mysqli_fetch_array($get_so_query2);
        $soluong2 = $get_so_data['donhangdamua'] + 1;
        $insert_donhang = "UPDATE tbl_user SET donhangdamua = '$soluong2' WHERE id_user = '$id_khachhang'";
        mysqli_query($mysqli, $insert_donhang);
        $soluong3 = $get_so_data2['tongtien'] + $tongtien;
        $insert_donhang2 = "UPDATE tbl_user SET tongtien = '$soluong3' WHERE id_user = '$id_khachhang'";
        mysqli_query($mysqli, $insert_donhang2);

        $id_cart = $_GET['id_cart'];
        $sql_detailcard = "SELECT * FROM tbl_cart_details WHERE tbl_cart_details.id_cart_details = '$id_cart' ORDER BY tbl_cart_details.id_cart_details DESC";
        $query_detail = mysqli_query($mysqli, $sql_detailcard);
        while ($row_sanpham = mysqli_fetch_array($query_detail)) {
            $id_sp = $row_sanpham['id_sanpham'];
            $sql_pr = "SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.id_sanpham='$id_sp'";
            $pr = mysqli_query($mysqli, $sql_pr);
            $row_pr = mysqli_fetch_array($pr);
            $slgup = $row_pr['soluong'] - $row_sanpham['soluongmua'];
            $update_sanpham2 = "UPDATE tbl_sanpham SET soluong = '$slgup' WHERE id_sanpham = '$id_sp'";
            mysqli_query($mysqli, $update_sanpham2);
            $luotmua = $row_pr['luongmua'] + $row_sanpham['soluongmua'];
            $update_sanpham2 = "UPDATE tbl_sanpham SET luongmua = '$luotmua' WHERE id_sanpham = '$id_sp'";
            mysqli_query($mysqli, $update_sanpham2);
        }

        $sql_update = "UPDATE tbl_cart SET cart_status=0 WHERE id_cart='" . $id_cart . "'";
        $query = mysqli_query($mysqli, $sql_update);
        $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.id_cart_details='$id_cart' ORDER BY tbl_cart_details.id_cart_details DESC";
        $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);

        $sql_thongke = "SELECT * FROM tbl_thongke WHERE ngaydat='$now'";
        $query_thongke = mysqli_query($mysqli, $sql_thongke);

        $soluongmua = 0;
        $doanhthu = 0;
        while ($row = mysqli_fetch_array($query_lietke_dh)) {
            $soluongmua += $row['soluongmua'];
            $doanhthu += $row['giasp'];
        }

        if (mysqli_num_rows($query_thongke) == 0) {
            $soluongban = $soluongmua;
            $doanhthu = $doanhthu;
            $donhang = 1;
            $sql_update_thongke = mysqli_query($mysqli, "INSERT INTO tbl_thongke (ngaydat,soluongban,doanhthu,donhang) VALUE('$now','$soluongban','$doanhthu','$donhang')");
        } elseif (mysqli_num_rows($query_thongke) != 0) {
            while ($row_tk = mysqli_fetch_array($query_thongke)) {
                $soluongban = $row_tk['soluongban'] + $soluongban;
                $doanhthu = $row_tk['doanhthu'] + $doanhthu;
                $donhang = $row_tk['donhang'] + 1;
                $sql_update_thongke = mysqli_query($mysqli, "UPDATE tbl_thongke SET soluongban='$soluongban',doanhthu='$doanhthu',donhang='$donhang' WHERE ngaydat='$now'");
            }
        }

        header('Location:../../index.php?action=quanlydonhang&query=them&thanhcong=1');
    } else {
        header('Location:../../index.php?action=quanlydonhang&query=them&thanhcong=0');
    }
} elseif (isset($_GET['huy'])) {
    $idbe = $_GET['huy'];
    // $sql_deleall = "DELETE FROM tbl_cart_details WHERE id_cart_details ='" . $idbe . "'";
    // $sql_deleall = "UPDATE tbl_cart set cart_status = -1 WHERE id_cart = '$_GET[id_cart]'";
    // $query = mysqli_query($mysqli, $sql_deleall);

    $sql_delete = "UPDATE tbl_cart set cart_status = -1 WHERE id_cart='" . $idbe . "'";
    $query = mysqli_query($mysqli, $sql_delete);
    header('Location:../../index.php?action=quanlydonhang&query=them&thanhcong=2');
}
