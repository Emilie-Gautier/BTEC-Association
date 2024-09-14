<?php
session_start();

// Vérifiez si l'utilisateur est déjà authentifié
//if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
//    header("Location: dashboard.php");
//    exit;
//}
// Inclure l'autoloader de Composer
require 'vendor/autoload.php';

use Dotenv\Dotenv;

// Charger les variables d'environnement depuis le fichier .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Initialisation des variables d'erreur
$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtenez le code d'accès depuis les variables d'environnement
    $correct_code = $_ENV['ACCESS_CODE']; // Utilisation de la variable d'environnement
    $code = $_POST['code'];

    if ($code === $correct_code) {
        // Code correct, l'utilisateur est authentifié
        $_SESSION['authenticated'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Code incorrect.";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Association BTEC</title>
</head>
<body>
    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <div id="conteneur">
    <div class = code>
    <form method="post" action="">
        <h2 for="code">Bienvenue sur le site de BTEC <br> Veuillez rentrer votre code d'accès:</h2>
        <input type="text" id="code" name="code" required>
        <button type="submit">Se connecter</button>
    </form>
    </div>
    </div>
</body>
</html>

