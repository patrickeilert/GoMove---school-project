<!DOCTYPE html>
<html lang="da">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <meta name="description" content="Er dine venner også træt af at bære kasser ned for 4. sal, mangler du penge til weekendens bytur - Hos GoMove hjælper vi hinanden nemt og billigt"> <!-- SEO beskrivelse af hjemmesiden, som kan ses i SERP -->
        <meta name="keywords" content="move, nemt, billigt, hjælp"> <!-- SEO beskrivelse af hjemmesiden, som kan ses i SERP -->
        <title>GoMove - din flytteportal</title> 
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
                    <!-- <h5 class="header col s12 light">Flyt dig Kaj - jeg vil gerne hjælpe</h5> -->
                </div>
                <div class="row center">
                    <img class="responsive-img" src="img/forside_cirkel.png" alt="GoMove billig og nem flytning" width="40%">
                </div>
                <div class="row center">
                    <div id="button">
                    <a href="opret_profil.php" class="waves-effect waves-light btn-large">Jeg hjælper!</a>
                    <a href="opret_profil.php" class="waves-effect waves-light btn-large">Jeg flytter!</a>
                    </div>
                </div>
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
                            <img class="responsive-img" src="img/info_hvad.png" alt="GoMove er en tjeneste hvor du har mulighed for at søge hjælp til flytning eller tilbyde hjælp">
                            <h5 class="center">Hvad</h5>
                            <p>GoMove er en tjeneste, hvor du kan oprette dig som bruger. Som bruger har du mulighed for enten at søge hjælp til flytning, eller tilbyde andre hjælp. Har du en bil? Er du stærk? Har du kørekort? Har du en støvet trailer stående i garagen? Du kan tilbyde de kompetencer, du besidder, og dermed matche med den bruger, der søger dét du har.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <img class="responsive-img" src="img/info_hvorfor.png" alt="Er dine venner også træt af at bære kasser ned for 4. sal, mangler du penge til weekendens bytur - Hos GoMove hjælper vi hinanden nemt og billigt">
                            <h5 class="center">Hvorfor</h5>
                            <p>GoMove er et nyt tiltag for unge og studerende i København, som flytter meget rundt i deres studietid. 3 måneder fremleje her, 6 måneder på et værelse dér, bliver hurtigt til mange flytninger på et år. Som ung på SU er det dyrt at benytte sig af flyttefirmaer, og er derfor ikke altid en mulighed. Her kommer GoMove ind i billedet!
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <img class="responsive-img" src="img/info_hvordan.png" alt="Opret dig som bruger og flyt elelr hjælp allerede i dag">
                            <h5 class="center">Hvordan</h5>
                            <p>For at kunne bruge GoMove skal du oprette dig som bruger. Du kan når som helst oprette en hjælpende hånd eller en flyting, bare indtast hvad du har brug for eller hvad du tilbyder og du er i gang. Se flytinger  i dit nabolag og kom dine nærmeste til undsætning eller se om der er en nabo der lige kan hjælpe med at få din nye sofa op i lejligheden. Lige meget hvad er GoMove løsningen.
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
                    <img class="responsive-img" src="img/map.png" alt="Se flytninger og hjælpende hænder nær dig">
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>
