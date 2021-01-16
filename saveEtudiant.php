
<?php
    require_once 'securite.php';
    require_once 'role.php';
?>

<?php
    
    require_once 'connexion.php'; 


    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $photo = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($photo_tmp,'./images/'.$photo);
    echo $photo_tmp;
    
    //Inserttion des données dans la base de données

    $req = "INSERT INTO etudiant(NOM,EMAIL,PHOTO) VALUES (?,?,?)";
    $stmt = $db->prepare($req);
    $stmt->bindvalue(1,$nom,PDO::PARAM_STR);
    $stmt->bindvalue(2,$email,PDO::PARAM_STR);
    $stmt->bindvalue(3,$photo,PDO::PARAM_STR);
    $stmt->execute();
    header('location:etudiant.php');

?>