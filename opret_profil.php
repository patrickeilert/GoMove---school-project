
<?php 

session_start();

if( isset($_SESSION['user_id'])){
    header("location: index.php");
}

require 'dbcon.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):

// Enter the new user in the database

    $sql = "INSERT INTO user (name, email, password, street, house_number, zipcode_zipcode) VALUES (:name, :email, :password, :street, :house_number, :zipcode_zipcode)";
        $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
    $stmt->bindParam(':email', $_POST['email']);
    
    $stmt->bindParam(':street', $_POST['street']);
    $stmt->bindParam(':house_number', $_POST['house_number']);
    $stmt->bindParam(':zipcode_zipcode', $_POST['zipcode']);
    

    if($stmt->execute() ):
        //die('Succes');
        $message = 'Successfully created new user';
    else:
        //die('Fail');
        $message = 'Sorry, there must have been an issue creating your account';
    endif;

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
        <?php include 'nav.php';?>
    
        <?php
            if(!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
              
        <div class="section" id="login">
            <div class="container">
                <h1>Opret bruger</h1>
                <div class="row">
                    <form action="opret_profil.php" method="POST" class="col s12">
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="username" type="text" name="name" class="validate">
                                <label for="username">Navn</label>
                            </div>
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="gade" type="text" name="street" class="validate">
                                <label for="gade">Gade</label>
                            </div>
                            <div class="col s2"></div>
                        </div>
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="nr" type="text" name="house_number" class="validate">
                                <label for="nr">Nr.</label>
                            </div>
                            <div class="col s2"></div>
                        </div>
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="postnr" type="text" name="zipcode" class="validate">
                                <label for="postnr">Postnummer</label>
                            </div>
                            <div class="col s2"></div>
                        </div>
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="input-field col s3">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Bekræft password</label>
                            </div>
                            <div class="col s2"></div>
                            <div class="col s3">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Vælg</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" placeholder="Profilbillede" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s2"></div>
                            <div class="col s3">   
                                <input type="submit" value="Opret">
                            </div>    
                        </div>        
                    </form>
                </div>
            </div>
        </div>
        <!-- 
                               
                            </div>
                            <div class="row center col s12">
                                <a class="waves-effect waves-light btn" id="buttonLogon" type="submit">Opret</a>
                                <a class="waves-effect waves-light btn" id="buttonFB">Facebook</a>
                                <a class="waves-effect waves-light btn" id="buttonG">Google+</a>   
                            </div>
                        </div>                 
                    </form>  
                </div>
                
            </div>
        </div> -->
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>       
    </body>
</html>