<?php
require_once './Back/fonctions.php';
require_once 'back/config.php';
require 'Back/langage.php';
  require_once './Back/fonctions.php';
    $langage= 'fr';
   loadLangage ( $langage);


# On crée une variable qui va contenir le résultat des fonctions qu'on va appeler
$result = '';
if (isset($_GET['requete'])) {
    $requete = $_GET['requete'];
    switch ($requete) {
		# Si c'est la fonction 1 qui est appelée
        case 'requete1':
            $result = requete1($conn);
            break;
		# Si c'est la fonction 2 qui est appelée
        case 'requete2':
            $result = requete2($conn);
            break;
		# Si la requête n'existe pas
        default:
            $result = 'Requête inconnue';
            break;
    }
}
?>
<html>
 <head>
    <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width,initial scale 1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  <title>Diététienne-Nutritionniste</title>


    </head>


    <body>
      <style>
        img{
          margin-left:100px;
        }
  
        </style>

              <?php renderMenu(); ?>

<div class="container">
    <h1 class="mt-5">Bienvenue sur mon site</h1>  


    <?php if ($result): ?>
        <h2 class="mt-5">Résultats de la requête</h2>
        <?php echo $result; ?>
    <?php endif; ?>
</div>
       <img src="https://auchanetmoi.auchan.fr/api/v1/media_files/1395/media/798x449c" />
       
    <?php 
       $headerTitle='Spaghettis au thon';
   
    ?>
 
       <h3>Spaghettis au Thon</h3>

  <p>Découvrez la recette de spaghettis au thon minceur. Allégé en matières grasses, ce repas ne vous fera pas grossir. Il est essentiel de manger des féculents pour être en forme tout au long de la journée. Préparez-vous ces spaghettis au thon et aux tomates cerises pour un déjeuner complet, vous n'aurez plus de petit creux au goûter.</p>

    
 <h3>Description</h3>
   <p>Les pâtes au régime sont idéales au déjeuner pour éviter les fringales de l’après-midi car elles sont riches en sucres lents.
Choisissez-les complètes, elles seront encore meilleures pour la santé du fait des fibres présentes en grandes quantités.</p>
       
<h3>Préparation</h3>
  <ul>
    <li>Préparation 10 min</li>
    <li>Cuisson 12 min</li>
  </ul>
       

       
<h3>1° étape</h3>
  <p>Lavez les tomates cerises et coupez-les en deux. Lavez et hachez le basilic. Égouttez le thon. Réservez. Dans une casserole, faites bouillir de l'eau salée.</p>

<h3>2° étape</h3>
  <p>Pendant ce temps, préparez la sauce. Dans une autre casserole à feu doux, versez le concentré de tomates avec la crème. Salez et poivrez à votre convenance. Laisser mijoter le tout pendant 5 min. Ajoutez alors le thon et les tomates cerises. Faire revenir la sauce thon/tomates quelques minutes.</p>

<h3>3° étape</h3>
  <p>Quand l'eau est bouillante, mettez les pâtes à cuire comme indiqué sur le paquet pour qu'elles soient al dente. Versez-les dans des assiettes creuses puis ajoutez la sauce tomate/thon. Parsemez un peu de basilic frais haché. Servez.</p>
   


  
  <h2>Suplement</h2>
      
    <p>Vous pouvez varier les plaisirs en y incorporant d'autres légumes riches en fibres et en vitamines, parfaits pour un régime minceur, tels que la courgette, l'aubergine ou encore le poivron.</p>


       <h2>Complement</h2>
       <p>Pour votre santé evité de grinhoté entre les repas</p>

       <!-- Ici on va inclure tous les scripts qu'on veut utiliser, comme JQuery, Bootstrap etc -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
document.getElementById('requete1').addEventListener('click', function() {
  window.location.href = '?requete=requete1';
});

document.getElementById('requete2').addEventListener('click', function() {
  window.location.href = '?requete=requete2';
});
</script>
 <footer>Droit de Auteur</footer>

</body>
</html>
