<?php

class Magicien extends Perso
{
    private int $pointsDeVie = 100;

    public function lancerPoudreDodo(Perso $perso)
    {
        // Tester que l'on ne peut pas s'auto-attaquer
        if ($perso->id != $this->id){
            if ($this->tempsAttaque == 0 || time() == $this->tempsAttaque + 120) {
                return "$perso->nom a été endormi !";
            } else {
                return "Chuuuut ! $perso->nom fait dodo ...";
            } 
        }
    }

    
}
