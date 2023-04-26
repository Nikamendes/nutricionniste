<?php
 
require './Front/recettes.php';


function showRecettes($recettes){


	foreach ( $recettes as $recette ) {
	  echo '<dl style="margin-bottom: 1em;">';
	
	  foreach ( $recette as $key => $value ) {
	    echo "<dt>$key</dt><dd>$value</dd>";
	  }

	  echo '</dl><br>';
	}

}