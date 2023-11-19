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

// el contenedor para las cards de los autos
const allVoitures_container = document.getElementById("allVoitures");
// variable donde se guardaran TODOS los autos
let voitures = [];

// fetch al controlador 'car_details.php' y recuperar los autos
fetch('car_details.php')
  .then(response => response.json())
  .then(data => {
    // guardamos el resultado (data) en la variable 'voitures'
    voitures = data;
    // llamamos a la funcion para que cree las cards de cada auto automaticamente
    makeVoitureCards(data);
    console.log(data)
  })
  .catch(error => {
    console.error('Error:', error);
  });


// funcion para guardar el auto cliqueado con el boton 'acheter' en el LocalStorage del navegador
function setSelectedCar(id) {
  const selectedCar = voitures.find((car) => car.voiture_id == id);
  localStorage.setItem('currentCar', JSON.stringify(selectedCar));
}

// Función para crear un elemento HTML con la información de un coche
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
  // Agregar evento click al enlace
  const link = article.querySelector(`#link_formulaire_voiture_${car.voiture_id}`);
  link.addEventListener('click', () => {
    const selectedCarId = link.getAttribute('data-voiture-id');
    setSelectedCar(selectedCarId);
  });

  return article;
}

// funcion encargada de generar las 'cards' para cada auto.
function makeVoitureCards(voitures) {
  voitures.forEach(voiture => {
    const carElement = createCarElement(voiture);
    allVoitures_container.appendChild(carElement);
  });
};

// filtrando los autos
const voitureBrand = document.getElementById('voiture_brand');
const voitureModel = document.getElementById('voiture_model');
const voitureKm = document.getElementById('voiture_km');
const voitureYear = document.getElementById('voiture_year');
const btnRechercherVoiture = document.getElementById('btn_voiture_rechercher');

function filterVoitures(cars) {
  // esto es para borrar las cards de los autos que se renderizaron al principio
  allVoitures_container.innerHTML = '';
  // Obtener los valores seleccionados de los select
  const selectedBrand = voitureBrand.value.toLowerCase();
  const selectedModel = voitureModel.value.toLowerCase();
  const selectedKm = voitureKm.value;
  const selectedYear = voitureYear.value;

  // Filtrar el array de coches
  const results = cars.filter(car => {
    // Convertir las propiedades del coche a minúsculas para hacer comparaciones insensibles a mayúsculas
    const carBrand = car.brand_name.toLowerCase();
    const carModel = car.model.toLowerCase();

    // Verificar cada condición de filtrado
    const brandCondition = !selectedBrand || carBrand === selectedBrand;
    const modelCondition = !selectedModel || carModel === selectedModel;
    const kmCondition = !selectedKm || parseInt(car.km) <= parseInt(selectedKm);
    const yearCondition = !selectedYear || car.year === selectedYear;

    // Devolver true si todas las condiciones se cumplen
    return brandCondition && modelCondition && kmCondition && yearCondition;
  });

  // Devolver los resultados filtrados
  return results;
}
// evento 'click' en el boton de filtrado
btnRechercherVoiture.addEventListener('click', () => {
  // guardamos los autos filtrados en la variable
  const filteredVoitures = filterVoitures(voitures);
  // llamamos a la funcion que crea las cards pero ahora con los autos filtrados
  makeVoitureCards(filteredVoitures)
});