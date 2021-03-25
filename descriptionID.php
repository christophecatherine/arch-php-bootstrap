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
    <title>Titre ID | Tuto Bootrstrap</title>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/81855dfb83.js"
      crossorigin="anonymous"
    ></script>
    <!-- Style Css -->
    <link rel="stylesheet" href="public/css/style.css" />
  </head>
  <!-- / Head -->
  <body>

    <?php include 'views/navbar.php' ?>

    <!-- Header -->
    <header class="container-fluid img-header-descr">
      <div class="d-flex align-items-center h-100">
        <div class="flex-column">
          <h1 class="text-white font-weight">Titre</h1>
          <p class="text-white font-weight">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
      </div>
    </header>
    <!-- / Header -->

    <div class="container pb-5">
      <div class="row">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cupiditate praesentium eveniet veritatis dolorum voluptates, ipsum nihil dolor impedit deserunt, totam debitis quos provident ratione recusandae error, vel facilis dolores.
      </div>
    </div>

    <!-- Commentaire -->
    <div class="container">

      <div class="col-md-12 text-center">
        <h4>Commentaire</h4>
      </div>

      <!-- Commentaire 1 -->
      <div class="media row my-2">
        <img
          src="public/images/code-blue.jpg"
          style='max-height: 56px'
          class="rounded-circle col-md-1 col-sm-2 col-2"
          alt="..."
        />
        <div class="media-body col-md-11 col-sm-10 col-10">
          <h5 class="mt-0">Media heading</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
          scelerisque ante sollicitudin. Cras purus odio, vestibulum in
          vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
          vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </div>

    </div>
    <!-- / Commentaire -->

    <!-- Liste Card (Dernier Article) -->
    <?php include 'views/cardListNew.php' ?>

    <!-- Footer -->
    <?php include 'views/footer.php' ?>

    <!-- Import JS -->
    <!-- Jquery -->
    <script src="../js/jquery.js"></script>
    <!-- Popper -->
    <script src="../js/popper.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
