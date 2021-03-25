<?php
session_start();
echo ("<script>console.log('PHP: " . session_id() . "');</script>");

if(!isset($_SESSION['name']))      // if there is no valid session
{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Titre de la Page -->
  <title>Admin | Tuto Bootrstrap</title>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/81855dfb83.js" crossorigin="anonymous"></script>
  <!-- Style Css -->
  <link rel="stylesheet" href="public/css/style.css" />
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<!-- / Head -->

<body>

  <?php include 'views/navbarAdmin.php' ?>

  <?php
  // import de la connexion Connexion à la DB
  include 'db/database.php';
  // Appel de la class Database et de ça fontion connect()
  $pdo = Database::connect();
  ?>

  <!-- Emplacement sous la navbar -->
  <div style='width: 7vh'></div>

  <!-- Collapse -->
  <div class="container mt-5 pt-4">
    <div class="accordion" id="accordionExample">

      <!-- Table Gestion des Articles -->
      <?php include 'views/admin/tableArticle.php' ?>

      <!-- Table Gestion des Users -->
      <?php include 'views/admin/tableUser.php' ?>

    </div>
  </div>
  <!-- / Collapse -->

  <?php
  // Appel de la class Database et de ça fontion connect()
  Database::disconnect();
  ?>

  <!-- Footer -->
  <?php include 'views/footer.php' ?>

  <!-- Import JS -->
  <!-- Popper -->
  <script src="public/js/popper.js"></script>
  <!-- Bootstrap -->
  <script src="public/js/bootstrap.js"></script>

</body>

</html>