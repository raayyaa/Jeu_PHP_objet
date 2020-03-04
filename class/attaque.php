
    <!----------------------------- LES ATTAQUES ----------------------------->


    <!------ attaque n°1 ------->

    <!--  attaque qui doit s'afficher quand on clic sur le bouton----->


    <script type="text/javascript">
        function afficher1() {
            alert("TEST");
            <?php
            echo "Le Magicien attaque le Dragon";
            $magicien1->frapper($dragon1);
            echo '<br>';
            $magicien1->deplacer();
            ?>
        }
    </script>

    <?php
    echo '<br/>';
    echo '<br/>';
    echo "<h3>Le Magicien attaque le Dragon</h3>"; 
    $magicien1->frapper($dragon1);
    echo '<br>';
    $magicien1->deplacer();
    echo '<br/>';
    echo '<br/>';
    echo '********************************************   ***';
    echo '<br/>';

    ?>


    <!------ attaque n°2 ------->

    <script type="text/javascript">
        function afficher2() {
            alert("PLOP");
            <?php
            echo "Le Dragon attaque le Magicien";
            $dragon1->frapper($magicien1);
            echo '<br>';
            $dragon1->deplacer();
            ?>
        }
    </script>

    <?php
    echo "<h3>Le Dragon attaque le Magicien</h3>";
    $dragon1->frapper($magicien1);
    echo '<br>';
    $dragon1->deplacer();
    echo '<br/>';
    echo '<br/>';
    echo '********************************************   ***';
    echo '<br/>';

    ?>



    <!------ attaque n°3 ------->

    <script type="text/javascript">
        function afficher3() {
            alert("PLOP");
            <?php
            echo "L'Archer attaque le Magicien";
            $archer1->frapper($magicien1);
            echo '<br>';
            $archer1->deplacer();
            ?>
        }
    </script>

    <?php
    echo "<h3>L'Archer attaque le Magicien</h3>";
    $archer1->frapper($magicien1);
    echo '<br>';
    $archer1->deplacer();
    echo '<br/>';
    echo '<br/>';
    echo '********************************************   ***';
    echo '<br/>';
    ?>




    <!------ attaque n°4------->

    <script type="text/javascript">
        function afficher4() {
            alert("PLOP");
            <?php
            echo "Le Troll attaque l'Archer";
            $troll1->frapper($archer1);
            echo '<br>';
            $troll1->deplacer();

            ?>
        }
    </script>

    <?php

    echo "<h3>Le Troll attaque l'Archer</h3>";
    $troll1->frapper($archer1);
    echo '<br>';
    $troll1->deplacer();
    echo '<br/>';
    echo '<br/>';
    echo '********************************************   ***';
    echo '<br/>';
    ?>


</body>