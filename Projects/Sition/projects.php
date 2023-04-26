<!DOCTYPE html>

<html lang=nl>
    <head>
        <title>
            Projecten Sition - Portfolio Jason van Hamond
         </title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="/PortfolioWebsite/styles/style.css" rel="stylesheet">
         <link href="/PortfolioWebsite/styles/hobbyContact.css" rel="stylesheet">
         <script src="/PortfolioWebsite/scripts/script.js" defer></script>
    </head>
    <body>
        <?php
        $pageName = "Projecten Sition";
        include "../../includes/header.php"; 
        ?>
        <main>
            <article>
                <h2>
                    Informatie pagina
                </h2>
                <p>
                    Welkom op de pagina over mijn projecten bij het bedrijf Sition. Op deze pagina krijg je informatie te zien over mijn gemaakte projecten en ervaring binnen deze projecten.
                </p>
            </article>
            <article>
                <h3>
                    Developer Training Shopware
                </h3>
                <p>
                    Het eerste project waar ik aan heb gewerkt in het bedrijf is om de training van Shopware te volgen. Deze training heeft een weekje geduurt. Dit was best lang voor een training, maar dat komt doordat de officiele training is verouderd en daardoor kreeg ik veel problemen in mijn geschreven code. Naast de veroudering van de training had ik ook nog het probleem dat ik via een Windows computer heb gewerkt, terwijl alles het best via Linux werkt. Om deze reden hebben wij de tweede dag Linux geinstalleerd op een tweede computer.
                    <br>
                    De eerste training was het leren kennen van de storefront editor en daarna een eigen plugin te maken waar je in de footer een lijst met (willekeurig gegenereerde) bedrijven. Voor de generering van data heb ik gewerkt met een extensie van Shopware waarmee willekeurige data wordt aangemaakt. 
                </p>
                <img src="/PortfolioWebsite/images/ShopwareDevTraining.jpg" alt="Shopware Developer Training Results" width="100%">
                <img src="/PortfolioWebsite/images/ShopwareDevTraining2.jpg" alt="Shopware Developer Training Results" width="100%">
            </article>
            <article>
                <h3>
                    Eigen Training Shopware CMS Block Plugin
                </h3>
                <p>
                    Na het volgen van een tutorial over de Shopware plugins, had ik besloten mijn kennis te testen door een eigen plugin te maken. 
                    <br>
                    Om het een challenge te maken had ik besloten een videobanner CMS Block te maken, dit lijkt heel simpel, maar met de Shopware plugins is het iets meer geavanceerd dan het lijkt. In deze plugin kan de gebruiker een Youtube video ID opgeven om een video te laden bovenaan een pagina.
                </p>
                <video controls muted width="100%">
                    <source src="/PortfolioWebsite/images/EigenTraining-Shopware-Plugin.mp4" type="video/mp4">
                    Je browser kan geen video's weergeven
                </video>
                <p>
                    Zoals je hier kan zien, wordt er een youtube video afgespeeld in de banner.
                </p>
            </article>
            <article>
                <h3>
                    Eigen Training Shopware CMS Element Plugin
                </h3>
                <p>
                    Rond de tijd dat ik de CMS Block Plugin af had, kreeg ik te horen dat ik verwezen zou zijn aan een team en dus aan projecten voor klanten kan werken. Sinds nog niet alles hiervoor perfect klaar stond, kon ik nog proberen een CMS Element te maken.
                    <br>
                    <br>
                    Een CMS Element is vergelijkbaar aan een CMS Block, maar wat meer uitgebreid en lastiger te maken. In een CMS block kan de developer wat configuration velden opgeven, zodat de gebruiker meer keuze heeft voor instellingen aan alle elementen. 
                    <br>
                    <br>
                    Het element dat ik heb gemaakt is ongeveer hetzelfde als het block dat ik heb gemaakt, het verschil is dat je bij het element een eigen titel aan kan geven om dit te weergeven in de banner. Dit zorgt voor een effect van een pagina titel met een bewegende achtergrond.
                </p>
                <video controls muted width="100%">
                    <source src="/PortfolioWebsite/images/EigenTraining-Shopware-Config.mp4" type="video/mp4">
                    Je browser kan geen video's weergeven
                </video>
                <p>
                    Ik had later nog het idee gekregen om ook een optie te geven om de titel ook nog te kunnen positioneren, alleen was dit iets te geavanceerd om te maken dan verwacht.
                </p>
            </article>
            <article>
                <h3>
                    Lookbook Plugin
                </h3>
                <p>
                    Mijn eerste echte plugin dat ik heb gemaakt is de Lookbook Plugin, aan deze plugin heb ik een groot deel van mijn stage gewerkt.
                    <br><br>
                    In de Lookbook plugin kan je producten samen groeperen en samen weergeven op een pagina, zodat klanten de zogenaamde "looks" kunnen bekijken en bestellen.
                </p>

                <h4>
                    Lookbook Listing
                </h4>
                <p>
                    De Lookbook Listing page is een overzicht van alle Looks per categorie, in deze pagina kan je alle Looks wat bij geselecteerde categorie behoren bekijken, inclusief een bijbehoorende afbeelding, titel en omschrijving. Je kan deze blokken ook instellen om geen Titel en Omschrijving weer te geven.
                </p>
                <img src="/PortfolioWebsite/images/LookbookListing.png" alt="Lookbook Listing" width=" 100%">

                <h4>
                    Lookbook Slider
                </h4>
                <p>
                    De Lookbook Slider is een element wat je in een pagina kan slepen. Dit element geeft alle Looks weer wat in de categoriepagina zijn geselecteerd.
                </p>
                <img src="/PortfolioWebsite/images/LookbookSlider.png" alt="Lookbook Slider" width="100%">

                <h4>
                    Lookbook Detail
                </h4>
                <p>
                    De Lookbook Detail pages geven de afbeeldingen en producten weer wat in de geselecteerde lookbook opgeslagen staan. De detail page wordt normaal gesproken opgezet in de volgende elementen: 
                    <ul>
                        <li>
                            Lookbok Detail Block:
                            <ul>
                                <li>
                                    Lookbook Media Element
                                </li>
                                <li>
                                    Lookbook Products Element
                                </li>
                            </ul>
                        </li>
                    </ul>
                </p>
                <p>
                    Er zijn ook een aantal instellingen beschikbaar voor de Lookbook Detail Page:
                </p>

                <h5>
                    Vertical Product-Layout
                </h5>
                <h6>
                    Standard Variant-Layout
                </h6>
                <img src="/PortfolioWebsite/images/LookbookDetailVertStand.png" alt="Lookbook Detail Vertical Standard" width="100%">

                <h6>
                    Pop-up Variant-Layout
                </h6>
                <img src="/PortfolioWebsite/images/LookbookDetailVertPop1.png" alt="Lookbook Detail Vertical Pop-up closed" width="100%">
                <img src="/PortfolioWebsite/images/LookbookDetailVertPop2.png" alt="Lookbook Detail Vertical Pop-up Open" width="100%">

                <h5>
                    Horizontal Product-Layout
                </h5>
                <h6>
                    Standard Variant-Layout
                </h6>
                <img src="/PortfolioWebsite/images/LookbookDetailHorStand.png" alt="Lookbook Detail Horizontal Standard" width="100%">
                
                <h6>
                    Pop-up Variant-Layout
                </h6>
                <img src="/PortfolioWebsite/images/LookbookDetailHorPop1.png" alt="Lookbook Detail Horizontal Pop-up Closed" width="100%">
                <img src="/PortfolioWebsite/images/LookbookDetailHorPop2.png" alt="Lookbook Detail Horizontal Pop-up Open" width="100%">
            </article>
        </main>
        <?php
        include "../../includes/footer.php";
        ?>
    </body>
</html>