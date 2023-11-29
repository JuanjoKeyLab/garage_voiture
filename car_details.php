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