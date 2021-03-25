<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Titre de la Page -->
  <title>Home | Tuto Bootrstrap</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/81855dfb83.js" crossorigin="anonymous"></script>
  <!-- Style Css -->
  <link rel="stylesheet" href="./public/css/style.css" />

</head>
<!-- / Head -->

<body>

  <!-- Navbar -->
  <?php include 'views/navbar.php' ?>

  <!-- Header -->
  <?php include 'views/header.php' ?>

  <!-- Liste de card (Dernier Article) -->
  <?php include 'views/cardListNew.php' ?>

  <!-- Contact -->
  <?php include 'views/contact.php' ?>

  <!-- Footer -->
  <?php include 'views/footer.php' ?>

  <!-- Pop-up -->
  <?php include 'views/other/popup.php' ?>

  <!-- Import JS -->
  <!-- Jquery -->
  <script src="public/js/jquery.js"></script>
  <!-- Popper -->
  <script src="public/js/popper.js"></script>
  <!-- Bootstrap -->
  <script src="public/js/bootstrap.js"></script>

</body>

</html>