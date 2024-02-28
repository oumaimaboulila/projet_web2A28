<?php
require_once ('inscription.php');
   $last_name = $_POST["last_name"];
   $first_name = $_POST["first_name"];
    $email = $_POST["email"];
    $tel = $_POST["phone"];
    $bdate = $_POST["dob"];
    $password = $_POST["pass"];
    $code_postal = $_POST["cpass"];
   
    echo "<h2>Informations reçues :</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><td>$last_name</td></tr>";
    echo "<tr><th>Prénom</th><td>$first_name</td></tr>";
    echo "<tr><th>Email</th><td>$email</td></tr>";
    echo "<tr><th>Tel</th><td>$tel</td></tr>";
    echo "<tr><th>Date de naissance</th><td>$bdate</td></tr>";
    echo "<tr><th>Mot de passe</th><td>$password</td></tr>";
    echo "<tr><th>Code postal</th><td>$code_postal</td></tr>";
    echo "</table>";
    ?>
    

}