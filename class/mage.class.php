<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");

class Mage extends Personnage implements imageJeuRole
{
    private $_ptMagie;
    const GAIN_EXP = 100;
    const Message = "Les points de magie de ";


    public function getPtMagie()
    {
        return $this->_ptMagie;
    }
    public function setPtMagie($_ptMagie)
    {
        $this->_ptMagie = $_ptMagie;
    }

    public function __construct($forceInitiale = 1, $_nomPerso, $_localisation, $_ptMagie = 5, $_pointVie = 150)
    {
        parent::__construct($forceInitiale, $_nomPerso, $_localisation, $_pointVie);
        $this->_ptMagie = $_ptMagie;
        $this->_ptDeplacement ++;
    }

    public function frapper($ennemi)
    {
        $this->_ptMagie -= 1;

        echo (get_class($this)::Message . $this->_nomPerso . ' : ' . $this->_ptMagie);
        echo ("<br/>");
        parent::frapper($ennemi);
    }

    public function rechargerVie()
    {
        $_pointVie = 100;
        echo ("Les points de vie de " . $this->_nomPerso . " sont rechargés à 100");
    }

    public function deplacer()
    {
        //$this->_localisation += 2;
        //echo ($this->_nomPerso . " se trouve maintenant à la case : " . $this->_localisation);   

        //echo("<script> alert(  '$this->_nomPerso se deplace'  ) </script>");
        
        parent::deplacer();

    }






    
}

 ?>