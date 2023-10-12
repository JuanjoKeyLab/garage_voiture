import "../../node_modules/bootstrap/js/dist/model.js";
import "../../node_modules/bootstrap/js/dist/util.js";

const listCategories = document.querySelector(".list-categories");
const listArticles = document.querySelector("#allArticles");

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))