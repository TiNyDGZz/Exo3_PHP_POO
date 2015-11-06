<?php

class VoitureAtt extends Voiture
{
    private $_modele;   // Nom du modèle
    private $_couleur;  // Couleur de la voiture
    private $_vitesse;  // Vitesse max de la voiture

    /*Construct*/
    public function __construct($modele){
        $this->setModele($modele);
    }


    /*SETTERS*/
    public function setModele($modele){
        if(isset($modele) && !empty($modele)){
            $this->_modele = $modele;
        }
    }
    public function setMarque($marque){
        if(isset($marque) && !empty($marque)){
            $this->_marque = $marque;
        }
    }

    public function setColor($couleur){
        if(isset($couleur) && !empty($couleur)){
            $this->_couleur = $couleur;
        }
    }

    public function setNbPortes($nbPortes){
        if(isset($nbPortes) && !empty($nbPortes)){
            $this->_nbPortes = $nbPortes;
        }
    }

    public function setVitesse($vitesse){
        if(isset($vitesse) && !empty($vitesse) && is_int($vitesse)){
            $this->_vitesse = $vitesse;
        }
    }


    /*GETTER*/
    public function getVitesse(){
        return $this->_vitesse;
    }

    public function getModele(){
        return $this->_modele;
    }
    public function getMarque(){
        return $this->_marque;
    }

    public function getColor(){
        return $this->_couleur;
    }

    public function getNbPortes(){
        return $this->_nbPortes;
    }

}