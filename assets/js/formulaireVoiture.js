//Récuperer le voiture filtré dans voitures.html dans LocalStorage
const voiture = JSON.parse(localStorage.getItem('currentCar'));
console.log(voiture)

// Selection des images de carousel à partir de son ID
const imgVoiture1 = document.getElementById('img_voiture_1');
const imgVoiture2 = document.getElementById('img_voiture_2');
const imgVoiture3 = document.getElementById('img_voiture_3');

// on fait le SRC à les images avec le valeur ramené de la base de données
imgVoiture1.setAttribute('src', voiture.photoSrc);
imgVoiture2.setAttribute('src', voiture.photo2);
imgVoiture3.setAttribute('src', voiture.photo3);

// On select le input 'sujet' pour son ID. ( il est possible d'appeler les autres inputs) 
const sujet = document.getElementById('sujet');

// On le donne le valeur à INPUT avec les valeurs d'un voiture selectioné (il est possible d'ajouter plus)
sujet.setAttribute('value', `Brand: ${voiture.brand_name} / Model: ${voiture.model} / Year:${voiture.year} / Km: ${voiture.km}`);
console.log(localStorage);