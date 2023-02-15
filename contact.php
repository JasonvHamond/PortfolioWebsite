<!doctype html>
<!--
Auteur:       Jason van Hamond
Aanmaakdatum: 1-1-2021 10:41

Omschrijving: HTML bestand pagina contact
-->

<html lang=nl>
    
    <head>
        <title>
           Contact - Portfolio Jason van Hamond
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
        <link href="styles/hobbyContact.css" rel="stylesheet">
        <script src="scripts/script.js" defer></script>
    </head>
    
    <body>
    <?php
            $pageName = "Contact";
            include "includes/header.php";
        ?>
        <main>
            <article>
                <h1>
                    Informatie pagina
                </h1>
                <p>
                    Op deze pagina staan mijn contact gegevens, als u contact met mij wilt krijgen dan kan dat met de volgende informatie
                </p>
            </article>
            <article id="contactInfo">
                <h2>
                    Contact informatie
                </h2>
                <h3>
                    Naam
                </h3>
                <ul>
                    <li>
                        Jason van Hamond
                    </li>
                </ul>
                <h3>
                    Adres
                </h3>
                <ul>
                    <li>
                        <span>Postcode</span>: <br>
                        5251 PW
                    </li>
                    <li>
                        <span>Huisnummer</span>: <br>
                        Konijnenbergstraat 41
                    </li>
                    <li>
                        <span>Woonplaats</span>: <br>
                        Vlijmen
                    </li>
                </ul>
                <h3>
                    Mail
                </h3>
                <ul>
                    <li class="email">
                        <span>Mail</span>: <br>
                        <a href="mailto:jasonvanhamond@gmail.com">jasonvanhamond@gmail.com</a>
                    </li>
                    <li class="email">
                        <span>School-mail</span>: <br>
                        <a href="mailto:jason.vanhamond@edu-kw1c.nl">jason.vanhamond@edu-kw1c.nl</a>
                    </li>
                </ul>
                <h3>
                    Telefoonnummer
                </h3>
                <ul>
                    <li>
                        <span>Telefoon</span>: <br>
                        <a href="tel:0641931969">06 41931969</a>
                    </li>
                </ul>
                <h3>
                    Social Media
                </h3>
                <ul>
                    <li>
                        <span>Twitter</span>: <br>
                        <br>
                        <a href="https://twitter.com/JasHam16" target="_blank">@JasHam16</a>
                    </li>
                </ul>
            </article>
        </main>
        <footer>
            <p>
                &copy; Jason van Hamond
            </p>
        </footer>
    </body>

</html>