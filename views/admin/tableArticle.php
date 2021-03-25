<!-- Modal Edit & Delete -->
<?php
include './views/modals/modalCreateArticle.php';
include './views/modals/modalEditArticle.php';
include './views/modals/modalDeleteArticle.php';
?>

<!-- Gestion Articles -->
<div class="card">

    <div class="card-header" id="headingOne">
        <div class="row justify-around">
            <div class="col-md-6">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Gestion des articles
                    </button>
                </h2>
            </div>
            <div class="col-md-6 text-center">
                <button class='btn btn-primary' data-target='#modalCreateArticle' data-toggle="modal">create</button>
            </div>
        </div>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">subtitle</th>
                        <th scope="col">description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // Appel de la class Database et de ça fontion connect()
                    $pdo = Database::connect();
                    $sql = 'SELECT * FROM articles ORDER BY id DESC';
                    $q = $pdo->query($sql);

                    foreach ( $q as $row) {

                    ?>

                        <tr class="text-center">
                            <th scope="row"> <?php echo $row['id'] ?> </th>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['subtitle'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td>
                                <button data-target='#modalEditArticle' class="btn btn-warning btn-sm" data-toggle="modal" data-id="<?php echo $row['id'] ?>" data-title="<?php echo $row['title'] ?>" data-subtitle="<?php echo $row['subtitle'] ?>" data-description="<?php echo $row['description'] ?>">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button data-target='#modalDeleteArticle' class="btn btn-danger btn-sm" data-toggle="modal" data-id="<?php echo $row['id'] ?>" data-title="<?php echo $row['title'] ?>">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>

                    <?php };

                    // Appel de la class Database et de ça fontion disconnect()
                    Database::disconnect();

                    ?>

                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- / Gestion Articles -->
