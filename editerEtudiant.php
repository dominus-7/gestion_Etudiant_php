<?php
    require_once 'connexion.php';
    require_once 'role.php';
    $id = $_GET['code'];

    $req = "SELECT  * FROM etudiant WHERE ID = ?";
    $stmt = $db->prepare($req);
    $stmt->bindValue(1,$id,PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Saisie des Etudiants</title>
</head>
<body>
<?php  require_once 'entete.php' ; ?>
    <div class="contenu">
    <div class="col-md-6 col-xs-12 offset-md-3">
    <div  class="bg bg-primary">
        <div class=" card card-header saisie" ><span class="saisie">Saisie des Etudiants</span> </div>
        <div class=" card card-body">
            <form action="update.php" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="code" class="control-label">Code:<?=$row->ID ;?></label>
                    <input type="hidden" name="code" value = "<?=$row->ID ;?>" class="form-group" id="code">
                </div>
                <div class="form-group">
                    <label for="nom" class="control-label">Nom:</label>
                    <input type="text" name="nom" value = "<?= $row->NOM ;?>" class="form-group" id="nom">
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="email" name="email" value = "<?= $row->EMAIL ;?>" class="form-group" id="email" required>
                </div>
                <div class="form-group">
                    <label for="photo" class="control-label">Photo:</label>
                    <input type="file" name="photo" value = "<?= $row->PHOTO ;?>" class="form-group" id="photo">
                </div>
                <button class="btn btn-primary">Enregistrer</button>
                
            </form>
        </div>
        </div>
    </div>
    </div>
    </div>    
</body>
</html>