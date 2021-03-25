    <!-- Liste de card -->
    <div class="container pb-4">
      <div class="col-md-12 text-center">
        <h4>Les derniers articles</h4>
      </div>
      <div class='row'>
        
        <?php
        // import de la connexion Connexion à la DB
        include 'db/database.php';
        // Appel de la class Database et de ça fontion connect()
        $pdo = Database::connect();
        $i = 0;

        $sql = 'SELECT * FROM articles ORDER BY id DESC';
        $q = $pdo->query($sql);

        foreach ( $q as $row) {
          if(++$i > 4) break;
        ?>

        <div class="card col-md-3 col-sm-12">
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
        </div>

        <?php }
        // Appel de la class Database et de ça fontion disconnect()
        Database::disconnect();
        ?>

        <!-- Card Example --
        <div class="card col-md-4 col-sm-12" style='max-width: 230px'>
          <a href="descriptionID.php">
            <img src="/public/images/code-blue.jpg" class="card-img-top" alt="..." />
          </a>
          <div class="card-body">
            <h5 class="card-title">Card titl</h5>
            <p class="card-text">
              This is a wider card with supporting text below as a natural
              lead-in to additional content. This card has even longer content
              than the first to show that equal height action.
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <!--  -->

      </div>
    </div>
    <!-- / Liste de card -->