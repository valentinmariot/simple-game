<?php

class Guerrier extends Perso
{

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = 'guerrier';

        return $this;
    }
  
    /**
     * Set the value of defence
     *
     * @return  self
     */ 
    public function setDefence($defence)
    {
        $this->defence = rand(10,19);

        return $this;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */ 
    public function setForce($force)
    {
        $this->force = rand(20,40);

        return $this;
    }

}
