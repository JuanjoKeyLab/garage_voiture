// recuperamos el auto seleccionado en voitures.html desde el LocalStorage
const voiture = JSON.parse(localStorage.getItem('currentCar'));
console.log(voiture)

// seleccionamos las imagenes del carousel por su id
const imgVoiture1 = document.getElementById('img_voiture_1');
const imgVoiture2 = document.getElementById('img_voiture_2');
const imgVoiture3 = document.getElementById('img_voiture_3');

//le damos el src a las imagenes con el valor traido desde la base de datos
imgVoiture1.setAttribute('src', voiture.photoSrc);
imgVoiture2.setAttribute('src', voiture.photo2);
imgVoiture3.setAttribute('src', voiture.photo3);

// seleccionamos el input 'sujet' por su id (de la misma manera podes llamar a los otros inputs si lo necesitas)
const sujet = document.getElementById('sujet');
// le damos el valor al input con los datos del auto seleccionado (podes modificar o agregar mas cosas)
sujet.setAttribute('value', `Brand: ${voiture.brand_name} / Model: ${voiture.model} / Year:${voiture.year} / Km: ${voiture.km}`);