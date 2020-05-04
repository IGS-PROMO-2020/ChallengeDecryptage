<?php

// On met en variables les informations de connexion 
$hote = 'localhost'; // Adresse du serveur 
$log = 'vaka'; // Login 
$pass = 'VAKAadmin2020'; // Mot de passe 
$base = 'challenge4_db'; // Base de données à utiliser 
 
// On se connecte à la base de données 
$connecting=mysqli_connect($hote, $log, $pass); 
 
// On selectionne la base de données souhaitée 
mysqli_select_db($connecting, $base); 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>