<!DOCTYPE html>
<html lang="da">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Starter Template - Materialize</title>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <?php include 'nav.php'; ?>
        <div class="section no-pad-bot" id="home">
            <div class="container">
                <h1 class="header center">GoMove</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Flyt dig Kaj - jeg vil gerne hjælpe</h5>
                </div>
                <div class="row center">
                    <img class="responsive-img" src="img/logo_cirkel.png" width="40%">
                </div>
                <div class="row center">
                    <a href="#" id="download-button" class="btn-large waves-effect waves-light orange">Jeg hjælper!</a>
                    <a href="#" id="download-button" class="btn-large waves-effect waves-light orange">Jeg flytter!</a>
                </div>
            </div>
        </div>
        <div class="section" id="info">
            <div class="container">
                <h1 class="header center orange-text"></h1>
          <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <img class="responsive-img" src="img/om-grafik-18.png">
                            <h5 class="center">Hvad</h5>
                            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <img class="responsive-img" src="img/om-grafik-19.png">
                            <h5 class="center">Hvorfor</h5>
                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <img class="responsive-img" src="img/om-grafik-20.png">
                            <h5 class="center">Hvordan</h5>
                            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="lokation">
            <div class="container">
                <h1 class="header center orange-text">Lokation</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Find flytninger og hjælp nær dig</h5>
                </div>
                <div class="row center">
                    <img class="responsive-img" src="img/map.png">
                </div>
            </div>
        </div>
  
        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">GoMove</h5>
                        <p class="grey-text text-lighten-4">
                        <ul>
                            <li><a class="white-text" href="#!">Nørgaardsvej 30</a></li>
                            <li><a class="white-text" href="#!">2800 Kgs. Lyngby</a></li>
                            <li><a class="white-text" href="#!">+45 44 68 10 00</a></li>
                            <li><a class="white-text" href="#!">kontakt@gomove.dk</a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text"></h5>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text"></h5>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center">
                    Skoleprojekt af <a class="orange-text text-lighten-3" href="http://materializecss.com">Caroline, Patricia & Patrick</a>
                </div>
            </div>
        </footer>
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>
