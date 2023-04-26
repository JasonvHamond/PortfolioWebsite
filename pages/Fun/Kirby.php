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
        <link href="/PortfolioWebsite/styles/home.css" rel="stylesheet">
        <script src="/scripts/script.js" defer></script>
    </head>
    <body>
        <?php
            $pageName = "Kirby";
            include "../../includes/header.php";
        ?>
        <main>
        <canvas id="canvas"></canvas>
            <script>
                // The attributes of the player
                var player = {
                    x: 200,
                    y: 200,
                    x_v: 0,
                    y_v: 0,
                    jump : true,
                    height: 20,
                    width: 20,
                    };

                const img = new Image(); 
                img.addEventListener(
                    "load",
                    () => {
                        player.drawImage(img, j * 50, i * 38, 50, 38);
                    },
                    false
                    );
                img.src = "/PortfolioWebsite/images/DuinWater.jpg";
                // The status of the arrow keys    
                var keys = {
                    right: false,
                    left: false,
                    up: false,
                    };
                var friction = 0.7;
                // The number of platforms
                var num = 2;
                // The platforms
                var platforms = [];
                // Function to render the canvas
                function rendercanvas(){
                    ctx.fillStyle = "#F0F8FF";
                    ctx.fillRect(0, 0, 270, 270);
                }
                // Function to render the player
                function renderplayer(){
                    // Use this:
                    // img.onload = () => {
                    //     for (let i = 0; i < 4; i++) {
                    //     for (let j = 0; j < 3; j++) {
                    //         ctx.drawImage(img, j * 50, i * 38, 50, 38);
                    //     }
                    //     }
                    // };
                    // img.src = "rhino.jpg";
                    ctx.fillStyle = "#F08080";
                    ctx.fillRect((player.x)-20, (player.y)-20, player.width, player.height);
                    }
                // Function to create platforms
                function createplat(){
                    for(i = 0; i < num; i++) {
                        platforms.push(
                            {
                            x: 100 * i,
                            y: 200 + (30 * i),
                            width: 110,
                            height: 15
                            }
                        );
                    }
                    }
                // Function to render platforms
                function renderplat(){
                    ctx.fillStyle = "#45597E";
                    ctx.fillRect(platforms[0].x, platforms[0].y, platforms[0].width, platforms[0].height);
                    ctx.fillRect(platforms[1].x, platforms[1].y, platforms[1].width,platforms[1]. height);
                
                }
                // This function is called when one of the arrow keys is pressed
                function keydown(e) {
                    // 37 is the code for thr left arrow key
                    if(e.keyCode == 37) {
                        keys.left = true;
                    }
                    // 39 is the code for the right arrow key
                    if(e.keyCode == 39) {
                        keys.right = true;
                    }
                }
                // This function is called when the key is released
                function keyup(e) {
                    if(e.keyCode == 37) {
                        keys.left = false;
                    }
                    if(e.keyCode == 39) {
                        keys.right = false;
                    }
                } 
                function loop() {
                    // If the left key is pressed, move the player to the left
                    if(keys.left) {
                        player.x+= -2.5;
                    }
                    // If the right key is pressed, move the player to the right
                    if(keys.right) {
                        player.x  += 2.5;
                    }
                    // Rendering the canvas, the player and the platforms
                    rendercanvas();
                    renderplayer();
                    renderplat();
                }
                canvas=document.getElementById("canvas");
                ctx=canvas.getContext("2d");
                ctx.canvas.height = 270;
                ctx.canvas.width = 270;
                createplat();
                document.addEventListener("keydown",keydown);
                document.addEventListener("keyup",keyup);
                // Calling loop every 22 milliseconds to update the frame
                setInterval(loop,22);
            </script>
        </main>
        <?php
        include "../../includes/footer.php";
        ?>
    </body>
</html>