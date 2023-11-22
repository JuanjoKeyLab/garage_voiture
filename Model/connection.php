<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

define('DB_HOST', 'mysql-juanjokeylab.alwaysdata.net'); // Remplacez par votre hôte MySQL
define('DB_USER', '332332_live'); // Remplacez par votre nom d'utilisateur MySQL
define('DB_PASS', 'Unrealtournament2004!'); // Remplacez par votre mot de passe MySQL
define('DB_NAME', 'juanjokeylab_live'); // Remplacez par le nom de votre base de données
define('DB_URL', 'jdbc:mariadb://mysql-juanjokeylab.alwaysdata.net:3306/juanjokeylab_live');


// // Créer une connexion
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verifier la connexion
if ($conn->connect_error) {
  die("La conexión falló: " . $conn->connect_error);
}
