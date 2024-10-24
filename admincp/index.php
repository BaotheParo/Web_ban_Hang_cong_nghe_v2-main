<?php session_start(); ?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
  <!-- Boxiocns CDN Link -->
  <title>Admincp</title>

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


  <?php
  include './config/config.php';
  include './config/db.conn.php';
  include './modules/menu.php';
  include './modules/main.php';

  ?>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script>
    CKEDITOR.replace('tomtat');
    CKEDITOR.replace('noidung');
    CKEDITOR.replace('thongso');
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      thongke();
      var char = new Morris.Area({
        element: 'chart',
        xkey: 'date',
        ykeys: ['order', 'sales', 'quantity'],
        labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra']
      });

      $('.select-date').change(function() {
        var thoigian = $(this).val();
        var text;
        if (thoigian == '7ngay') {
          text = '7 ngày qua';
        } else if (thoigian == '28ngay') {
          text = '28 ngày qua';
        } else if (thoigian == '90ngay') {
          text = '90 ngày qua';
        } else {
          text = '365 ngày qua';
        }
        $.ajax({
          url: "modules/thongke.php",
          method: "POST",
          dataType: "JSON",
          data: {
            thoigian: thoigian
          },
          success: function(data) {
            char.setData(data);
            $('#text-date').text(text);
          }
        });
      });

      thongke1();
      var char1 = new Morris.Bar({
        element:'chart1',
        xkey:'ten',
        ykeys: ['quantity'],
        labels: ['Số lượng'],
        xLabelAngle: 90,
        resize: true,
        height: 400 // Điều chỉnh độ cao thành 400 pixel
        });

      $('.select-date1').change(function() {
        var thoigian = $(this).val();
        var text;
        if (thoigian == '7ngay') {
          text = '7 ngày qua';
        } else if (thoigian == '28ngay') {
          text = '28 ngày qua';
        } else if (thoigian == '90ngay') {
          text = '90 ngày qua';
        } else {
          text = '365 ngày qua';
        }
        $.ajax({
          url: "modules/thongkephieunhap.php",
          method: "POST",
          dataType: "JSON",
          data: {
            thoigian: thoigian
          },
          success: function(data) {
            char1.setData(data);
            $('#text-date1').text(text);
          }
        });
      });

      function thongke() {
        var text = '365 ngày qua';
        $('#text-date').text(text);
        $.ajax({
          url: "modules/thongke.php",
          method: "POST",
          dataType: "JSON",
          success: function(data) {
            char.setData(data);
            $('#text-date').text(text);
          }
        });
      }

      function thongke1() {
        var text = '365 ngày qua';
        $('#text-date1').text(text);
        $.ajax({
          url: "modules/thongkephieunhap.php",
          method: "POST",
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            char1.setData(data);
            $('#text-date1').text(text);
          }
        });
      }
    }); 
  </script>
</body>

</html>