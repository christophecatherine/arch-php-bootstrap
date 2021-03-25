<?php
// import du fichier database.php
require_once '../../db/database.php';

echo("<script>console.log('PHP: Formulaire Login');</script>");

session_start();

echo("<script>console.log('PHP: " . json_decode($_SESSION) . "');</script>");

if (!empty($_POST)) {

    // On définit la valeur de nos variable au résultat de la method post
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $pdo = Database::connect();

    $sql = "SELECT * FROM users WHERE email = '{$email_login}'";
    $q = $pdo-> query($sql);

    foreach ($q as $row) {
        if ($email_login === $row['email'] && password_verify($password_login, $row['password'])) {
            echo("<script>console.log('PHP4: email && password matched');</script>");
            echo("<script>console.log('PHP4: " . json_decode($row) . "</script>");
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['mobile'] = $row['mobile'];
            if ($row['isAdmin'] === 1) {
                $_SESSION['isAdmin'] = true;
            }
        }
    }


    header('Location: ../../admin.php');

}

?>