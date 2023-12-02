<?php
include_once('./Model/connection.php');
// importa el modelo de conneccion, con la variable $conn podemos hacer las consultas en los controladores
// podes hacer lo mismo en otros 'controladores' para incluir la coneccion y usarla donde la necesites, te ahorra escribirla a cada vez

// Consulta sql para todos los autos con sus brand, podes agregar cosas que necesites traer de la base de datos respetando bien siempre los nombres de las columnas
$sql = "SELECT  a.voiture_id, a.photo2, a.photo3, a.photoSrc, a.price, a.model, a.km, a.year, b.brand_name, b.brand_description, b.employe_id
    FROM allVoitures a
    INNER JOIN Brand b ON a.brand_id = b.brand_id";

// Ejecutar la consulta SQL con la variable $conn del modelo de conneccion
$result = $conn->query($sql);

<<<<<<< HEAD
// Verificar si la consulta SQL fue exitosa
if ($result->num_rows > 0) {
  // Crear un array para almacenar los resultados
  $results_array = array();

  // Iterar sobre los resultados y agregarlos al array
  while($row = $result->fetch_assoc()) {
    $results_array[] = $row;
  }
=======
// // Crea una conexión
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verifica la conexión
if ($conn->connect_error) {
  die("La conexión falló: " . $conn->connect_error);
}
>>>>>>> 0067bb7665e7a2c0cceb2ec1cb277255a6fd7ac9

  // Convertir el array en un objeto JSON
  $json_results = json_encode($results_array);

<<<<<<< HEAD
  // Imprimir los resultados en formato JSON
  header('Content-Type: application/json');
  echo $json_results;
} else {
  echo "0 resultados";
}

// Cerrar la conexión
$conn->close();
=======
// Ejecutar la consulta SQL
$sql = "SELECT allVoitures.photo, allVoitures.photoSrc, allVoitures.price, allVoitures.model, allVoitures.km, allVoitures.year, Brand.brand_name, Brand.brand_description, Brand.employe_id
    FROM allVoitures
    INNER JOIN Brand ON allVoitures.brand_id = Brand.brand_id";

$result = $conn->query($sql);

// Verificar si la consulta SQL fue exitosa
if ($result->num_rows > 0) {
  // Crear un array para almacenar los resultados
  $results_array = array();

  // Iterar sobre los resultados y agregarlos al array
  while($row = $result->fetch_assoc()) {
    $results_array[] = $row;
  }

  // Convertir el array en un objeto JSON
  $json_results = json_encode($results_array);

  // Imprimir los resultados en formato JSON
  header('Content-Type: application/json');
  echo $json_results;
} else {
  echo "0 resultados";
}

// Cerrar la conexión
$conn->close();




//otra consulta
//buscar requetes anidadas
/* $sql2 = "SELECT allVoitures.photo allVoitures.model, allVoitures.km, allVoitures.year, Brand.brand_name, Brand.brand_description, Brand.employe_id
    FROM allVoitures
    INNER JOIN Brand ON allVoitures.brand_id = Brand.brand_id
    WHERE allVoitures.voiture_id = 1 AND allVoitures.voiture_id IN ($sqlPhotos)"; */



// Verificar si la consulta SQL fue exitosa
/* if ($result->num_rows > 0) {
  // Imprimir los resultados
  while($row = $result->fetch_assoc()) {
    echo "Modelo: " . $row["model"]. "<br>";
    echo "Kilometraje: " . $row["km"]. "<br>";
    echo "Año: " . $row["year"]. "<br>";
    echo "Marca: " . $row["brand_name"]. "<br>";
    echo "Descripción de la marca: " . $row["brand_description"]. "<br>";
    echo "ID del empleado: " . $row["employe_id"]. "<br>";
    echo "photo" . $row["photo"];
  }
} else {
  echo "0 resultados";
} */
  
  // Cerrar la conexión
//   $conn->close();

// // Cierra la conexión
//  $conn->close();

// $brand = $_POST['brand'];
// $model = $_POST['model'];
// $km = $_POST['km'];
// $price = $_POST['price'];
// $photo = $_POST['photo'];
// $description = $_POST['description'];
?>
>>>>>>> 0067bb7665e7a2c0cceb2ec1cb277255a6fd7ac9
