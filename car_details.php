<?php
include_once('./Model/connection.php');
// Le modèle de connexion est importé avec la variable $conn nous pouvons consulter les contrôleurs
// C'est possible de faire la même chose dans d’autres « contrôleurs » pour inclure la connexion et l’utiliser où j'ai en besoin, ce qui m'évite de la taper à chaque fois


// SQL pour toutes les voitures avec leur marque, je peux ajouter des choses que je dois apporter de la base de données en respectant toujours les noms des colonnes
$sql = "SELECT  a.voiture_id, a.photo2, a.photo3, a.photoSrc, a.price, a.model, a.km, a.year, b.brand_name, b.brand_description, b.employe_id
    FROM allVoitures a
    INNER JOIN Brand b ON a.brand_id = b.brand_id";

// Exectuer la requete SQL avec la variable $conn de modele de connexion
$result = $conn->query($sql);

// Verifier si la connexion a reussi 
if ($result->num_rows > 0) {
  // Creation d'un array pour stocker les resultats
  $results_array = array();

  // Iterer dans les resultats et les ajouter dans l'array 
  while($row = $result->fetch_assoc()) {
    $results_array[] = $row;
  }

  // Convertir l'array en objet JSON
  $json_results = json_encode($results_array);

  // Impresion de resultats en format JSON
  header('Content-Type: application/json');
  echo $json_results;
} else {
  echo "0 resultados";
}

// Fermeture de connexion
$conn->close();