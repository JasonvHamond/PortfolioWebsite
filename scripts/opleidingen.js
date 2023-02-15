/*
Auteur:       Jason van Hamond
Aanmaakdatum: 21-12-2020 10:50

Omschrijving: JavaScript voor de pagina opleidingen
*/

// Variabelen aanmaken voor het tabel
var modules = ["Plant werkzaamheden", "Ontwerpt software", "Realiseert software", "Test software", "Verbetervoorstellen", "Werkt in een team", "Engelse taal", "GEO-informatie", "Programmeren games", "Engels B2"];

var grades = [7.8, 8.0, 9.5, 9.0, 10.0, 7.0, 10.0, 9.0, 8.0, 8.0];
// variabel voor de counter aanmaken.
var i = 0;
var sum = 0;

// Andere variabelen invoeren
while(i <= modules.length -1)
{
    document.getElementById("grades").innerHTML += "<tr><td>" + modules[i] + "</td><td>" + grades[i] + "</td></tr>";
    sum += grades[i];
    i++;
}

function average(amount) 
{
    var result = sum / amount;
    return Math.round(result * 10) / 10;
}

// Variabelen voor het gemiddelde invoeren
document.getElementById("average").innerHTML += "<tr><td>" + "Gemiddelde" + "</td><td>" + average(grades.length) + "</td></tr>";