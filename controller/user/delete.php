<!-- 
    Page Delete ID
-->
<?php
// import du fichier database.php
require '../../db/database.php';
// on définit par default notre id en 0
$id = 0;

// on check si on récupère l'id dans notre method get
if (!empty($_GET['id'])) {
    // on instancie notre id avec l'id de la method get
    $id = $_REQUEST['id'];
}

if (!empty($_POST)) {
    // on récupère l'id de notre method post
    $id = $_POST['id'];

    // et on supprime nos data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM users  WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    // et on redirige sur la page index
    header("Location: ../../admin.php");
}
?>