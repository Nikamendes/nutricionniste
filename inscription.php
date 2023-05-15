<?php
// On appelle le fichier qui contient la configuration de la base de données
 require_once 'config.php';
// On appelle le fichier qui contient les requêtes PHP PDO
require_once 'fonctions.php';

// Vérifier si l'utilisateur est déjà connecté
session_start();
if (isset($_SESSION['utilisateur_id'])) {
    // Rediriger vers la page protégée si l'utilisateur est déjà connecté
    header("Location: page_protegee.php");
    exit();
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
    <!-- On inclut le menu en appelant la fonction renderMenu qui est dans fonctions.php -->
    <?php renderMenu(); ?>

    <div class="container">
        <!-- Afficher le formulaire d'inscription -->
        <h1 class="mt-5">Inscription</h1>
        <form action="traitement_inscription.php" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mot_de_passe" class="form-label">Mot de passe :</label>
                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
        <p class="mt-3">Déjà inscrit ? <a href="connexion.php">Connectez-vous ici</a>.</p>
    </div>

	<!-- Footer -->
	<?php renderFooter(); ?>
    <!-- Ici on va inclure tous les scripts qu'on veut utiliser, comme JQuery, Bootstrap etc -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>