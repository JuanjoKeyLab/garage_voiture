// import '../../node_modules/bootstrap/js/dist/modal.js';
// import '../../node_modules/bootstrap/js/dist/util.js';

//$.fn.tooltip.Constructor.VERSION // => "4.0.0"S
//
//const listCategories = document.querySelector(".list-categories");
//const listArticles = document.querySelector("#allArticles");
//
//const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
//const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


const listCategories = document.querySelector(".list-categories");
const listArticles = document.querySelector("#allArticles");

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))



/* PAGINA VOITURE.HTML */


// Le conteneur pour display cards 
const allVoitures_container = document.getElementById("allVoitures");

// Variable pour stocker des voitures
let voitures = [];

// fetch vers 'car_details.php et recuperer des voitures
fetch('car_details.php')
  .then(response => response.json())
  .then(data => {

    // on sauvgarde (data) et la variable 'voitures'
    voitures = data;

   
    // on appelle la fonction pour la creation des cards avec les données de voiture souhaité
    makeVoitureCards(data);
    console.log(data)
  })
  .catch(error => {
    console.error('Error:', error);
  });


// Fonction pour sauvgarder le voiture en faisant clic au bouton 'acheter' dans le LocalStorage du navigateur  
function setSelectedCar(id) {
  const selectedCar = voitures.find((car) => car.voiture_id == id);
  localStorage.setItem('currentCar', JSON.stringify(selectedCar));
}


//fonction pour la création d'un élément HTML avec la information d'un voiture
function createCarElement(car) {
  const article = document.createElement('article');
  article.className = 'col-12 col-md-6 col-xl-4 p-2';
  article.innerHTML = `
      <div class="card text-center bg-warning">
        <div>
          <h5>${car.brand_name}</h5>
          <p>Acheter des voitures classiques en parfait état</p>
          <article class="" itemscope="" itemtype="">
            <!-- Metadatos -->
            <a itemprop="url" href="" title="${car.brand_name} ${car.model} occasion (${car.year}) color blanche prix $${car.price}">
              <figure>
                <img src="${car.photoSrc}">
              </figure>
              <div class="row">
                <div>
                  <div>
                    <span itemprop="brand">${car.brand}</span>
                    <div itemprop="model">
                      <span>${car.model}</span> <span>${car.model}</span>
                    </div>
                  </div>
                  <div>
                    <span itemprop="modelDate">${car.year}</span> | <span itemprop="mileageFromOdometer" content="KMT ${allVoitures.km}">${allVoitures.km} km</span>
                  </div>
                  <div itemprop="offers" itemscope="" itemtype="http://">
                    <div itemprop="availableAtOrFrom" itemscope="" itemtype="http://">
                    </div>
                    <span>
                      <meta itemprop="priceCurrency" content="FR">
                      <span itemprop="price" content="${car.price}">$${car.price}</span>
                    </span>
                  </div>
                </div>
              </div>    
            </a>
          </article>
          <a
          href="formulaire_voiture.html"
          class="btn btn-primary"
          id="link_formulaire_voiture_${car.voiture_id}"
          data-voiture-id="${car.voiture_id}"
          >Acheter</a>
        </div>
        <div class="card-footer text-body-secondary"></div>
      </div>
    `;
 
  // Ajouter event CLIC dans le link 
  const link = article.querySelector(`#link_formulaire_voiture_${car.voiture_id}`);
  link.addEventListener('click', () => {
    const selectedCarId = link.getAttribute('data-voiture-id');
    setSelectedCar(selectedCarId);
  });

  return article;
}


// Fonction en charge de génerer des 'cards' pour chaque voiture 
function makeVoitureCards(voitures) {
  voitures.forEach(voiture => {
    const carElement = createCarElement(voiture);
    allVoitures_container.appendChild(carElement);
  });
};

// filtrage les voitures
const voitureBrand = document.getElementById('voiture_brand');
const voitureModel = document.getElementById('voiture_model');
const voitureKm = document.getElementById('voiture_km');
const voitureYear = document.getElementById('voiture_year');
const btnRechercherVoiture = document.getElementById('btn_voiture_rechercher');

function filterVoitures(cars) {

  //delete des cards voitures  
  allVoitures_container.innerHTML = '';
  
  // Obtenir les valeurs selectionnées de les SELECT
  const selectedBrand = voitureBrand.value.toLowerCase();
  const selectedModel = voitureModel.value.toLowerCase();
  const selectedKm = voitureKm.value;
  const selectedYear = voitureYear.value;

  
  //Filtrage d'array de voiture
  const results = cars.filter(car => {
    //Pour la sensibilite aux mayuscules 
    const carBrand = car.brand_name.toLowerCase();
    const carModel = car.model.toLowerCase();

  
    // Vérification de chaque condition de filtrage
    const brandCondition = !selectedBrand || carBrand === selectedBrand;
    const modelCondition = !selectedModel || carModel === selectedModel;
    const kmCondition = !selectedKm || parseInt(car.km) <= parseInt(selectedKm);
    const yearCondition = !selectedYear || car.year === selectedYear;

    
    //TRUE si les conditions sont remppli
    return brandCondition && modelCondition && kmCondition && yearCondition;
  });

  // Retourner les résultats filtrés
  return results;
}

// event 'clic' bouton filtré
btnRechercherVoiture.addEventListener('click', () => {
  
// on sauvegarde l'information
  const filteredVoitures = filterVoitures(voitures);
  

// On appelle la fonction qu'a créé des cards avec les voitures filtrés 
  makeVoitureCards(filteredVoitures)
});