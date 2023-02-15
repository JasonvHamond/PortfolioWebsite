<?php
/**
 * Naam: Jason van Hamond
 * Datum: 15-2-2023
 * Project: Kennis pagina
 */
?>
<!DOCTYPE html>
 <html lang="nl">
    
    <head>
        <title>
           Kennis - Portfolio Jason van Hamond
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/PortfolioWebsite/styles/style.css" rel="stylesheet">
        <link href="/PortfolioWebsite/styles/hobbyContact.css" rel="stylesheet">
        <script src="/PortfolioWebsite/scripts/script.js" defer></script>
        <script src="/PortfolioWebsite/scripts/opleidingen.js" defer></script>
    </head>
    <body>
        <style>
            main ul 
            {
                margin-left: 20px;
            }
        </style>
        <?php
        $pageName = "Kennis";
        include "../../includes/header.php";
        ?>
        <main>
            <?php
            include "../../includes/knowledgeMenu.php";
            ?>

            <article>
                <h2>
                    Talen
                </h2>
                <p>
                    Ik heb vaak moeite gehad om talen te leren, zo heb ik ooit Duits geleerd en dat ben ik alweer compleet vergeten. Er zijn twee talen dat ik vloeiend kan spreken:
                </p>
                <ol>
                    <li>
                        Nederlands
                    </li>
                    <li>
                        Engels
                    </li>
                </ol>
                <p>
                    Naast deze talen ben ik momenteel bezig Spaans te leren.
                </p>
            </article>
            <article>
                <h2>
                    Programmeertalen
                </h2>
                <p>
                    Programmeertalen heb ik een stuk minder moeite mee. Ik kan in de volgende talen werken:
                </p>
                <ol>
                    <li>
                        HTML
                    </li>
                    <li>
                        CSS
                        <ul>
                            <li>
                                SCSS
                            </li>
                        </ul>
                    </li>
                    <li>
                        PHP
                        <ul>
                            <li>
                                Symfony
                            </li>
                        </ul>
                    </li>
                    <li>
                        C#
                    </li>
                    <li>
                        Javascript
                        <ul>
                            <li>
                                jQuery
                            </li>
                        </ul>
                    </li>
                    <li>
                        SQL
                    </li>
                </ol>
                <p>
                    Ik ben bezig met de volgende talen/frameworks/developtechnieken:
                </p>
                <ol>
                    <li>
                        Shopware
                    </li>
                    <li>
                        Python
                    </li>
                    <li>
                        XAML
                    </li>
                </ol>
            </article>
        </main>
        <?php
        include "../../includes/footer.php";
        ?>
    </body>