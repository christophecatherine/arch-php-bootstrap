<?php
// import du fichier database.php
require '../../db/database.php';

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
    // On check notre title
    if (empty($title)) {
        // variable de l'err
        $titleError = 'Please enter title';
        // si il n'y a pas de title alors
        $valid = false;
    }

    // Si tout est valid alors
    if ($valid) {
        // insert data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO articles (title,subtitle,description) values(?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($title, $subtitle, $description));
        Database::disconnect();
        header("Location: ../../admin.php");
    }
}
?>