import '../../node_modules/bootstrap/js/dist/modal.js';
// import '../../node_modules/bootstrap/js/dist/util.js';

$.fn.tooltip.Constructor.VERSION // => "4.0.0"S

const listCategories = document.querySelector(".list-categories");
const listArticles = document.querySelector("#allArticles");

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
