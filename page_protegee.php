<?php
# On appelle le fichier qui contient la configuration de la base de données
require_once 'back/config.php';
# On appelle le fichier qui contient lles requêtes PHP PDO
require_once 'fonctions.php';

// Vérifier si l'utilisateur est connecté
// Vérifier si l'utilisateur est connecté
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['utilisateur_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: connexion.php");
    exit();
}

// Récupérer les informations de l'utilisateur connecté
$utilisateurID = $_SESSION['utilisateur_id'];
$utilisateur = getUserByID($conn, $utilisateurID);

// Récupérer la date et l'heure de dernière connexion de l'utilisateur
$lastConnexion = getLastConnexion($conn, $utilisateurID);
?>

<!-- Maintenant on commence le HTML -->

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Espace Membre</title>
</head>
<body>
    <!-- On inclut le menu en appelant la fonction renderMenu qui est dans fonctions.php -->
    <?php renderMenu(); ?>

    <div class="container">
        <!-- Afficher le message de bienvenue avec la date de dernière connexion -->
        <h1 class="mt-5">Bonjour <span class="nom-utilisateur"><?php echo $utilisateur['nom']; ?></span></h1>


        <p>Bienvenue sur votre espace protégé. Votre dernière connexion date du <?php echo $lastConnexion; ?>.</p>
    </div>
	
	<!-- Footer -->
	<?php renderFooter(); ?>
	
    <!-- Ici on va inclure tous les scripts qu'on veut utiliser, comme JQuery, Bootstrap etc -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>