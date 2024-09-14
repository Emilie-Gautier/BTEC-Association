<?php
session_start();

// Vérifiez si l'utilisateur est authentifié
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Si l'utilisateur n'est pas authentifié, redirigez-le vers la page de connexion
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTEC Ecole Chateaubriand</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>   
    <div class="tab">  

<button class="button" id='Tab1'>Se porter volontaire</button>
<script>
    document.getElementById("Tab1").addEventListener("click", function() {
        window.open("2.Se porter volontaire.html", "_blank");
    });
</script>
    <button id="openModalBtn">S'inscrire au Chat Google</button>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close"></span>
            <h2>Formulaire d'inscription</h2>
            <form action="formulaire.php" method="post">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required><br><br>
                
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required><br><br>
                
                <label for="email">Adresse mail:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="classe">Classe de l'enfant:</label>
                <input type="text" id="classe" name="classe" required><br><br>
                
                <label for="maitresse">Maîtresse:</label>
                <input type="text" id="maitresse" name="maitresse" required><br><br>

                <label for="rgpd">J'accepte les termes et conditions RGPD:</label>
                <input type="checkbox" id="rgpd" name="rgpd" required><br><br>
                
                <input type="submit" value="S'incrire au Chat Google">
            </form>
        </div>
    </div>
    <div class="content">
<h2>Introduction</h2>
    <p class ="Introduction">L'objectif de ce site web est de collaborer ensemble pour faciliter les récoltes de fonds afin de financer les sorties scolaires des enfants de l'école Chateaubriand.<br>
    Le principe est simple, il suffit de se porter volontaire pour participer aux évènements (Kermesse, marchés, spectacles, vide ta chambre, matchs…) par biais d'un fichier partagé en cliquant sur "Se porter volontaire"</a>.<br>
    Les dates et lieux des évènements seront communiqués dans cahier de liaison.<br>
    Il est possible de participer aux réunions à distance ou en présence via Google Meet sans obligation et sans inscription.<br></p>
    <h2>Objectif</h2>
       <br>Collaborer
       <br>Proposer
       <br>Participer
       <br>Echanger
    <p class ="Informations complémentaire">
    <br>Vous aurez la possibilité tout au long de l'année de faire des dons indépendants ou de vous inscrire comme membres actifs.
    <br>Pour ce faire, un formulaire d'inscription vous sera communiqué à la rentrée par l'intermédiaire du cahier de liaison.<br>
    N'hésitez pas à le remplir et à transmettre votre adresse mail si vous l'accéptez à BTEC pour les échanges via Google Chat depuis le bouton "S'incrire au Chat Google". 
    <p class ="contact">Contact : btec.inscritpion.evenements@gmail.com</p> 
   <!-- <a href="2.Se porter volontaire.html" class="special-link">Voir les évènements et se porter volontaire ici</a>-->
</div>
</body>
</html>
