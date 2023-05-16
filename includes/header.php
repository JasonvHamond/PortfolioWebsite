        <script>
            function changeLang(lang) {
                const langLabel = document.getElementById("lang-label");
                
                const nl = document.querySelectorAll(".nl");
                const en = document.querySelectorAll(".en");
                const nlFlex = document.querySelectorAll(".nl-fl");
                const enFlex = document.querySelectorAll(".en-fl");
                if (lang.checked == true) {
                    langLabel.innerHTML = "NL";

                    nl.forEach( el => {
                        el.style.display = "block";
                    });

                    en.forEach( el => {
                        el.style.display = "none";
                    });

                    nlFlex.forEach( el => {
                        el.style.display = "flex";
                    });

                    enFlex.forEach( el => {
                        el.style.display = "none";
                    });
                }
                else {
                    langLabel.innerHTML = "EN";
                    nl.forEach( el => {
                        el.style.display = "none";
                    });

                    en.forEach( el => {
                        el.style.display = "block";
                    });

                    nlFlex.forEach( el => {
                        el.style.display = "none";
                    });

                    enFlex.forEach( el => {
                        el.style.display = "flex";
                    });
                }
            }
        </script>
        <header>
            <h1 id="pageName">
                <?php
                    echo $pageName;
                ?>
            </h1>
            <form class="languageSwitch" href="#">
                <input type="checkbox" id="lang-switch" name="lang-switch" onclick="changeLang(this)">
                <label id="lang-label" for="lang-switch">EN</label>
            </form>
        </header>
        <nav id="nav">
            <ul id="navItem">
                <li>
                    <a href="/PortfolioWebsite/index.php" id="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/PortfolioWebsite/knowledge.php" id="studies">
                        Knowledge
                    </a>
                </li>
                <li>                        
                    <a href="/PortfolioWebsite/interests.php" id="hobby">
                        Interests
                    </a>
                </li>
                <li>
                    <a href="/PortfolioWebsite/cv.php" id="cv">
                        CV
                    </a>
                </li>
                <li>
                    <a href="/PortfolioWebsite/contact.php" id="contact">
                        Contact
                    </a>
                </li>
                <!-- dropdown menu -->
                <li id="hidden">
                    <a href="#" id="dropdown">
                        Menu
                    </a>
                    <ul>
                        <li>
                            <a href="/PortfolioWebsite/index.php" class="hide">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/PortfolioWebsite/knowledge.php" class="hide">
                                Knowledge
                            </a>
                        </li>
                        <li>
                            <a href="/PortfolioWebsite/interests.php" class="hide">
                                Interests
                            </a>
                        </li>
                        <li>
                            <a href="/PortfolioWebsite/cv.php" class="hide">
                                CV
                            </a>
                        </li>
                        <li>
                            <a href="/PortfolioWebsite/contact.php" class="hide">
                                Contact
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>    
        </nav>