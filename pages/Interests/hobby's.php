<!doctype html>
<!--
Auteur:       Jason van Hamond
Aanmaakdatum: 27-12-2020 9:59

Omschrijving: HTML bestand voor de pagina hobby's
-->

<html lang=nl>
    
    <head>
        <title>
           Hobby's - Portfolio Jason van Hamond
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/PortfolioWebsite/styles/style.css" rel="stylesheet">
        <link href="/PortfolioWebsite/styles/hobbyContact.css" rel="stylesheet">
        <script src="/PortfolioWebsite/scripts/hobby.js" defer></script>
        <script src="/PortfolioWebsite/scripts/script.js" defer></script>
    </head>
    
    <body>
    <?php
            $pageName = "Hobby's";
            include "../../includes/header.php";
        ?>
        <main>
            <?php
            include "../../includes/interestMenu.php";
            ?>
            <article>
                <h1>
                    Informatie pagina
                </h1>
                <p>
                    In deze pagina staan mijn hobby's en vaardigheden. Bij een paar hobby's heb ik er mijn favorieten van dat onderwerp erbij gezet. Hierboven staat een menu voor als er iets je intereseert.
                </p>
            </article>
            <article id="games">
                <h2>
                    Games
                </h2>
                <p>
                    In mijn vrije tijd speel ik meeste van de tijd games, ik game vooral op de Nintendo Switch, maar soms ook op de 3DS, GameCube, Playstation, etc. Vaak speel ik de games alleen, soms ook met andere mensen. Ik heb bijna alle Nintendo consoles sinds de Nintendo 64. Hier staat een lijst met games die ik het meest speel:
                </p>
                <ol>
                    <li>
                        Splatoon 3 (Switch)
                    </li>
                    <li>
                        Kirby's Dreamland 3 (SNES/Switch)
                    </li>
                    <li>
                        Kirby and the Forgotten Land (Switch)
                    </li>
                    <li>
                        Pokemon Black 2 (DS)
                    </li>
                </ol>
            </article>
            <article id="program">
                <h2>
                    Programmeren
                </h2>
                <p>
                    Als ik niks te doen heb ga ik vaak 'nutteloze' webistes maken omdat ik dat leuk vind en om idee&euml;n te krijgen voor websites voor projecten of opdrachten. Soms doe ik het ook om te testen of ik alles nog goed doe. Laatste website die ik heb gemaakt is een onzin website over de main character van de game Persona 4. Soms probeer ik ook mensen te helpen met programmeren als ze iets niet weten.
                </p>
            </article>
            <article id="movies">
                <h2>
                    Films
                </h2>
                <p>
                    Als ik iets wil doen zonder zelf echt iets te doen kijk ik vaak films. Ik kijk vaak films van Marvel of Star Wars, omdat ik dat vaak de beste vind. Ik kijk ook vaak oude films vanaf ongeveer 1970. Dat komt doordat mijn vader vaak goede films kent. De films waar ik het meest van houd zijn comedy films. Hier staan mijn favoriete films:
                </p>
                <ol>
                    <li>
                        Venom
                    </li>
                    <li>
                        Guardians o/t Galaxy 2
                    </li>
                    <li>
                        Spaceballs
                    </li>
                    <li>
                        Star Wars 3
                    </li>
                </ol>
            </article>
            <article id="planning">
                <h2>
                    Planning
                </h2>
                <p>
                    Dit is een vaardigheid van mij, persoonlijk denk ik dat ik best goed kan plannen. Een paar jaar geleden kon ik niet goed planningen maken, maar sinds dat iemand mij ermee heeft geholpen ben ik er nu best goed in. Ik merk nu met dit project dat ik de bepaalde opdrachten goed heb verdeeld sinds ik met de vorige pagina's op mijn gemak heb kunnen maken.
                </p>
            </article>
        </main>
        <footer>
            <p>
                &copy; Jason van Hamond
            </p>
        </footer>
    </body>

</html>