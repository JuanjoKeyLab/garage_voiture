
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/scss/main.css">
    <link rel="stylesheet" href="assets/css/stylev.css">
    <link href="node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  
<!-- <?php
// require_once 'car_detail.php'; // Incluye las constantes de conexión

// Crea una conexión
// $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verifica la conexión
/* if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
} */


// echo "Conexión exitosa";

// Envía una consulta
// $sql = "SELECT * FROM allVoiture";
// $result = $conn->query($sql);

// // Imprime los resultados
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "Brand: " . $row["brand"] . " - Model: " . $row["model"] . " - Kilometers: " . $row["km"] . " - Year of circulation: " . $row["year"] . "<br>";
//     }
// } else {
//     echo "No se encontraron resultados.";
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
 -->


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
            <a class="nav-link accueil active" aria-current="page" href="voiture.php">Voitures </a>
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
</nav>
</header>
                                                    <!-- MAIN  -->
  
        <section>
        <div class="container-fluid">
          <div class="row flex-column align-items-center">
            <div class="col-12 col-md-2 my-1 d-flex justify-content-center">
                <select id="brand_id" class ="" name="Marque" style="width: 200px">
                      <option value="">Marque</option>
                    <option value="Citroen">Citroen</option>
                    <option value="Renault">Renault</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Fiat">Fiat</option>
            </select>
          </div>
          <div class="col-12 col-md-2 my-1 d-flex justify-content-center">
            <select id="model" class ="" name="model" style="width: 200px">
                  <option value="">Modéle</option>
                <option value="Clio 1">Clio 1</option>
                <option value="Clio 2">Clio 2</option>
                <option value="Megane">Megane</option>
                <option value="4">4</option>
                <option value="logan"></option>
        </select>
      </div>


            <div class="col-12 col-md-2 my-1 d-flex justify-content-center">
                <select id="km" class ="" name="km" style="width: 200px">
                    <option value="">Kilométrage</option>
                    <option value="de 0 à 25000">0-25000km</option>
                    <option value="de 25000 à 50000">25000-50000km</option>
                </select>
            </div>
                <div class="col-12 col-md-2 my-1 d-flex justify-content-center">
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
      
              <div class="col-12 col-md-2 d-flex my-1 justify-content-center"> 
                  <button id="rechercher" onclick="performSearch()" class="btn btn-danger">Rechercher</button>    
            </div>    
        </div>
      </div>
        <div class="row">
          <div class="list-articles mt-2 text-center col-12 col-lg-12">
              <div class="row" id="allVoitures">  
                  <!-- <article class="col-12 col-md-6 col-xl-4 p-2">
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
                              <a href="formulaire_voiture.html" class="btn btn-primary">Acheter</a>
                          </div>
                        <div class="card-footer text-body-secondary">
                      
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
                            <meta itemprop="name" content="Toyota rav4">
                            <meta itemprop="description" content="Toyota rav4 occasion (2011) color blanche prix $6700">
                            <a itemprop="url" href="" title="Toyota rav4 occasion (2011) color blanche prix $6700">
                                <figure class="listing-card__image">
                                    <img src="img/Toyota/rav4/toyota_rav4_derecha.jpg">
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
                                                <span itemprop="modelDate" class="listing-card__year">2011</span> | <span itemprop="mileageFromOdometer" class="listing-card__km" content="KMT 105011">105011 km</span>
                                            </div>
                                        <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                            <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                            
                                            </div>
                                                <span class="listing-card__price ">
                                                    <meta itemprop="priceCurrency" content="EU">
                                                    <span class="listing-card__price-value" itemprop="price" content="6700">$6700</span>
                                                </span>
                                        </div>
                                    </div>
                                </div>    
                            </a>
                        </article>
                            <a href="formulaire_voiture.html" class="btn btn-primary">Acheter</a>
                        </div>
                      <div class="card-footer text-body-secondary">
                        
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
                        <meta itemprop="name" content="Toyota Prado">
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
                        <a href="formulaire_voiture.html" class="btn btn-primary">Acheter</a>
                    </div>
                  <div class="card-footer text-body-secondary">
                    <p class="card-text"><small id="card-date" class="text-muted"></small></p>
                  </div>
                </div>
              </article>   
              
              <article class="col-12 col-md-6 col-xl-4 p-2 index d-md-none d-xl-block">
                <div class="card text-center bg-warning">
                    <div class="card-body" id="read-car">
                    <h5 class="card-title">Renault</h5>
                    <p class="card-text">Acheter des voitures classiques en parfait état</p>
                    <article class="card listing-card " itemscope="" itemtype="">
                        <meta itemprop="itemCondition" content="http:/">
                        <meta itemprop="name" content="Renault Megane">
                        <meta itemprop="description" content="Renault Megane occasion (2009) color noire prix $3400">
                        <a href="car_details.php?id=34" title="Renault Megane occasion (2009) color noire prix $3400">
                            <figure class="">
                                <img src="img/Renault/Megane/renault_megane_derecha.jpg">
                            </figure>
                            <div class="row">
                                <div class="listing-card__content">
                                    <div class="listing-card__car">
                                        <span class="listing-card__brand" itemprop="brand">Renault</span>
                                        <div class="listing-card__name" itemprop="model">
                                            <span class="listing-card__model">Megane</span> <span class="listing-card__version">Megane</span>
                                        </div>
                                    </div>
                                        <div class="listing-card__info m-ellipsis">
                                            <span itemprop="year" class="listing-card__year">2009</span> | 
                                            <span itemprop="km" class="listing-card__km" content="KMT 165303">165303 km</span>
                                        </div>
                                    <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                        <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                        
                                        </div>
                                            <span class="listing-card__price ">
                                                <meta itemprop="price" content="EU">
                                                <span class="listing-card__price-value" itemprop="price" content="3700">$3700</span>
                                            </span>
                                    </div>
                                </div>
                            </div>    
                        </a>
                    </article>
                        <a href="formulaire_voiture.html" class="btn btn-primary">Acheter</a>
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
                        <meta itemprop="name" content="Toyota Hilux">
                        <meta itemprop="description" content="Toyota hilux occasion (2015) color blanche prix $10700">
                        <a href="car_details.php?id=34" title="Toyota hilux occasion (2015) color blanche prix $10700">
                            <figure class="">
                                <img src="img/Toyota/hilux/toyota_hilux_derecha.jpg">
                            </figure>
                            <div class="row">
                                <div class="listing-card__content">
                                    <div class="listing-card__car">
                                        <span class="listing-card__brand" itemprop="brand">Toyota</span>
                                        <div class="listing-card__name" itemprop="model">
                                            <span class="listing-card__model">Hilux</span> 
                                            <span class="listing-card__version">Hilux</span>
                                        </div>
                                    </div>
                                        <div class="listing-card__info m-ellipsis">
                                            <span itemprop="year" class="listing-card__year">2015</span> | 
                                            <span itemprop="km" class="listing-card__km" content="KMT 102302">102302 km</span>
                                        </div>
                                    <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                        <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                        
                                        </div>
                                            <span class="listing-card__price ">
                                                <meta itemprop="price" content="EU">
                                                <span class="listing-card__price-value" itemprop="price" content="10700">$10700</span>
                                            </span>
                                    </div>
                                </div>
                            </div>    
                        </a>
                    </article>
                        <a href="formulaire_voiture.html" class="btn btn-primary">Acheter</a>
                    </div>
                  <div class="card-footer text-body-secondary">
                    <p class="card-text"><small id="card-date" class="text-muted"></small></p>
                  </div>
                </div>
              </article>  

              <article class="col-12 col-md-6 col-xl-4 p-2 index d-md-none d-xl-block">
                <div class="card text-center bg-warning">
                    <div class="card-body" id="read-car">
                    <h5 class="card-title">Renault</h5>
                    <p class="card-text">Acheter des voitures classiques en parfait état</p>
                    <article class="card listing-card " itemscope="" itemtype="">
                        <meta itemprop="itemCondition" content="http:/">
                        <meta itemprop="name" content="Toyota corolla">
                        <meta itemprop="description" content="Toyota Corolla occasion (2014) color blanche prix $8700">
                        <a href="car_details.php?id=34" title="Toyota Corolla occasion (2014) color blanche prix $8700">
                            <figure class="">
                                <img src="img/Toyota/corolla/toyota_corolla_derecha.jpg">
                            </figure>
                            <div class="row">
                                <div class="listing-card__content">
                                    <div class="listing-card__car">
                                        <span class="listing-card__brand" itemprop="brand">Toyota</span>
                                        <div class="listing-card__name" itemprop="model">
                                            <span class="listing-card__model">Corolla</span> <span class="listing-card__version">Corolla</span>
                                        </div>
                                    </div>
                                        <div class="listing-card__info m-ellipsis">
                                            <span itemprop="year" class="listing-card__year">2014</span> | 
                                            <span itemprop="km" class="listing-card__km" content="KMT 95303">95303 km</span>
                                        </div>
                                    <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                                        <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                                        
                                        </div>
                                            <span class="listing-card__price ">
                                                <meta itemprop="price" content="EU">
                                                <span class="listing-card__price-value" itemprop="price" content="8700">$8700</span>
                                            </span>
                                    </div>
                                </div>
                            </div>    
                        </a>
                    </article>
                        <a href="formulaire_voiture.html" class="btn btn-primary">Acheter</a>
                    </div>
                  <div class="card-footer text-body-secondary">
                    <p class="card-text"><small id="card-date" class="text-muted"></small></p>
                  </div>
                </div>
              </article>   -->

              </div>
            </div>
        </div>
  
      
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
       <!-- Modal panier -->
       <div class="modal fade" id="modalPanier" tabindex="-1" aria-labelledby="modalPanierLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalPanierLabel">Contactez-nous</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="col-12 col-md-8 col-xl-6 m-auto">    
                <form class="text-grey fs-6" id="contactForm" action="leaveMessage.php" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6">
                                    <label>Nom *</label>
                                    <input value="" data-msg-required="Votre nom" maxlength="100" class="form-control" name="nom" id="nom" required="required" aria-required="true" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label>Prénom *</label>
                                    <input value="" data-msg-required="Votre prénom" maxlength="100" class="form-control" name="prenom" id="prenom" required="required" aria-required="true" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Email *</label>
                                <input value="" data-msg-required="Votre email" data-msg-email="Adresse email non valide" maxlength="100" class="form-control" name="email" id="email" required="required" aria-required="true" type="email">
                            </div>
                            <div class="col-md-12">
                                <label>Téléphone *</label>
                                <input value="" data-msg-required="Votre telephone" maxlength="100" class="form-control" name="telephone" id="telephone" required="required" aria-required="true" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Sujet</label>
                                <input value="" data-msg-required="Sujet" maxlength="100" class="form-control" name="sujet" id="sujet" required="required" aria-required="true" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required="required" aria-required="true"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row margin_bottom_20">
                        <div class="col-md-12">
                            <input value="1" name="rgpd" type="checkbox" required="required">
                            <span class="small">En soumettant ce formulaire, j'accepte que les
                                informations saisies soient exploitées dans le cadre
                                de la relation commerciale qui peut en découler.
                                <a href="politique.html" target="_blank">En savoir
                                    plus</a></span>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-12">
                            <input value="Envoyer" name="envoimsg" class="btn btn-form btn-lg mb-xlg" data-loading-text="Loading..." type="submit">
                        </div>
                    </div>
                </form>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Retour</button>
              <button type="button" class="btn btn-primary">Valider le panier</button>
            </div>
          </div>
        </div>
      </div>

<!-- Modal Connexion-->      

<div class="modal fade" id="modalConnexion" tabindex="-1" aria-labelledby="modalConnexionLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="modalConnexionLabel">Me connecter</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input type="password" class="form-control" id="password">
</div>
<div>
<button class="btn btn-outline-success"> Connexion </button>
</div>

</div>
</div>
</div>
</div>


  <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> -->
  <script type="module" src="assets/js/script.js"></script>

</body>

</html> 