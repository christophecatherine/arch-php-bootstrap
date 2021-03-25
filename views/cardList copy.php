    <!-- Liste de card -->
    <div class="container pb-4">
      <div class="col-md-12 text-center">
        <h4>Listes des articles</h4>
      </div>
      <ul id='cardListBlog' class='row'>
        
        <?php
        // import de la connexion Connexion à la DB
        include 'db/database.php';
        // Appel de la class Database et de ça fontion connect()
        $pdo = Database::connect();
        
        $sql = 'SELECT * FROM articles ORDER BY id DESC';
        $q = $pdo->query($sql);

        foreach ( $q as $row) {
        ?>

        <li class="card col-md-3 col-sm-12">
          <a href="descriptionID.php">
            <img src="/public/images/code-blue.jpg" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
          <h5 class="card-title"> <?php echo $row['title'] ?> </h5>
          <p class="card-title"> <?php echo $row['subtitle'] ?> </p>
            <p class="card-text">
              <?php echo $row['description'] ?>
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </li>

        <?php }
        // Appel de la class Database et de ça fontion disconnect()
        Database::disconnect();
        ?>

      </ul>
    </div>
    <!-- / Liste de card -->