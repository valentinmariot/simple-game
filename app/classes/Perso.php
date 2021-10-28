<?php

class Perso extends BaseEntity
{
    private int $force;
    private int $defence;
    private int $pointsDeVie;
    private string $nom;
    private int $temps;

    /**
     * Get the value of defence
     */ 
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * Set the value of defence
     *
     * @return  self
     */ 
    public function setDefence($defence)
    {
        $this->defence = $defence;

        return $this;
    }

    /**
     * Get the value of force
     */ 
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */ 
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }

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

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of temps
     */ 
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set the value of temps
     *
     * @return  self
     */ 
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }
    
}
