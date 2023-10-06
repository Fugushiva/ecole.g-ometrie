<?php

class Disque extends Forme
{
    /**
     * @var int le rayon
     */
    private int $rayon;

    public function __construct(int $rayon, Point $position)
    {
        parent::__construct(1, new Point());
        $this->rayon = $rayon;
        $this->position = $position;


    }

    public function __toString()
    {
        return parent::__toString();
    }

    /**
     * Le périmètre du disque est égal à 2 * pi * rayon
     * @return int le rayon du disque
     */

    public function perimetre(): int
    {
        return 2 * pi() * $this->rayon;
    }

    /**
     * La superficie du disque est égale à pi * rayon²
     * @return float la superficie du disque
     */
    public function superficie(): int {
        return pi() * pow($this->rayon, 2);
    }

    /**
     * l'aire du secteur est la moitié de l'aire du disque.
     * @param int $angle
     * @return int l'aire du secteur
     */
    public function aireSecteur(int $angle): int {
        return ($angle * $this->rayon * $this->rayon) / 2;
    }

    /**
     * l'aire du segment est l'aire du secteur moins l'aire du triangle
     * @param int $angle
     * @return int l'aire du segment
     */
    public function aireSegment(int $angle): int{
        return $this->aireSecteur($angle) - ($this->rayon * $this->rayon * sin($angle)) / 2;
    }
}