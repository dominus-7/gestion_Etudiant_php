<?php
    require_once 'connexion.php';
    require_once 'role.php';

    $id = $_GET['code'];

    $req = "DELETE FROM etudiant WHERE ID = ?";
    $stmt = $db->prepare($req);
    $stmt->bindValue(1,$id,PDO::PARAM_INT);
    $stmt->execute();

    header('location:etudiant.php');



?>