<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $classe = htmlspecialchars($_POST['classe']);
    $maitresse = htmlspecialchars($_POST['maitresse']);
    $rgpd = isset($_POST['rgpd']) ? 'Oui' : 'Non';

    $to = "btec.inscription.evenements@gmail.com";
    $subject = "Nouvelle inscription";
    $message = "Nom: $nom\nPrénom: $prenom\nAdresse mail: $email\nClasse de l'enfant: $classe\nMaître ou maîtresse: $maitresse\nRGPD: $rgpd";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Inscription réussie.";
    } else {
        echo "Erreur lors de l'envoi de l'inscription.";
    }
}
?>
