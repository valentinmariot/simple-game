<?php

class Perso extends BaseEntity
{
    private string $type;
    private string $nom;
    private int $pointsDeVie = 100;
    private int $force;
    private int $defense;
    private int $temps = 0;

    /**
     * Get the value of defence
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defence
     *
     * @return  self
     */ 
    public function setDefence($defense)
    {
        $this->defense = $defense;

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
    public function setPointsDeVie($pointsDeVie, int $id)
    {
        $this->pointsDeVie = $pointsDeVie;

        return $this;

        // return $this->db->query("SELECT `personnages` SET `pv` = ? WHERE `personnages`.`id` = ?", [$pointsDeVie, $id]);
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
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

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

    public function attaque(Perso $perso)
    {
        if ($this->defence < $this->attaque){
            $pointsDeVieEnnemi = $perso->pointsDeVie;
            $degats = $this->attaque - $perso->defence;
            $pointsDeVieEnnemi = $pointsDeVieEnnemi - $degats ;
            $perso->pointsDeVie = $pointsDeVieEnnemi;
            return "Vous avez infligé $degats points de dégats !";
        } else {
            return "Votre attaque est inefficace ...";
        }
    }


    // "SELECT `personnages` SET `temps` = $temps WHERE `personnages`.`id` = $id";
}
