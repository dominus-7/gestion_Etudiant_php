<?php
    require_once 'connexion.php';
    $login = $_POST['username'];
    $password = md5($_POST['password']);
    $req = "SELECT * FROM users WHERE LOGIN = ? AND PASSWORD = ?";
    $stmt = $db->prepare($req);
    $stmt->bindValue(1,$login,PDO::PARAM_STR);
    $stmt->bindValue(2,$password,PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch();
    if($row){
        session_start();
        $_SESSION['PROFILE'] = $row;
        header('location:etudiant.php');
    }
    else{
        header('location:login.php');
    }

?>