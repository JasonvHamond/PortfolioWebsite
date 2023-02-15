<!doctype html>
<!--
Auteur:       Jason van Hamond
Aanmaakdatum: 21-12-2020 10:24

Omschrijving: HTML bestand voor de pagina Opleidingen
-->

<html lang="nl">
    
    <head>
        <title>
           Opleidingen - Portfolio Jason van Hamond
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/PortfolioWebsite/styles/style.css" rel="stylesheet">
        <link href="/PortfolioWebsite/styles/opleidingenwerk.css" rel="stylesheet">
        <script src="/PortfolioWebsite/scripts/script.js" defer></script>
        <script src="/PortfolioWebsite/scripts/opleidingen.js" defer></script>
    </head>
    
    <body>
        <?php
            $pageName = "Opleidingen";
            include "../../includes/header.php";
        ?>
        <main>
            <?php
            include "../../includes/knowledgeMenu.php";
            ?>
            <article>
                <h2>
                    Informatie pagina
                </h2>
                <p>
                    Op deze pagina geef ik mijn opleidingen aan die ik heb afgerond na de basisschool. Daarbij staan ook mijn ervaringen vermeldt met de gegevens van de school.
                </p>
            </article>
            <article>
                <h2>
                    VMBO-t
                </h2>
                <p>
                    d'Oultremontcollege
                </p>
                <ul>
                    <li>
                        Adres: Dillenburgstraat 46, 5151 GL Drunen
                    </li>
                    <li>
                        Telefoon: <a style="display:inline-block;" href="tel:0416374448">0416 374 448</a>
                    </li>
                    <li>
                        Mail: <a style="display:inline-block;" href="mailto:info@doultremontcollege.nl">info@doultremontcollege.nl</a>
                    </li>
                </ul>
                <h3>
                    Mijn ervaring
                </h3>
                <p>
                    Dit was een goede school en de docenten waren aardig, dus ik kon daar vaak goed mee opschieten. Er waren soms ook wat minder goede docenten die niet goed les konden geven en docenten die niet aardig waren. Op deze school had ik soms ook wel gehoord dat sommige docenten oneerlijk tegen mensen deden of mensen raar behandelden. Enige keer dat ik moest nablijven was dat ik per ongeluk iemand ergens mee raakte tijdens de les.
                </p>
            </article>
            <img src="/PortfolioWebsite/images/dOultremontcollege_gebouw.jpg" alt="gebouw d'Oultremontcollege" class="building">
            <a href="https://doultremontcollege.nl/contact/" target="_blank" class="web">Website</a>
            <article>
                <h2>
                    Software Developer
                </h2>
                <p>
                    Koning Willem 1 College
                </p>
                <ul>
                    <li>
                        Adres: Onderwijsboulevard 3, 5223 DE Den Bosch
                    </li>
                    <li>
                        Telefoon: <a style="display:inline-block;" href="tel:0736249444">073 624 9 444</a>
                    </li>
                    <li>
                        Mail: <a style="display:inline-block;" href="mailto:info@kw1c.nl">info@kw1c.nl</a>
                    </li>
                </ul>
                <h3>
                    Mijn ervaring
                </h3>
                <p>
                    Dit is de school waar ik nu op les krijg. Ik vind dit een fijne school en ik heb er veel plezier op. De klas is nu ook niet meer meerdere verschillende vriendengroepen maar 1 grote, wat ik best fijn vind.
                </p>
                <h2>
                    Examen resultaten KW1C
                </h2>
                <p>
                    Hier staan mijn examenresultaten van deze opleiding.
                </p>
                <table>
                <thead>
                    <tr>
                        <td colspan=2>
                            Examen resultaten
                        </td>
                    </tr>
                </thead>
                <!-- hier komen de dingen voor het tabel in -->
                <tbody id="grades">
                    
                </tbody>
                <tfoot id="average">
                    
                </tfoot>
            </table>
            </article>
            <img src="/PortfolioWebsite/images/KW1Cingang.jpg" alt="gebouw KW1C" class="building">
            <a href="https://www.kw1c.nl/" target="_blank" class="web">Website</a>
            <article>
                <h2>
                    Wat nu?
                </h2>
                <p>
                    Nadat ik eindelijk klaar ben met mijn Software Developer opleiding, ben ik van plan om de opleiding Data Science & AI te volgen bij Breda University of Applied Sciences. Momenteel ben ik bezig met de toelatingsopdracht en na het afronden van deze taak heb ik nog een toelatingsgesprek.
                </p>
            </article>
        </main>
        <?php
        include "../../includes/footer.php";
        ?>
    </body>

</html>