
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

define('DB_HOST', 'mysql-juanjokeylab.alwaysdata.net'); // Remplacez par votre hôte MySQL
define('DB_USER', '332332_live'); // Remplacez par votre nom d'utilisateur MySQL
define('DB_PASS', 'Unrealtournament2004!'); // Remplacez par votre mot de passe MySQL
define('DB_NAME', 'juanjokeylab_live'); // Remplacez par le nom de votre base de données
define('DB_URL', 'jdbc:mariadb://mysql-juanjokeylab.alwaysdata.net:3306/juanjokeylab_live');


// // Crea una conexión
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Verifica la conexión
// if ($conn->connect_error) {
//   die("La conexión falló: " . $conn->connect_error);
// }

// echo "Conexión exitosa";

// // Envía una consulta
// $sql = "SELECT * FROM vehiculos WHERE brand='Toyota' AND km<100000 AND year>2010";
// $result = $conn->query($sql);

// // Imprime los resultados
// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//     echo "Brand: " . $row["brand"]. " - Model: " . $row["model"]. " - Kilometers: " . $row["km"]. " - Year of circulation: " . $row["year"]. "<br>";
//   }
// } else {
//   echo "No results found.";
// }

// // Cierra la conexión
// $conn->close();

// $brand = $_POST['brand'];
// $model = $_POST['model'];
// $km = $_POST['km'];
// $price = $_POST['price'];
// $photo = $_POST['photo'];
// $description = $_POST['description'];
?>
