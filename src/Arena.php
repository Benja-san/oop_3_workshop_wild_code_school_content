<?php

namespace APP;

use App\Hero;

class Arena{

    private array $monsters;
    private Hero $hero;
    private int $size = 10;


    public function __construct(array $monsters = [], Hero $hero)
    {
        $this->monsters = $monsters;
        $this->hero = $hero;
    }

    /**
     * Get the value of monsters
     */ 
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * Set the value of monsters
     *
     * @return  self
     */ 
    public function setMonsters($monsters)
    {
        $this->monsters = $monsters;

        return $this;
    }

    /**
     * Get the value of hero
     */ 
    public function getHero(): Hero
    {
        return $this->hero;
    }

    /**
     * Set the value of hero
     *
     * @return  self
     */ 
    public function setHero($hero)
    {
        $this->hero = $hero;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    //specific methods
    public function getDistance(Fighter $fighter1, Fighter $fighter2) :float
    {
        $distance = sqrt(($fighter1->getX() - $fighter2->getX())**2+($fighter1->getY() - $fighter2->getY())**2);
        return $distance;
    }

    public function touchable(Fighter $attacker, Fighter $defender): bool
    {
        if($this->getDistance($attacker, $defender) <= $attacker->getRange()){
            return true;
        }
        return false;
    }
}