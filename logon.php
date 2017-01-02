<?php 

session_start();
ob_start();

if( isset($_SESSION['user_id']) ){
    header("Location: logged_in.php");
}



if(!empty($_POST['email']) && !empty($_POST['password'])): // hvis email ikke er tom og password log ind

    require 'dbcon.php'; // forbindelse til database

    $records = $conn->prepare('SELECT user_id, email, password FROM user WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        
        $_SESSION['user_id'] = $results['id'];
        
        header('Location: logged_in.php'); 
        
    } else {
        
        $message = 'Sorry passer ikke';
    }

endif;
?>

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
                <h1 class="header center"><span style="color:#404040">Log ind</span></h1>
                <div class="row">
                    <form action="logon.php" method="post" class="col s12">
                        <div class="row">
                            <div class="col s4"></div>
                            <div class="input-field col s4">
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                            <div class="col s4"></div>
                            </div>
                            <div class="row">
                            <div class="col s4"></div>
                            <div class="input-field col s4">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                            <div class="col s4"></div> 
                        </div>
                        <div class="row center">
                            <div id="button">
                             <button class="btn waves-effect waves-light" type="submit" name="action">Log ind
                            </button>
                            <a class="waves-effect waves-light btn" style="background-color:#3b5998">Facebook</a> 
                            <a class="waves-effect waves-light btn" style="background-color:#d34836">Google+</a>
                          </div>
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
<?php ob_end_flush(); ?>