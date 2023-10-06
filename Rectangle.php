<?php

class Rectangle extends Forme
{


    private int $longueur;
    private int $largeur;

    /**
     * Longueur de la diagonale du rectangle
     * Ne parrait pas dans le constructeur car se calcule avec getDiagonale
     * @var int
     */
    private int $diagonale;

    public function __construct(int $longueur, int $largeur, Point $position)
    {
        parent::__construct(3, new Point(8));
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->position = $position;
    }

    /**
     * Permet de calculer le périmètre du rectangle
     * @return float|int le périmètre du rectangle
     */
    public function perimetre(): int
    {
        return 2 * ($this->longueur + $this->largeur);
    }

    /**
     * Permet de calculer la superficie du rectangle
     * @return float|int La superficie du rectangle
     */
    public function superficie(): int
    {
        return $this->longueur * $this->largeur;
    }

    /**
     * Permet de conaitre la longueur de la diagonale dans le rectangle
     * @return float la taille de la diagonale.
     */
    public function getDiagonale(): int{
       return $this->diagonale = sqrt(($this->longueur * $this->longueur) + ($this->largeur * $this->largeur));
    }

}