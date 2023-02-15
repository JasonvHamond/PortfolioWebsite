<!doctype html>
<!--
Auteur:       Jason van Hamond
Aanmaakdatum: 4-1-2021 12:21

Omschrijving: HTML bestand voor de CV pagina
-->

<html lang=nl>
    
    <head>
        <title>
           CV - Portfolio Jason van Hamond
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
        <link href="styles/cv.css" rel="stylesheet">
        <script src="scripts/script.js" defer></script>
    </head>
    
    <body>
    <?php
            $pageName = "CV";
            include "includes/header.php";
        ?>
        <main>
            <article>
                <h1>
                    Informatie pagina
                </h1>
                <p>
                    Op deze pagina is mijn CV te vinden. Er staat ook een link bij om hem te openen in google drive, waar u het ook kunt downloaden. Als het niet goed te lezen is op telefoon kunt u hem altijd het beste daarmee openen.
                </p>
            </article>
            <article>
                <h2>
                    CV
                </h2>
                <!-- afbeelding van mijn CV -->
                <img src="images/cv-JasonvHamond.png" alt="afbeelding CV">
                <a href="https://drive.google.com/file/d/1Vqo1uiz669VVYkUT3ssAHKM0nJifh4dA/view?usp=sharing" target="_blank">Download CV</a>
            </article>
        </main>
        <footer>
            <p>
                &copy; Jason van Hamond
            </p>
        </footer>
    </body>

</html>