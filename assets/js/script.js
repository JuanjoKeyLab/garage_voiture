// import '../../node_modules/bootstrap/js/dist/modal.js';
// import '../../node_modules/bootstrap/js/dist/util.js';

//$.fn.tooltip.Constructor.VERSION // => "4.0.0"S
//
//const listCategories = document.querySelector(".list-categories");
//const listArticles = document.querySelector("#allArticles");
//
//const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
//const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))



const allVoitures = document.getElementById("allVoitures");


fetch('car_details.php')
  .then(response => response.json())
  .then(data => makeVoitureCards(data))
  .catch(error => {
    console.error('Error:', error);
  });

  // Función para crear un elemento HTML con la información de un coche
function createCard(car) {
    const article = document.createElement('article');
    article.className = 'col-12 col-md-6 col-xl-4 p-2';
  
    article.innerHTML = `
      <div class="card text-center bg-warning">
        <div class="card-body">
          <h5 class="card-title">${car.brand_name}</h5>
          <p class="card-text">Acheter des voitures classiques en parfait état</p>
          <article class="card listing-card" itemscope="" itemtype="http://">
            <!-- Metadatos -->
            <a itemprop="url" href="" title="${car.brand} ${car.model} occasion (${car.year}) color blanche prix $${car.price}">
              <figure class="listing-card__image">
                <img src="${car.photoSrc}">
              </figure>
              <div class="row">
                <div class="listing-card__content">
                  <div class="listing-card__car">
                    <span class="listing-card__brand" itemprop="brand">${car.brand_name}</span>
                    <div class="listing-card__name" itemprop="model">
                      <span class="listing-card_model">${car.model}</span> <span class="listing-card_version">${car.model}</span>
                    </div>
                  </div>
                  <div class="listing-card__info m-ellipsis">
                    <span itemprop="modelDate" class="listing-card_year">${car.year}</span> | <span itemprop="mileageFromOdometer" class="listing-card_km" content="KMT ${car.km}">${car.km} km</span>
                  </div>
                  <div class="listing-card__offer" itemprop="offers" itemscope="" itemtype="http://">
                    <div class="listing-card__location m-ellipsis" itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                    </div>
                    <span class="listing-card__price ">
                      <meta itemprop="priceCurrency" content="EU">
                      <span class="listing-card__price-value" itemprop="price" content="${car.price}">$${car.price}</span>
                    </span>
                  </div>
                </div>
              </div>    
            </a>
          </article>
          <a href="formulaire_voiture.html" class="btn btn-primary">Acheter</a>
        </div>
        <div class="card-footer text-body-secondary"></div>
      </div>
    `;
  
    return article;
}

  // Crear y agregar elementos al contenedor

  const filtroBrand = getElementById(brand_id);


function makeVoitureCards(voitures) {
    console.log(voitures)
    voitures.forEach(voiture => {
            if (voiture.brand_name == filtroBrand.value) {
            const carElement = createCard(voiture);
            allVoitures.appendChild(carElement);
            
        }
        });   
};




{/* <article class="col-12 col-md-6 col-xl-4 p-2">
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
</article> */}