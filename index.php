<!doctype html>
<!--
Auteur:       Jason van Hamond
Aanmaakdatum: 14-12-2020 11:36

Omschrijving: de startpagina van de portfolio website van Jason van Hamond
-->

<html lang=nl>
    
    <head>
        <title>
           Startpagina - Portfolio Jason van Hamond
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
        <link href="styles/home.css" rel="stylesheet">
        <script src="scripts/script.js" defer></script>
    </head>
    <body>
        <?php
            $pageName = "Home";
            include "includes/header.php";
        ?>
        <main>
            <article id="welcome">
                <h2>
                    Welkom
                </h2>
                <p>
                    Welkom op mijn portfolio website. Deze website is bedoeld om mensen meer over mij weten te laten komen. Op deze
                    website kan je veel informatie over mij vinden, zoals: wie ik ben, mijn opleidingen, mijn werkervaring, mijn
                    hobby's, mijn CV en hoe je met mij in contact kan komen. Er wordt tijdens mijn ontwikkeling nog aan deze website gewerkt, als er gevonden bugs of punten voor verbetering zijn, kan je contact opnemen met mij.
                </p>
            </article>
                <a href="/PortfolioWebsite/pages/Fun/Kirby.php">
                    <img src="images/jason.jpeg" alt="foto van mijzelf" id="jason">
                </a>
            <article id="aboutMe">
                <h2>
                    Over Mij
                </h2>
                <p>
                   Ik ben Jason van Hamond en ik ben geboren op 13 december 2003 in Sint-Michielsgestel en ik woon nu in Vlijmen, Noord-Brabant. Mijn interesse ligt vooral bij back-end development. Ik ben begonnen met de opleiding Software Developer, maar wil uiteindelijk AI programmeren.
                </p>
                <p>
                    Het liefst werk ik alleen, maar om samen te werken is ook geen groot probleem. Ik ben goed in het plannen van mijn activiteiten en kan het best functioneren bij een goede werkstructuur.
                </p>
                <p>
                    Bij mijn werk zorg ik altijd dat ik voor een deadline klaar ben, als ik hier problemen bij heb zorg ik altijd dat het optijd wordt aangegeven.
                </p>
            </article>
        </main>
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>