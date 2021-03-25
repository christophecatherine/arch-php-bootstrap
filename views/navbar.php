<!-- NavBar -->
<nav class="navbar navbar-expand-lg fixed-top border-bottom border-dark navbar-light bg-light px-3">
  <!-- Titre -->
  <a class="navbar-brand" href="index.php">Home</a>
  <!-- Boutton menu (hamburger) pour responcive -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- Lien Vers page Blog -->
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <!-- Lien Vers section contact -->
      <li class="nav-item">
        <a class="nav-link" href="index.php#contact">Contact</a>
      </li>

      <?php if (!isset($_SESSION['name'])) { ?>
      <!-- Boutton modal de connexion -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#modalLogin" href>Se Connecter</a>
      </li>

      <?php } else { ?>
      <!-- Lien Vers page Admin -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php#">Admin</a>
      </li>
      <!-- Boutton de deconnexion -->
      <li class="nav-item">
        <a class="nav-link" href="/controller/user/logout.php">Se déconnecter</a>
      </li>

      <?php } ?>

    </ul>
  </div>
</nav>
<!-- / NavBar -->

<!-- Modal Login -->
<?php include 'modals/modalLogin.php' ?>

<!-- Modal Logout -->
<?php include 'modals/modalLogout.php' ?>