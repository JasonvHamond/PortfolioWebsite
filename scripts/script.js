/*
Auteur:       Jason van Hamond
Aanmaakdatum: 15-12-2020 11:20

Omschrijving: JavaScript voor de portfolio website van Jason van Hamond
*/

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