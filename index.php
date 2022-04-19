<!DOCTYPE html>
<html lang="FR-fr" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/ScrollMagic.js"></script>
    <title>PortfolioBis</title>
</head>

<body>

    <div id="home">

        <div id="loading">

            <div class="chart">
                <div class="bar widthBar white">
                    <div class="face top">
                        <div class="growing-bar"></div>
                    </div>
                    <div class="face side-0">
                        <div class="growing-bar"></div>
                    </div>
                    <div class="face floor">
                        <div class="growing-bar"></div>
                    </div>
                    <div class="face side-a"></div>
                    <div class="face side-b"></div>
                    <div class="face side-1">
                        <div class="growing-bar"></div>
                    </div>
                </div>
            </div>
            <p>LOADING</p>

        </div>

        <section id="tablette">

            <img src="img/neige.jpg">

            <div id="inputNamePassword">

                <p>USERNAME</p>
                <div class="contentAnim">               <!--border (cadre pour la "saisie")-->
                    <p>Fabien DELORME</p>     <!--animation letter by letter-->
                </div>
                <p style="margin-top : 35px;">PASSWORD</p>
                <div class="contentAnim">               <!--border (cadre pour la "saisie")-->
                    <p style="visibility: hidden;">Développeur WEB</p>     <!--animation letter by letter-->
                </div>

            </div>

            <button id="buttonHomeNext" onclick="openMenuHome()">LOGIN</button>

            <section id="menuHome" style="transform:translateY(1000px);">

                <a href="#presentation">
                    <div class="divMenu">
                        <span>Présentation</span>
                        <p>Quelques mots pour me présenter</p>
                    </div>
                </a>
                <div class="divMenu">
                    <span>Compétences</span>
                    <p>Les compétences, c'est par ici !</p>
                </div>
                <div class="divMenu">
                    <span>Expériences</span>
                    <p>bjfpqjzfp</p>
                </div>
                <div class="divMenu">
                    <span>Projets</span>
                    <p>Les projets web, c'est ici !</p>
                </div>
                <div class="divMenu">
                    <span>Contact</span>
                    <p>Laissez moi un message</p>
                </div>

            </section>

        </section>
    </div>

    <div id="presentation">
        <div class="padding_bloc" id="trigger1">
            <div class="bloc_left" id="pin1">
                <h1>Bienvenue sur mon Portfolio</h1>
                <div>testttt</div>
            </div>
            <div class="bloc_right" id="block_right_comp">
<!--                <img src="img/neige.jpg">-->

                <div>

                </div>

            </div>
        </div>
    </div>

    <div id="competences">
        <div class="padding_bloc">
            <div class="bloc_left">
                <h1>Mes compétences</h1>
                <div>testttt</div>
            </div>
            <div class="bloc_right">
                <img src="img/pc.jpg">
            </div>
        </div>
    </div>


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jsfile3.js" type="text/javascript"></script>

</body>
</html>