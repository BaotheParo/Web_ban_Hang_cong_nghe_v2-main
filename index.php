<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DevNguyenStore</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="icon/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/44a7633b56.js" crossorigin="anonymous"></script>

  <link href="css/owl.carousel.css" rel="stylesheet" />
  <link rel="icon" href="img/logo.png">
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <link href="css/glasscase.min.css" rel="stylesheet" />
  <script type="text/javascript" src="js/jquery.glasscase.min.js"></script>
  <script src="js/app/app.js"></script>
  <script type="text/javascript" src="https://cunghocweb.com/data-out/js/jquery.js"></script>



  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
  .dark-mode {
    background-color: #222222 !important;
    color: white !important;
  }
</style>

<body>
  <div class="wrapper">
    <?php
    session_start();
    include './admincp/config/config.php';
    ?>


    <?php
    include './pages/header.php';
    include './pages/menu.php';

    ?>



    <?php
    include './pages/main.php';
    include './pages/footer.php';
    ?>



    <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'> </script>
    <script>
      //<![CDATA[
      if (address_2 = localStorage.getItem('address_2_saved')) {
        $('select[name="calc_shipping_district"] option').each(function() {
          if ($(this).text() == address_2) {
            $(this).attr('selected', '')
          }
        })
        $('input.billing_address_2').attr('value', address_2)
      }
      if (district = localStorage.getItem('district')) {
        $('select[name="calc_shipping_district"]').html(district)
        $('select[name="calc_shipping_district"]').on('change', function() {
          var target = $(this).children('option:selected')
          target.attr('selected', '')
          $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
          address_2 = target.text()
          $('input.billing_address_2').attr('value', address_2)
          district = $('select[name="calc_shipping_district"]').html()
          localStorage.setItem('district', district)
          localStorage.setItem('address_2_saved', address_2)
        })
      }
      $('select[name="calc_shipping_provinces"]').each(function() {
        var $this = $(this),
          stc = ''
        c.forEach(function(i, e) {
          e += +1
          stc += '<option value=' + e + '>' + i + '</option>'
          $this.html('<option value="0">Tỉnh / Thành phố</option>' + stc)
          if (address_1 = localStorage.getItem('address_1_saved')) {
            $('select[name="calc_shipping_provinces"] option').each(function() {
              if ($(this).text() == address_1) {
                $(this).attr('selected', '')
              }
            })
            $('input.billing_address_1').attr('value', address_1)
          }
          $this.on('change', function(i) {
            i = $this.children('option:selected').index() - 1
            var str = '',
              r = $this.val()
            if (r != '') {
              arr[i].forEach(function(el) {
                str += '<option value="' + el + '">' + el + '</option>'
                $('select[name="calc_shipping_district"]').html('<option value="0">Quận / Huyện</option>' + str)
              })
              var address_1 = $this.children('option:selected').text()
              var district = $('select[name="calc_shipping_district"]').html()
              localStorage.setItem('address_1_saved', address_1)
              localStorage.setItem('district', district)
              $('select[name="calc_shipping_district"]').on('change', function() {
                var target = $(this).children('option:selected')
                target.attr('selected', '')
                $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                var address_2 = target.text()
                $('input.billing_address_2').attr('value', address_2)
                district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('district', district)
                localStorage.setItem('address_2_saved', address_2)
              })
            } else {
              $('select[name="calc_shipping_district"]').html('<option value="0">Quận / Huyện</option>')
              district = $('select[name="calc_shipping_district"]').html()
              localStorage.setItem('district', district)
              localStorage.removeItem('address_1_saved', address_1)
            }
          })
        })
      })
      //]]>
    </script>
</body>

<script>
  if (document.getElementById('content_sp').clientHeight < 400) {

    document.getElementById('notsee').style.display = 'none';
    document.getElementById('view-more-area').style.display = 'none';
  }
</script>


</html>