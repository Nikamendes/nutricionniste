<?php
// Détruire la session et rediriger vers la page de connexion
session_start();
session_destroy();
header("Location: ../index.php");
exit();
?>