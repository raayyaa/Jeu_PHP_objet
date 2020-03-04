<!DOCTYPE htmL>
<html>

<head>
    <meta charset="utf-8">
</head>


<body>
    <?php
    abstract class Personnage // ne peut pas instancier car abstract ( ex : echo )
    {


        //Attributs ou propriétés de la classe
        // protected = PUBLIC pour class Fille mais PRIVE pour le reste
        // pas besoin de passer par getter / setter (comme private)

        protected $_nomPerso;
        protected $_force;
        protected $_localisation = 0;
        protected $_experience;
        protected $_degats = 0;
        protected $_pointVie;
        protected $_nomImage;
        protected $_ptDeplacement = 3;


        static $_teteAdire = 'Je suis un personnage de jeu de role !';
        static $_compteur = 0;

        const FORCE_PETITE = 20;
        const FORCE_MOYENNE = 50;
        const FORCE_GRANDE = 80;


        //Getters et setters
        //Get
        public function getNom()
        {
            return $this->_nomPerso;
        }
        public function getForce()
        {
            return $this->_force;
        }
        public function getPtDeplacement()
        {
            return $this->_ptDeplacement;
        }
        public function getLocalisation()
        {
            return $this->_localisation;
        }
        public function getExperience()
        {
            return $this->_experience;
        }
        public function getDegats()
        {
            return $this->_degats;
        }


        //Set
        public function setNom()
        {
            return $this->_nomPerso;
        }
        public function setForce($_force)
        {
            $this->_force = $_force;
        }
        public function setLocalisation($_localisation)
        {
            $this->_localisation = $_localisation;
        }
        public function setPtDeplacement($_ptDeplacement)
        {
            $this->_ptDeplacement = $_ptDeplacement;
        }
        public function setExperience($_experience)
        {
            $this->_experience = $_experience;
        }
        public function setDegats($_degats)
        {
            $this->_degats = $_degats;
        }

        //Constructeur de la classe Personnage
        public function __construct($forceInitiale, $_nomPerso, $_localisation, $_pointVie)
        {
            $this->_force = $forceInitiale;
            $this->_nomPerso = $_nomPerso;
            $this->_localisation = $_localisation;
            $this->_pointVie = $_pointVie;
        }

        //Méthodes de la classe Personnage
        public function gagnerExperience($valexp)
        {
            $this->_experience = $valexp;
        }
        public function augmenteDegats($valdegat)
        {
            $this->_degats = $valdegat;
        }
        public function parle($message)
        {
            echo 'Je parle : ' . $message . '<br/>';
        }
        public function frapper($ennemi)
        {

            $ennemi->augmenteDegats($this->_force); //modif diminue point de vie

            $this->_experience += get_class($ennemi)::GAIN_EXP;

            echo ($this->_nomPerso . " vient d'attaquer " . $ennemi->_nomPerso . " lui infligeant " . $this->_force . " points de dégats.<br/>");
            $ennemi->_pointVie = $ennemi->_pointVie - $this->_force;

            echo ("Il reste à " . $ennemi->_nomPerso . " " . $ennemi->_pointVie . " points de vie.");
            echo ('<br/>');

            $this->afficheImage();
            $ennemi->afficheImage();
        }


        //Methodes static de la classe Personnage
        public static function parler()
        {
            echo 'Je suis un personnage <br/>';
        }

        abstract public function rechargerVie();


        public function deplacer()
        {
            $this->_localisation += $this->_ptDeplacement;
            echo ($this->_nomPerso . " se trouve maintenant à la case : " . $this->_localisation);
        }


        public function afficheImage()
        {
            $str = get_class($this);
            // echo "<img src='./class/img/" . $str . ".png'>";

            return "class/img/" . $str . ".png";
            //$str1=$this->_nomPerso;
        }
    }





    ?>
</body>

</html>