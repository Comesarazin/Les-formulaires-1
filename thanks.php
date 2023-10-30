<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nom = $_POST["user_name"];
        $prenom = $_POST["user_nameP"];
        $email = $_POST["user_email"];
        $telephone = $_POST["user_phone"];
        $sujet = $_POST["sujet"];
        $message = $_POST["user_message"];
        
        echo "Merci $prenom $nom de nous avoir contacté à propos de \"$sujet\".<br><br>";
        echo "Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande:<br><br>";
        echo $message;
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer.";
    }

    ?>