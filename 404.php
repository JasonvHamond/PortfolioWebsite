<!doctype html>
<!--
Auteur:       Jason van Hamond
Aanmaakdatum: 17-4-2023 17:43

Omschrijving: 404 page
-->

<html lang=nl>
    <head>
        <title>
           Page not found - Portfolio Jason van Hamond
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/PortfolioWebsite/styles/style.css" rel="stylesheet">
        <script src="/PortfolioWebsite/scripts/script.js" defer></script>
    </head>
    <body>
        <?php
            $pageName = "Your page is in another castle";
            include $_SERVER['DOCUMENT_ROOT'] . "/PortfolioWebsite/includes/header.php";
        ?>
        <main>
            <div style="display:flex;justify-content:center;flex-direction:column;align-items:center">
                <h2>
                    404. Page not found
                </h2>
                <img src="/PortfolioWebsite/images/kirby-sleeping.gif" alt="Sleeping Kirby" style="border-radius:10px;width:20%;">
            </div>
        </main>
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/PortfolioWebsite/includes/footer.php";
        ?>
    </body>
</html>