import '../../node_modules/bootstrap/js/dist/modal.js';
// import '../../node_modules/bootstrap/js/dist/util.js';

$.fn.tooltip.Constructor.VERSION // => "4.0.0"S

const listCategories = document.querySelector(".list-categories");
const listArticles = document.querySelector("#allArticles");

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


// Obtener la fecha actual
var today = new Date();

// Obtener la fecha de publicación
var publishedDate = new Date("2023-09-30");

// Calcular la diferencia en días
var diffInTime = today.getTime() - publishedDate.getTime();
var diffInDays = Math.floor(diffInTime / (1000 * 3600 * 24));

// Actualizar el contenido de la tarjeta
document.getElementById("card-date").innerHTML = diffInDays + " days ago";