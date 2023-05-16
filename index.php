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
        <main class="nl" style="display:none;">
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
        <main class="en">
            <article id="welcome">
                <h2>
                    Welcome
                </h2>
                <p>
                    Welcome to my portfolio website. This website is meant for people who wish to learn more about me. On this website you can find your needed information about me, for example: Who am I?, my past experiences, my studies, hobbies, CV and how to get into contact with me. I am still working on this website while building my experience, so if there are any bugs or improvements, you can always let me know!
                </p>
            </article>
                <a href="/PortfolioWebsite/pages/Fun/Kirby.php">
                    <img src="images/jason.jpeg" alt="foto van mijzelf" id="jason">
                </a>
            <article id="aboutMe">
                <h2>
                    About me
                </h2>
                <p>
                   I am Jason van Hamond and I was born on December 13th 2003 in Sint-Michielsgestel (Netherlands). Currently I live in Vlijmen, located in North-Brabant. I am interested in mostly back-end development. I started with the study Software Developer, but wish to eventually program AI instead.
                </p>
                <p>
                    I prefer working alone, but working in a team is never a problem for me. I am especially good at planning my activities and can function the best when there is a good working-structure.
                </p>
                <p>
                    I always make sure my work is always done far before a deadline, if I ever have problems with finishing my work I will always let it know on time.
                </p>
            </article>
        </main>
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>