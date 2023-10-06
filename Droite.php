<?php

class Droite
{
    private $debut;
    private $fin;

    public function __construct(Point $debut, Point $fin){
        $this->debut = $debut;
        $this->fin = $fin;
    }

    public function __toString(){
        return "Droite de {$this->debut} à {$this->fin}";
    }

    /**
     * permet de calculer la longueur de la droite grâce à la formule racine carrée de (x2 - x1)² + (y2 - y1)²
     * @return int la longueur de la droite
     */
    public function longueur(): int{
        return sqrt(pow($this->fin->getX() - $this->debut->getX(), 2) + pow($this->fin->getY() - $this->debut->getY(), 2));
    }

    /**
     * Permet de calculer la pente de la droite grace à la formule (y2 - y1) / (x2 - x1)
     * @return int
     */
    public function pente(): int{
        return ($this->fin->getY() - $this->debut->getY()) / ($this->fin->getX() - $this->debut->getX());
    }
}