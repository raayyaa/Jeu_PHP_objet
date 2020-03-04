<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");

class Dragon extends Personnage implements imageJeuRole
{
   
    private $_ptFeu;
    const GAIN_EXP =300;
    const Message = 'Points de feu restants à ';

    
    public function getPtFeu()
    {
        return $this->_ptFeu;
    }
    public function setPtFeu($_ptFeu)
    {
        $this->_ptFeu = $_ptFeu;
    }
    
    public function __construct($forceInitiale=10,$_nomPerso,$_localisation,$_ptFeu=5,$_pointVie=200)
    {
        $this->_ptFeu = $_ptFeu;
        $this->_ptDeplacement = 6;
        parent::__construct($forceInitiale,$_nomPerso,$_localisation,$_pointVie);
    }
    
    public function frapper($ennemi)
    {
        $this->_ptFeu -= 1;

        echo (get_class($this)::Message .$this->_nomPerso.' : '.$this->_ptFeu);
        echo("<br/>");  
        parent::frapper($ennemi);
    }

    
    public function rechargerVie()
    {
        $_pointVie += 100;
        echo ("Les points de vie de ".$this->_nomPerso." sont rechargés à 100");
    }
    
    public function deplacer()
    {
        //$this->_localisation += 2;
        //echo ($this->_nomPerso . " se trouve maintenant à la case : " . $this->_localisation);

       // echo("<script> alert(  '$this->_nomPerso se deplace'  ) </script>");
        
        parent::deplacer();

    }


}
