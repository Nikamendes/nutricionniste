<?php
 
  require 'constant/functions.php';
  require 'Back/langage.php';
	require 'Front/recettes.php';
    $langage= 'fr';

    $recette= showRecettes($recettes);
		loadLangage ( $langage);

?>

<html>
 <head>
   <meta name="viewport" content="width=device-width,initial scale 1.0">
  <meta charset="utf-8" />
  <title>Diététienne-Nutritionniste</title>


    </head>
     <body>
       
      <style>

        html{
          background-color:609A7D;
        }
      p{
        font-style:center;
        color: blackgray;
        text-align: justify;
        text-decoration: justify;
      }

      h1{
        color: blue;
      }

      h2{
        color:black;
      }

        h3{
          color:black;
        }

     img {
    height: 110px;
    width: 100px;
    background-image:none;
    background-size: contain;
    border: 50px;
    border-radius: 20px 20px 20px 40px;
    background-size: cover;
    box-shadow: 10px 10px gray;
}
   }
    </style>
    
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
       
 <nav role="navigation">
 
     <a href="./Front/form.php" class="nav-items ">Envoyer le Formulaire</a>
   
 </nav>
      <form method='POST' action='form.php'>
      login:<input type='text'name='login' value='Doe'>
        <br>
        email:<input tupe='text' name='email'>
        <br>
        age:<input type='checkebox' name='age'>
        <br>
        allergie:<input type='checkebox' name='allergie'>
        <br>
        rendez-vous:<input type='checkebox' name='Pris de Rendez-vous'>
        <br>
        <div classe="input-row">
  <button id="connexion" 
          type="button">Connexion</button>
    
      </form>
 
          

   <script src="script.js"></script>

    <footer>Droit de Auteur</footer>
</body>
</html>