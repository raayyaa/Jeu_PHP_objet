<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="class/style/style.css">
</head>

<body>

    <img id="img1" src="class/img/de.png" />
    <h1> Jeu de Rôle </h1>

    <?php
    spl_autoload_register(function ($classname) {
        include_once "./class/" . $classname . ".class.php";
    });

    /************************** CREATION PERSONNAGE ****************************/

    // force, nom, localisation,point de magie/feu... , point de vie 

    $magicien1 = new Mage(30, "Merlin", 0, 5, 150);
    //var_dump($magicien1);

    $dragon1 = new Dragon(50, "Dragon", 0, 5, 200);
    //var_dump($dragon1);

    $archer1 = new Archer(10, "Robin des Bois", 0, 10, 80);
    //var_dump($archer1);

    $troll1 = new Troll(20, "Shrek", 0, 10, 80);
    //var_dump($troll1);



    /************************** MESSAGE DES POINTS DU DEBUT ****************************/
    echo "<div id='div1'>";
    echo "<ul>";
    echo " <h2 id='titre2'><u>Points au début du jeu</u> </h2>";
    echo "<li><b id='mage'>Merlin</b> a actuellement : <b>" . $magicien1->getPtMagie() . "</b> points de magie </li>";
    echo "<li><b id='archer'>Robin des Bois </b> a actuellement : <b>" . $archer1->getNbFleches() . "</b> points de flèches </li>";
    echo "<li><b id='troll'>Shrek </b> a actuellement : <b>" . $troll1->getPtZerk() . "</b> points de marteau </li>";
    echo '</ul>';
    echo "</div>";

    ?>

    <!----------------------------- BOUTONS ----------------------------->

    <div id="div2">
        <h2 id="titre"> Choisissez un personnage </h2>

        <?php
        $niveau = 0;
        $personnages = array($magicien1, $troll1, $archer1);


        foreach ($personnages as $p) {
            echo " <div class='column' onclick='afficher1(\"" . $p->afficheImage() . "\"),openModal()'>";
            echo "<h2>" . $p->getNom() . " </h2>";
            echo "<img src ='" . $p->afficheImage() . "'>" .
                "</div>";
        }

        ?>

        <!-- <div class="column" onclick="afficher1(),openModal()">
            <h2>Le magicien </h2>
            <?php $magicien1->afficheImage(); ?>
        </div> -->

     


    </div>
    <!----------------------------- LES ATTAQUES ----------------------------->


    <script type="text/javascript">
        var niveau = 1;

        function afficher1(image) {
            document.getElementById('modal').innerHTML =
                "<h2 id='niveau' data-niveau='" + niveau + "' >Niveau " + niveau + " </h2>" +
                "<img src ='" + image + "'>" +
                "<?php echo "<img src =" . $personnages[$niveau]->afficheImage() . ">"; ?>" +
                " <button id='close' onclick='closeModal()'>close</button>" +
                " <button id='frapper' onclick='frapper()'>frapper</button>";
        }
     
        function Personnage(nom,pointDevie){
            this.nom = nom;

            this.frapper = function(ennemi){
                ennemi.frapperReponse(this);
                // if pour verifier;
            }
            this.frapperReponse = function(ennemi){

            }
        }

        function frapper(){

        }

        var person = new Personnage()

        
    </script>
    <!-------------------------------- FIN ATTAQUES ----------------------------------->
    <br>
    <br>
    <!----------------------------- Pop Up ----------------------------------->
    <script>
        /************************ Ouverture PopUp *************************** */
        function openModal() {
            document.getElementById("modal").style.top = "0px";
        }
        /************************* Fermeture PopUp***************************/
        function closeModal() {
            document.getElementById("modal").style.top = "-660px";
        }
    </script>


    <div id="modal">
        <input id="close" type="submit" value="close" onclick="closeModal();">

    </div>
    <!----------------------------- Fin Pop Up ----------------------------------->

</body>