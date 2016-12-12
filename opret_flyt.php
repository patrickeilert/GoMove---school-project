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
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script> 
        <script>
            $(document).ready(function() {
            $('select').material_select();
            });
            
        </script>  
    </head>
    <body>
       
        <?php include 'nav.php'; ?>
        <div class="section" id="login">
            <div class="container">
                <h1 class="header center">Opret flytning</h1>
                <div class="row">
                    <form action="#" class="col s12">
                        <div class="row">
                            <div class="col s1"></div>
                            <div class="input-field col s3">
                                <input id="gade" type="text" class="validate">
                                <label for="gade">Gade</label>
                            </div>
                            <div class="col s1"></div>
                           
                            <div class="input-field col s3">
                                <input id="gade" type="text" class="validate">
                                <label for="gade">Gade</label>
                            </div>
                            <div class="col s1"></div>
                            <div class="col s3">
                                <p>
                                    <input type="checkbox" id="test1"/>
                                    <label for="test1">Bil</label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col s1"></div>
                            <div class="input-field col s3">
                                <input id="nr" type="text" class="validate">
                                <label for="nr">Nr.</label>
                            </div>
                            <div class="col s1"></div>
                           
                            <div class="input-field col s3">
                                <input id="nr" type="text" class="validate">
                                <label for="nr">Nr.</label>
                            </div>
                            <div class="col s1"></div>
                            <div class="col s3">
                                <p>
                                    <input type="checkbox" id="test2"/>
                                    <label for="test2">Chauffør</label>
                                </p>
                            </div>
                        </div>
                         <div class="row">
                            
                            <div class="col s1"></div>
                            <div class="input-field col s3">  
                                <select>
                                    <option value="" disabled selected>Vælg postnummer</option>
                                    <option value="1">2100 København Ø</option>
                                    <option value="2">2200 København N</option>
                                    <option value="3">2300 København S</option>
                                    <option value="3">2400 København NV</option>
                                    <option value="3">2450 København SV</option>
                                </select>
                            </div>
                            <div class="col s1"></div>
                           
                            <div class="input-field col s3">
                                <select>
                                    <option value="" disabled selected>Vælg postnummer</option>
                                    <option value="1">2100 København Ø</option>
                                    <option value="2">2200 København N</option>
                                    <option value="3">2300 København S</option>
                                    <option value="3">2400 København NV</option>
                                    <option value="3">2450 København SV</option>
                                </select>
                            </div>
                            <div class="col s1"></div>
                            <div class="col s3">
                               
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
            
    </body>
</html>