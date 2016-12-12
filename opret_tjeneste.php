<!DOCTYPE html>
<html lang="da">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>GoMove - din flytteportal</title>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <?php include 'nav.php'; ?>
        <div class="section" id="login">
            <div class="container">
                <h1 class="header center black-text">Opret tjeneste</h1>
                <h5 class="header center">Vælg ...</h5>
                <div class="row">
                    <form action="#" class="col s12">
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="gade" type="text" class="validate">
                                <label for="name">Gade</label>
                            </div>
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="nr" type="text" class="validate">
                                <label for="nr">Nr.</label>
                            </div>
                            <div class="col s2"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="input-field col s2">
                                <p>
                                    <input type="checkbox" id="bil"/>
                                    <label for="bil">Bil</label>
                                </p>
                            </div>
                            <div class="input-field col s2">
                                <p>
                                    <input type="checkbox" id="chauf"/>
                                    <label for="chauf">Chauffør</label>
                                </p>
                            </div>
                            <div class="input-field col s2">
                                <p>
                                    <input type="checkbox" id="muskler"/>
                                    <label for="muskler">Muskler</label>
                                </p>
                            </div>
                            <div class="input-field col s2">
                                <p>
                                    <input type="checkbox" id="trailer"/>
                                    <label for="trailer">Trailer</label>
                                </p>
                            </div>
                        </div>                 
                    </form>  
                </div>
                <div class="row center">
                    <a class="waves-effect waves-light btn" id="buttonLogon">Opret</a>
                    <a class="waves-effect waves-light btn" id="buttonFB">Facebook</a>
                    <a class="waves-effect waves-light btn" id="buttonG">Google+</a>   
                </div>  
            </div>
        </div> 
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>       
    </body>
</html>