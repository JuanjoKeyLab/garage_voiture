
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/scss/main.css">
    <link rel="stylesheet" href="assets/css/stylev.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <title>voitures</title>
</head>
<body>
  
<?php
require_once 'car_detail.php'; // Incluye las constantes de conexión

// Crea una conexión
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}


echo "Conexión exitosa";

// Envía una consulta
$sql = "SELECT * FROM vehiculos WHERE brand='Toyota' AND km<100000 AND year>2010";
$result = $conn->query($sql);

// Imprime los resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Brand: " . $row["brand"] . " - Model: " . $row["model"] . " - Kilometers: " . $row["km"] . " - Year of circulation: " . $row["year"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cierra la conexión
$conn->close();

$brand = $_POST['brand'];
$model = $_POST['model'];
$km = $_POST['km'];
$price = $_POST['price'];
$photo = $_POST['photo'];
$description = $_POST['description'];
?>



  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-warning bg-warning">
      <div class="container">
<!-- logo entreprise             -->
        <a class="navbar-brand justify-content-left" href= "index.html">
            <img src="img/logo.png" alt="logo" class="img-fluid" width="100px" height="45px">
        </a>
<!-- BUTTON EXPAND -->
        <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link accueil" aria-current="page" href="index.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link accueil active" aria-current="page" href="voiture.html">Voitures </a>
            </li>
            <li class="nav-item dropdown"> 
              <a class="nav-link dropdown-toggle accueil" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nos services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="controle-technique.html">Contrôle technique</a></li>
                <li><a class="dropdown-item" href="carroserie.html">Carroserie</a></li>
                <li><a class="dropdown-item" href="revision.html">Entretien et révision</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="tous-services.html">Tous services</a></li>
              </ul>
            </li>
              <li class="nav-item accueil">
                <a class="nav-link" aria-current="page" href="nous.html">Qui sommes nous</a>
              </li>
          </ul> 
          <div class="d-inline-block"
            data-bs-toggle="tooltip" title="Contactez-nous"
            data-bs-placement="bottom">
            <button class="btn btn-outline-primary"
                    data-bs-toggle="modal" 
                    data-bs-target= "#modalPanier">                      
                    <i class="bi bi-person-lines-fill"></i>                  
            </button>
          </div>
          <div class="d-inline-block"
             data-bs-toggle="tooltip" title="Connexion"
             data-bs-placement="bottom">
            <button class="btn btn-outline-primary"
                    data-bs-toggle="modal" 
                    data-bs-target="#modalConnexion"> 
                    <i class="bi bi-file-earmark-person"></i>
            </button>
          </div>
        </div>
        </div>
        </div>
      </div>
    </nav>
</header>
                                                    <!-- MAIN  -->
  
        <section>
          <div class="container-fluid">
            <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="brand_id" class ="" name="Marque" style="width: 200px">
                      <option value="">Marque</option>
                    <option value="Citroen">Citroen</option>
                    <option value="Renault">Renault</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Fiat">Fiat</option>
            </select>
          </div>
          <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
            <select id="model" class ="" name="model" style="width: 200px">
                  <option value="">Modéle</option>
                <option value="Clio 1">Clio 1</option>
                <option value="Clio 2">Clio 2</option>
                <option value="Megane">Megane</option>
                <option value="4">4</option>
                <option value="logan"></option>
        </select>
      </div>


            <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="km" class ="" name="km" style="width: 200px">
                    <option value="">Kilométrage</option>
                    <option value="de 0 à 25000">0-25000km</option>
                    <option value="de 25000 à 50000">25000-50000km</option>
                </select>
            </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                  <select id="year" class ="" name="year" style="width: 200px">
                      <option value="">Année</option>
                      <option value="2022">2022</option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>
                      <option value="2019">2019</option>
                      <option value="2018">2018</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                  </select>
                </div>
      
              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1"> 
                  <button id="rechercher" onclick="performSearch()" class="btn btn-danger">Rechercher</button>    
            </div>    
        </div>
        <div class="row">
          <div class="list-articles mt-2 text-center col-12 col-lg-12">
              <div class="row" id="allVoitures">  
                  <article class="col-12 col-md-6 col-xl-4 p-2">
                      <div class="card text-center bg-warning">
                          <div class="card-body">
                          <h5 class="card-title">Renault</h5>
                          <p class="card-text">Acheter des voitures classiques en parfait état</p>
                          <article class="card listing-card " itemscope="" itemtype="http://">
                              <meta itemprop="itemCondition" content="http:/">
                              <meta itemprop="name" content="Renault Clio">
                              <meta itemprop="description" content="Renault Clio RT occasion (1997) color rouge prix $2500">
                              <a itemprop="url" href="" title="Renault Clio RT occasion (1997) color rouge prix $2500">
                                  <figure class="listing-card__image">
                                      <img src="img/renault/Clio/renault_clio_rt.jpg">
                                  </figure>
                                  <div class="row">
                                      <div class="listing-card__content">
                                          <div class="listing-card__car">
                                              <span class="listing-card__brand" itemprop="brand">Renault</span>
                                              <div class="listing-card__name" itemprop="model">
                                                  <span class="listing-card__model">Clio</span> <span class="listing-card__version">RT</span>
                                              </div>
                                          </div>
                                              <div class="listing-card__info m-ellipsis">
                                                  <span itemprop="modelDate" class="listing-card__year">1997</span> | <span itemprop="mileageFromOdometer" class="listing-card__km" content="KMT 215000">215000 km</span>
                                              </div>
                                          <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                              <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                              
                                              </div>
                                                  <span class="listing-card__price ">
                                                      <meta itemprop="priceCurrency" content="EU">
                                                      <span class="listing-card__price-value" itemprop="price" content="2500">$2500</span>
                                                  </span>
                                          </div>
                                      </div>
                                  </div>    
                              </a>
                          </article>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        <div class="card-footer text-body-secondary">
                          2 days ago
                        </div>
                      </div>
                  </article>
   
                <article class="col-12 col-md-6 col-xl-4 p-2">
                    <div class="card text-center bg-warning">
                        <div class="card-body">
                        <h5 class="card-title">Toyota</h5>
                        <p class="card-text">Acheter des voitures classiques en parfait état</p>
                        <article class="card listing-card " itemscope="" itemtype="http://">
                            <meta itemprop="itemCondition" content="http:/">
                            <meta itemprop="name" content="Toyota Land Cruiser">
                            <meta itemprop="description" content="Toyota Land Cruiser Prado occasion (2006) color blanche prix $4700">
                            <a itemprop="url" href="" title="Toyota Land Cruiser Prado occasion (2006) color blanche prix $4700">
                                <figure class="listing-card__image">
                                    <img src="img/Toyota/prado/toyota_prado_derecha.jpg">
                                </figure>
                                <div class="row">
                                    <div class="listing-card__content">
                                        <div class="listing-card__car">
                                            <span class="listing-card__brand" itemprop="brand">Toyota</span>
                                            <div class="listing-card__name" itemprop="model">
                                                <span class="listing-card__model">Land Cruiser</span> <span class="listing-card__version">Prado</span>
                                            </div>
                                        </div>
                                            <div class="listing-card__info m-ellipsis">
                                                <span itemprop="modelDate" class="listing-card__year">2006</span> | <span itemprop="mileageFromOdometer" class="listing-card__km" content="KMT 215000">195305 km</span>
                                            </div>
                                        <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                            <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                            
                                            </div>
                                                <span class="listing-card__price ">
                                                    <meta itemprop="priceCurrency" content="EU">
                                                    <span class="listing-card__price-value" itemprop="price" content="47000">$4700</span>
                                                </span>
                                        </div>
                                    </div>
                                </div>    
                            </a>
                        </article>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      <div class="card-footer text-body-secondary">
                        34 days ago
                      </div>
                    </div>
                </article>

              <article class="col-12 col-md-6 col-xl-4 p-2 index d-md-none d-xl-block">
                <div class="card text-center bg-warning">
                    <div class="card-body" id="read-car">
                    <h5 class="card-title">Toyota</h5>
                    <p class="card-text">Acheter des voitures classiques en parfait état</p>
                    <article class="card listing-card " itemscope="" itemtype="">
                        <meta itemprop="itemCondition" content="http:/">
                        <meta itemprop="name" content="Toyota Land Cruiser">
                        <meta itemprop="description" content="Toyota Land Cruiser Prado occasion (2006) color blanche prix $4700">
                        <a href="car_details.php?id=34" title="Toyota Land Cruiser Prado occasion (2006) color blanche prix $4700">
                            <figure class="">
                                <img src="img/Toyota/prado/toyota_prado_derecha.jpg">
                            </figure>
                            <div class="row">
                                <div class="listing-card__content">
                                    <div class="listing-card__car">
                                        <span class="listing-card__brand" itemprop="brand">Toyota</span>
                                        <div class="listing-card__name" itemprop="model">
                                            <span class="listing-card__model">Land Cruiser</span> <span class="listing-card__version">Prado</span>
                                        </div>
                                    </div>
                                        <div class="listing-card__info m-ellipsis">
                                            <span itemprop="year" class="listing-card__year">2006</span> | 
                                            <span itemprop="km" class="listing-card__km" content="KMT 195305">195305 km</span>
                                        </div>
                                    <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                        <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                        
                                        </div>
                                            <span class="listing-card__price ">
                                                <meta itemprop="price" content="EU">
                                                <span class="listing-card__price-value" itemprop="price" content="47000">$4700</span>
                                            </span>
                                    </div>
                                </div>
                            </div>    
                        </a>
                    </article>
                        <a href="#" class="btn btn-primary">Plus d'information</a>
                    </div>
                  <div class="card-footer text-body-secondary">
                    <p class="card-text"><small id="card-date" class="text-muted"></small></p>
                  </div>
                </div>
              </article>   
              
              <article class="col-12 col-md-6 col-xl-4 p-2 index d-md-none d-xl-block">
                <div class="card text-center bg-warning">
                    <div class="card-body" id="read-car">
                    <h5 class="card-title">Toyota</h5>
                    <p class="card-text">Acheter des voitures classiques en parfait état</p>
                    <article class="card listing-card " itemscope="" itemtype="">
                        <meta itemprop="itemCondition" content="http:/">
                        <meta itemprop="name" content="Toyota Land Cruiser">
                        <meta itemprop="description" content="Toyota Land Cruiser Prado occasion (2006) color blanche prix $4700">
                        <a href="car_details.php?id=34" title="Toyota Land Cruiser Prado occasion (2006) color blanche prix $4700">
                            <figure class="">
                                <img src="img/Toyota/prado/toyota_prado_derecha.jpg">
                            </figure>
                            <div class="row">
                                <div class="listing-card__content">
                                    <div class="listing-card__car">
                                        <span class="listing-card__brand" itemprop="brand">Toyota</span>
                                        <div class="listing-card__name" itemprop="model">
                                            <span class="listing-card__model">Land Cruiser</span> <span class="listing-card__version">Prado</span>
                                        </div>
                                    </div>
                                        <div class="listing-card__info m-ellipsis">
                                            <span itemprop="year" class="listing-card__year">2006</span> | 
                                            <span itemprop="km" class="listing-card__km" content="KMT 195305">195305 km</span>
                                        </div>
                                    <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                        <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                        
                                        </div>
                                            <span class="listing-card__price ">
                                                <meta itemprop="price" content="EU">
                                                <span class="listing-card__price-value" itemprop="price" content="47000">$4700</span>
                                            </span>
                                    </div>
                                </div>
                            </div>    
                        </a>
                    </article>
                        <a href="#" class="btn btn-primary">Plus d'information</a>
                    </div>
                  <div class="card-footer text-body-secondary">
                    <p class="card-text"><small id="card-date" class="text-muted"></small></p>
                  </div>
                </div>
              </article>  

              <article class="col-12 col-md-6 col-xl-4 p-2 index d-md-none d-xl-block">
                <div class="card text-center bg-warning">
                    <div class="card-body" id="read-car">
                    <h5 class="card-title">Toyota</h5>
                    <p class="card-text">Acheter des voitures classiques en parfait état</p>
                    <article class="card listing-card " itemscope="" itemtype="">
                        <meta itemprop="itemCondition" content="http:/">
                        <meta itemprop="name" content="Toyota Land Cruiser">
                        <meta itemprop="description" content="Toyota Land Cruiser Prado occasion (2006) color blanche prix $4700">
                        <a href="car_details.php?id=34" title="Toyota Land Cruiser Prado occasion (2006) color blanche prix $4700">
                            <figure class="">
                                <img src="img/Toyota/prado/toyota_prado_derecha.jpg">
                            </figure>
                            <div class="row">
                                <div class="listing-card__content">
                                    <div class="listing-card__car">
                                        <span class="listing-card__brand" itemprop="brand">Toyota</span>
                                        <div class="listing-card__name" itemprop="model">
                                            <span class="listing-card__model">Land Cruiser</span> 
                                            <span class="listing-card__version">Prado</span>
                                        </div>
                                    </div>
                                        <div class="listing-card__info m-ellipsis">
                                            <span itemprop="year" class="listing-card__year">2006</span> | 
                                            <span itemprop="km" class="listing-card__km" content="KMT 195305">195305 km</span>
                                        </div>
                                    <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                        <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                        
                                        </div>
                                            <span class="listing-card__price ">
                                                <meta itemprop="price" content="EU">
                                                <span class="listing-card__price-value" itemprop="price" content="47000">$4700</span>
                                            </span>
                                    </div>
                                </div>
                            </div>    
                        </a>
                    </article>
                        <a href="#" class="btn btn-primary">Plus d'information</a>
                    </div>
                  <div class="card-footer text-body-secondary">
                    <p class="card-text"><small id="card-date" class="text-muted"></small></p>
                  </div>
                </div>
              </article>  

<div class="row">
              <h1>Registro de Coche</h1>
    <form action="car_details.php" method="post">
        <div>
            <label for="brand">Marca:</label>
            <input type="text" id="brand" name="brand" required>
        </div>
        <div>
            <label for="model">Modelo:</label>
            <input type="text" id="model" name="model" required>
        </div>
        <div>
            <label for="km">Kilómetros:</label>
            <input type="number" id="km" name="km" required>
        </div>
        <div>
            <label for="photo_id">ID de Foto:</label>
            <input type="text" id="photo_id" name="photo_id" required>
        </div>
        <div>
            <label for="price">Precio:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <button type="submit" name="submit" value="submit">submit</button>
    </form>

    </div>

              </div>
            </div>
        </div>
  

        <!-- <div id="voitures">
          <div id="read-car" class="container fluid rounded">
              <a class="" href="car_details.php?id=34">
                <div>
                  <img id="img-car" class="" src="//*sdqsdqsdqsdq*/" alt="photo voiture">
                </div>
                <div class="">
                  <p class="text-center">
                    nom auto
                  </p>
                  <p>
                    Km: 12000 km                  
                  </p>
                  <p>

                  </p>
                  <p>
                    <b>2900 £</b>
                  </p>
                </div>
              </a>
          </div> 

          <div id="read-car" class="container fluid rounded">
            <a class="" href="car_details".php?id=34>
              <div>
                <img id="img-car" class="" src="//*sdqsdqsdqsdq*/" alt="photo voiture">
              </div>
              <div class="">
                <p class="text-center">
                  nom auto 2
                </p>
                <p>
                  Km: 12000 km                  
                </p>
                <p>

                </p>
                <p>
                  <b>2900 £</b>
                </p>
              </div>
            </a>
        </div>  -->

      
                <!-- PAGINATION  -->

        <nav aria-label="Page navigation example">
          <ul class="pagination d-flex justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link text-warning" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-warning" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-warning" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- <div class="container-fluid mx-0 px-0">
          <ul class="paginationCustom px-0 mt-3">
            <li class="page-item" id="1">
              <span class="page-link">⟨⟨             
              </span>
            </li>        
            <li class="page-item" id="1 ">
              <span class="page-link">⟨                
              </span>
            </li>
          <li class="page-item " id="1">
            <span class="page-link">1              
            </span>
          </li>
          <li class="page-item active" id="2">
            <span class="page-link">2             
            </span>
          </li>
        </ul>
      </div> -->

    



        <!-- SLIDERS FOR CART -->;
        <!-- <div class="filtre-titre display-closed js-icone_plus opened">
          <span class="title">Prix
              <span class="count"> (1)
              </span>
          </span>
        <div class="icone-plus closed">
            <div class="position-horizontal">              
            </div>
            <div class="position-vertical">                
            </div>
        </div>        
    </div>
    <div class="filtre-block">
      <div class="slider-block slider-amount">
          <span class="slider-value slider-millier">
              <span class="slider-value-max-units">+
                <span class="slider-value-max">15 500                    
                </span> €
              </span>
              <span class="slider-value-min-units">
                <span class="slider-value-min">3 000
                </span> €
              </span>
          </span>  
        <div class="slider slider-horizontal" id="slider-input-amount">
            <div class="slider-track">
              <div class="slider-track-low" style="left: 0px; width: 3%;">               
              </div>
              <div class="slider-selection" style="left: 3%; width: 12.5%;">               
              </div>
              <div class="slider-track-high" style="right: 0px; width: 84.5%;">                
              </div>
            </div>
            <div class="tooltip tooltip-main top hide" role="presentation" style="left: 9.25%;">
              <div class="tooltip-arrow">      
              </div>
              <div class="tooltip-inner">3000 : 15500               
              </div>
            </div>
            <div class="tooltip tooltip-min top hide" role="presentation" style="left: 3%;">
              <div class="tooltip-arrow">               
              </div>
              <div class="tooltip-inner">3000               
              </div>
            </div>
            <div class="tooltip tooltip-max top hide" role="presentation" style="left: 15.5%;">
              <div class="tooltip-arrow">           
              </div>
              <div class="tooltip-inner">15500            
              </div>
            </div>
            <div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="100000" style="left: 3%;" aria-valuenow="3000" tabindex="0" id="amount-min">              
            </div>
            <div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="100000" style="left: 15.5%;" aria-valuenow="15500" tabindex="0" id="amount-max">              
            </div>
        </div>
          <input type="text" name="amount" id="amount" value="3000,15500" class="slider-input" data-slider-id="slider-input-amount" data-slider-min="0" data-slider-max="100000" data-slider-step="500" data-slider-value="[0,100000]" data-slider-orientation="horizontal" data-slider-tooltip="hide" style="display: none;" data-value="3000,15500" data-actif="true">            
      </div>
    </div> -->
  
  </section>


  <div class="row">
    <div class="container footer bg-warning">
      <div class="row cols-3 justify-content-center">
        <div class="col-6 col-md-3">
          <div class="row">
            <div class="d-flex justify-content-center my-3 ml-4">
              <label for="">
                Trouvez nous
                <br>
                <i class="bi bi-geo-alt-fill"></i>
                <strong>
                  1 rue de l'Aqueduc
                <br>
                31500 TOULOUSE
                </strong>
              </label>
            </div>
          </div>
        </div>
        
        <div class="col-6 col-md-3">
          <!-------- chargement des horaires du footer ------->
          <div id="footerSchedules">
            <div id="Schedules">
              <div class="d-flex justify-content-center text-center my-3">
                <p class="horairesFooter">
                    <strong>NOS HORAIRES </strong>
                    <br>
                    <i class="bi bi-calendar2-check"></i>
                    Lundi au vendredi:
                    9h-12h / 14h-18h <br>
                    le samedi de
                    9h-12h
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- TELEPHONE -->

        <div class="col-6 col-md-3">
          <div class="d-flex justify-content-center my-3">
              <label>Contactez-nous <br>
                <i class="bi bi-telephone-fill"></i>
                <strong>01.23.45.67.89</strong>
                </label>
          </div>
          <div class="row">
            <div class="d-flex justify-content-center">
              <a href="www.facebook.com">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="">
                <i class=""></i>
                <i class="bi bi-dash"></i>
              </a>
              <a href="www.instagram.com">
                <i class="bi bi-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      

      </div>
    </div>
    <div class="text-center text-warning font-14px bg-dark">
      <p class="p-footer">
          © VINCENT PARROT AUTOMOBILES 2023. Tous droits réservés. -           
          -
          <a class="no-underline text-grey" href="mentions-legales.html">Mentions légales</a>
          -
          <a class="no-underline text-grey" href="politique.html">Politique de
              confidentialité</a>
          -
          <a class="no-underline text-grey" href="consommateur.html">Informations consommateurs</a>
      </p>
      </div>

</div>

          <!-- fin footer -->
      
  <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> -->
  <script type ="module" src="assets/js/script.js"></script>

</body>

</html> 