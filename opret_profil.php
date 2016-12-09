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
                <h1 class="header center">Opret bruger</h1>
                <div class="row">
                    <form action="#" class="col s12">
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="name" type="text" class="validate">
                                <label for="name">Navn</label>
                            </div>
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="gade" type="text" class="validate">
                                <label for="gade">Gade</label>
                            </div>
                            <div class="col s2"></div>
                        </div>
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
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
                            <div class="input-field col s3">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <form action="#">
                                    <div class="file-field input-field">
                                      <div class="btn">
                                        <span>Vælg</span>
                                        <input type="file">
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" placeholder="Profilbillede" type="text">
                                      </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col s2"></div>
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