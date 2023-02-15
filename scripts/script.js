/*
Auteur:       Jason van Hamond
Aanmaakdatum: 15-12-2020 11:20

Omschrijving: JavaScript voor de portfolio website van Jason van Hamond
*/

// Variabelen aanmaken
var menu = ["Home", "Opleidingen", "Werkervaring", "Hobby's", "CV", "Contact"];

// Menu items in de html zetten. ik heb het zo gedaan omdat het allemaal in een aparte a element komt, dit vind ik fijner te gebruiken.
document.getElementById("home").innerHTML = menu[0];
document.getElementById("studies").innerHTML = menu[1];
document.getElementById("jobs").innerHTML = menu[2];
document.getElementById("hobby").innerHTML = menu[3];
document.getElementById("cv").innerHTML = menu[4];
document.getElementById("contact").innerHTML = menu[5];

// Sticky navigatie.
window.onscroll = function() {makeSticky()};

var navbar = document.getElementById("nav");
var sticky = navbar.offsetTop;

function makeSticky() 
{
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } 
    else {
        navbar.classList.remove("sticky");
    }
}