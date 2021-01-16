<?php
    require_once 'securite.php';

?>

<?php
    require_once 'connexion.php';

    $req = "SELECT * FROM etudiant";
    $stmt = $db->query($req);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Gestion des Etudiants</title>
</head>
<body>
    <?php  require_once 'entete.php' ; ?>
    <div class="contenu">
    <div class="col-md-8 col-xs-12 offset-2">
    <div  class="bg bg-primary">
        <div class=" card card-header"><span class="liste"></span> Liste des Etudiants</div>
        <div class=" card card-body">
            <table class=" table table-striped">
                <tr>
                    <th>CODE</th>
                    <th>NOM</th>
                    <th>EMAIL</th>
                    <th>PHOTO</th>
                    <th colspan="2" align="center">ACTION</th>
                </tr>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <td><?=$row['ID']; ?></td>
                        <td><?=$row['NOM']; ?></td>
                        <td><?=$row['EMAIL']; ?></td>
                        <td><img src="images/<?=$row['PHOTO']; ?>" alt="" height= "70" width="70"> </td>
                        <td><a href="editerEtudiant.php?code=<?=$row['ID']; ?>" class="btn btn-primary">Editer</a>  </td>
                        <td><a onclick = "return confirm('Etes-vous sur?');" href="supprimerEtudiant.php?code=<?=$row['ID']; ?>" class="btn btn-danger">Supprimer</a> </td>
                    </tr>

                <?php endforeach; ?>
            </table>
    </div>
</div>
</div> 

    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</html>