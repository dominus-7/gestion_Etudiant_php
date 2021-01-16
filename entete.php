

<div class="container col-md-12">
<nav class="navbar  navbar-expand-lg navbar-light bg-primary">
    <ul class="navbar nav">
        <li><a class="navbar-brand" href="etudiant.php">Etudiants</a></li>
        <li><a class="navbar-brand" href="saisieEtudiant.php">Saisie</a></li>
        <li><a class="navbar-brand" href="logOut.php">Log Out(<?php echo (isset($_SESSION['PROFILE'])? $_SESSION['PROFILE']['LOGIN']:'')?>)</a></li>
        <li><a class="navbar-brand" href="login.php">Login</a></li>
    </ul>

</nav>
</div>
