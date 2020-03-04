<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");

class Archer extends Personnage implements imageJeuRole
{
    private $_nbFleches;
    const GAIN_EXP = 50;
    const Message = "Le nombres de flèches de ";
    
    public function getNbFleches()
    {
        return $this->_nbFleches;
    }
    public function setNbFleches($_nbFleches)
    {
        $this->_nbFleches = $_nbFleches;
    }
    
    public function __construct($forceInitiale,$_nomPerso,$_localisation,$_nbFleches= 10,$_pointVie=80)
    {   
        parent::__construct($forceInitiale,$_nomPerso,$_localisation,$_pointVie);
        $this->_nbFleches = $_nbFleches;
        $this->_ptDeplacement = 2;
    }
    
    public function frapper($ennemi)
    {
        $this->_nbFleches -= 1;

        echo (get_class($this)::Message . $this->_nomPerso . ' : ' . $this->_nbFleches);
        echo ("<br/>");
        parent::frapper($ennemi);

    }

    
    public function rechargerVie()
    {
        $_pointVie = 100;
        echo ("Les points de vie de ".$this->_nomPerso." sont rechargés à 100");
    }
    
    public function deplacer()
    {
        //$this->_localisation += 1;
        //echo ($this->_nomPerso." se trouve maintenant à la case : ".$this->_localisation);

       // echo("<script> alert(  '$this->_nomPerso se deplace'  ) </script>");
        
        parent::deplacer();
    }

}

?>