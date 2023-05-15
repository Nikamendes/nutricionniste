
<?php

# Fonction pour afficher le menu
function renderMenu()
{
    # Vérifier si l'utilisateur est connecté
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
	
	# On vérifie si l'utilisateur est déjà connecté
	$utilisateurConnecte = isset($_SESSION['utilisateur_id']);
	
    $menu = '
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mon site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">';


    // Si l'utilisateur est connecté, on affiche ce menu
    if ($utilisateurConnecte) {
        // Utilisateur connecté, afficher les options supplémentaires
        $menu .= '
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page_protegee.php">Page Protégée</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="back/deconnexion.php">Déconnexion</a>
                    </li>';
    } else {
        // Utilisateur non connecté, afficher les options de connexion et d'inscription
        $menu .= '
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Back/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./Front/recettes.php">Recettes</a>
                </li>';
    }

    $menu .= '
                </ul>
            </div>
        </div>
    </nav>';

    echo $menu;
}

# Fonction pour récupérer les informations d'un utilisateur par son ID
function getUserByID($conn, $utilisateurID)
{
    $sql = "SELECT * FROM utilisateurs WHERE id = :id";
    $query = $conn->prepare($sql);
    $query->execute(['id' => $utilisateurID]);
    return $query->fetch(PDO::FETCH_ASSOC);
}

# Fonction pour récupérer la date et l'heure de dernière connexion d'un utilisateur
function getLastConnexion($conn, $utilisateurID)
{
    $sql = "SELECT date_derniere_connexion FROM utilisateurs WHERE id = :id";
    $query = $conn->prepare($sql);
    $query->execute(['id' => $utilisateurID]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        return $result['date_derniere_connexion'];
    } else {
        return 'Aucune donnée de dernière connexion trouvée';
    }
}

# Fonction pour afficher le footer
function renderFooter() {
    $footer = '
    <footer class="footer bg-light">
        <div class="container">
            <p class="text-center">Mon site &copy; 2023</p>
        </div>
    </footer>';

    echo $footer;
}

# Fonction pour afficher TOUS les clients
function requete1($conn) {
    $sql = "SELECT * FROM client";
    $result = $conn->prepare($sql);
    $result->execute();
	
	# Si aucun résultat n'est trouvé, on affiche un message 
	if ($result->rowCount() == 0)  {
        return "Aucune donnée à afficher pour le moment";
    }
	
    #return $result->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

# Fonction pour afficher TOUTES les ventes
function requete2($conn) {
	# Requête 2, on va afficher tout ce qui est dans la base de données, dans "vente"
    $sql = "SELECT * FROM Client";
    $result = $conn->prepare($sql);
    $result->execute();
	
	# Si aucun résultat n'est trouvé, on affiche un message 
	if ($result->rowCount() == 0)  {
        return "Aucune donnée à afficher pour le moment";
    }
	# Ensuite on crée le code HTML pour afficher le résultat proprement

    $html = '<table class="table table-striped table-hover">';
    $html .= '<thead>';
    $html .= '<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Adresse</th></tr>';
    $html .= '</thead>';
    $html .= '<tbody>';

    foreach ($result as $row) {
        $html .= '<tr>';
        $html .= '<td>' . $row['id'] . '</td>';
        $html .= '<td>' . $row['Nom'] . '</td>';
        $html .= '<td>' . $row['Prénom'] . '</td>';
        $html .= '<td>' . $row['Adresse'] . '</td>';
        $html .= '</tr>';
    }

    $html .= '</tbody>';
    $html .= '</table>';

    return $html;

	# ça c'est ce qui envoie les données a afficher
    return $html;
}