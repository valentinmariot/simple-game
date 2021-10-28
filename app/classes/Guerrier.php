<?php

class Guerrier extends Perso
{
    private int $pointsDeVie = 100;

    

    /**
     * Get the value of pointsDeVie
     */ 
    public function getPointsDeVie()
    {
        return $this->pointsDeVie;
    }

    /**
     * Set the value of pointsDeVie
     *
     * @return  self
     */ 
    public function setPointsDeVie($pointsDeVie)
    {
        $this->pointsDeVie = $pointsDeVie;

        return $this;
    }
}
