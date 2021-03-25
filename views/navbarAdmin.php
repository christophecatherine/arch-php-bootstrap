    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg fixed-top border-bottom border-dark navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="#">Admin / <?php echo $_SESSION['name'] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Lien vers page home -->
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">retour home</a>
                </li>
                <!-- Modal de déconnexion -->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#modalLogout" href="admin.php">Se Déconnecter</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- / NavBar -->

    <!-- Modal Logout -->
    <?php include 'modals/modalLogout.php' ?>