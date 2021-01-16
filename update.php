<?php
    session_start();
    if (!isset($_SESSION['PROFILE'])) {
        header('location:login.php');
    }

?>


<?php
    require_once 'connexion.php';
    $id = $_POST['code'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $photo = $_FILES['photo']['name'];

    if ($photo == '') {
        $req = "UPDATE etudiant SET NOM=:n , EMAIL=:e  WHERE ID=:id";
        $stmt = $db->prepare($req);
        $stmt->bindValue('n',$nom,PDO::PARAM_STR);
        $stmt->bindValue('e',$email,PDO::PARAM_STR);
        $stmt->bindValue('id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }
    else{
        $photo_tmp = $_FILES['photo']['tmp_name'];
        move_uploaded_file($photo_tmp,'./images/'.$photo);
        $req = "UPDATE etudiant SET NOM=:n , EMAIL=:e , PHOTO=:p WHERE ID=:id";
        $stmt = $db->prepare($req);
        $stmt->bindValue('n',$nom,PDO::PARAM_STR);
        $stmt->bindValue('e',$email,PDO::PARAM_STR);
        $stmt->bindValue('p',$photo,PDO::PARAM_STR);
        $stmt->bindValue('id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }

    
    header('location:etudiant.php');



?>