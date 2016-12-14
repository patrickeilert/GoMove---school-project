<!DOCTYPE html>
<html lang="da">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <meta name="description" content="Er dine venner også træt af at bære kasser ned for 4. sal, mangler du penge til weekendens bytur - Hos GoMove hjælper vi hinanden nemt og billigt">
        <meta name="keywords" content="move, nemt, billigt, hjælp">
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
                <h1 class="header center">Log ind</h1>
                <div class="row">
                    <form action="#" class="col s12">
                        <div class="row">
                            <div class="col s4"></div>
                            <div class="input-field col s4">
                                <input id="name" type="text" class="validate">
                                <label for="name">Navn</label>
                            </div>
                            <div class="col s4"></div>
                            </div>
                            <div class="row">
                            <div class="col s4"></div>
                            <div class="input-field col s4">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                            <div class="col s4"></div> 
                        </div>
                        <div class="row center">
                            <a class="waves-effect waves-light btn" id="buttonLogon">Log ind</a>
                            <a class="waves-effect waves-light btn" id="buttonFB">Facebook</a>
                            <a class="waves-effect waves-light btn" id="buttonG">Google+</a>   
                        </div>     
                    </form>
                </div>
            </div>
        </div> 
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>       
    </body>
</html>