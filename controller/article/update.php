<!-- 
    Page Update ID
-->
<?php
// import du fichier database.php
require '../../db/database.php';
// on définit par default notre id en null
$id = null;

// on check si on récupère l'id dans notre method get
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

// si il n'y a pas d'id
if (null == $id) {
    // on redirige sur la page index.php
    header("Location: ../../admin.php");
}

// Si il y a une method post
if (!empty($_POST)) {
    // On définit nos variables à envoyer
    $titleError = null;
    $subtitleError = null;
    $descriptionError = null;

    // On définit la valeur de nos variable au résultat de la method post
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];

    // On check nos variable input:
    $valid = true;
    if (empty($title)) {
        $titleError = 'Please enter title';
        $valid = false;
    }

    // Si tout est valid alors
    if ($valid) {
        // update data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE articles  set title = ?, subtitle = ?, description =? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($title, $subtitle, $description, $id));
        Database::disconnect();
        header("Location: ../../admin.php");
    }
// Sinon on récupère les datas pour les afficher sur la page
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM articles where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $description = $data['description'];
    Database::disconnect();
}
?>