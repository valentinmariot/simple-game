<?php

class Magicien extends Perso
{

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = 'magicien';

        return $this;
    }

    /**
     * Set the value of defence
     *
     * @return  self
     */ 
    public function setDefence($defence)
    {
        $this->defence = 0;

        return $this;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */ 
    public function setForce($force)
    {
        $this->force = rand(5,10);

        return $this;
    }


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
