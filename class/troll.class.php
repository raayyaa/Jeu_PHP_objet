<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");

class Troll extends Personnage implements imageJeuRole
{
    private $_ptZerk;
    const GAIN_EXP = 50;
    const Message = "Les points de marteau de ";
    
    public function getPtZerk()
    {
        return $this->_ptZerk;
    }
    public function setPtZerk($_ptZerk)
    {
        $this->_ptZerk = $_ptZerk;
    }
    
    public function __construct($forceInitiale,$_nomPerso,$_localisation,$_ptZerk=10,$_pointVie=80)
    {  
        parent::__construct($forceInitiale,$_nomPerso,$_localisation,$_pointVie);
        $this->_ptZerk = $_ptZerk;
        $this->_ptDeplacement = 3;
    }
    
    public function frapper($ennemi)
    {
        $this->_ptZerk -= 1;
        
         echo ('Points de zerk restants à '.$this->_nomPerso.' : '.$this->_ptZerk);
        echo("<br/>");
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

        //echo("<script> alert(  '$this->_nomPerso se deplace'  ) </script>");
        
        parent::deplacer();
    }
    
}

?>