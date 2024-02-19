
<?php
    $nom = $_GET["nom"];
    $prenom = $_GET["fn"];
    $email = $_GET["email"];
    $tel = $_GET["tel"];
    $bdate = $_GET["bdate"];
    $password = $_GET["Password"];
    $code_postal = $_GET["code_postal"];
   
    echo "<h2>Informations reçues :</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><td>$nom</td></tr>";
    echo "<tr><th>Prénom</th><td>$prenom</td></tr>";
    echo "<tr><th>Email</th><td>$email</td></tr>";
    echo "<tr><th>Tel</th><td>$tel</td></tr>";
    echo "<tr><th>Date de naissance</th><td>$bdate</td></tr>";
    echo "<tr><th>Mot de passe</th><td>$password</td></tr>";
    echo "<tr><th>Code postal</th><td>$code_postal</td></tr>";
    echo "</table>";
    ?>
