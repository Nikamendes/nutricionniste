<?php
# On appelle le fichier qui contient la configuration de la base de données
require_once 'config.php';
# On appelle le fichier qui contient lles requêtes PHP PDO
require_once 'fonctions.php';

// Se connecter à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $motDePasse = $_POST['mot_de_passe'];

    // Rechercher l'utilisateur dans la base de données
    $sql = "SELECT id, mot_de_passe FROM utilisateurs WHERE email = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$email]);
	$user = $stmt->fetch();


// Vérifier si l'utilisateur existe et si le mot de passe correspond
if ($user && password_verify($motDePasse, $user['mot_de_passe'])) {
    // Mettre à jour la date de dernière connexion
    $sql = "UPDATE utilisateurs SET date_derniere_connexion = NOW() WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user['id']]);

    // Créer une session pour l'utilisateur
    session_start();
    $_SESSION['utilisateur_id'] = $user['id'];
    $_SESSION['utilisateur_nom'] = $user['nom'];

    // Rediriger vers la page protégée
    header("Location: page_protegee.php");
    exit();
} else {
    // Identifiants invalides, afficher un message d'erreur
    echo "Identifiants invalides";
}

}
?>