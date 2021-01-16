<?php
    session_start();
    if (!isset($_SESSION['PROFILE'])) {
        header('location:login.php');
    }

?>

<?php

    

    try {
        $db = new PDO("mysql:host=127.0.0.1;dbname=scolarite;port=8889","root","root");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOExcetion $e) {
        die ("Erreur:".$e->getMessage());
    }


?>