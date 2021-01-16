
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
        <div class=" card card-header saisie" ><span class="saisie">Authentification</span> </div>
        <div class=" card card-body">
            <form action="authentification.php" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username" class="control-label">Login:</label>
                    <input type="text" name="username" class="form-group" id="username">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Pass:</label>
                    <input type="password" name="password" class="form-group" id="password" required>
                </div>
                <button class="btn btn-primary">Connexion</button>
                
            </form>
        </div>
        </div>
    </div>
    </div>
    </div>    
</body>
</html>