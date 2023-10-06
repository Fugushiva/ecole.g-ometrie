<?php

class Triangle extends Forme
{

    private int $sommet2;
    private int $sommet3;


    public function __construct(int $sommet2, int $sommet3, Point $position)
    {
        parent::__construct(2, new Point(0,0));

        $this->sommet2 = $sommet2;
        $this->sommet3 = $sommet3;
        $this->position = $position;

    }

    /**
     * la mediane du triangle est la moyenne des deux autres sommets ce qui permet de connaitre la hauteur du triangle
     * @return float|int la médiane du triangle
     */
  public function computeMediane(){
    return ($this->sommet2 + $this->sommet3) / 2;

  }

    /**
     * Permet de calculer le périmètre du triangle grâce à la médiane
     * @return int le périmètre du triangle
     */
    public function perimetre(): int
    {
        return $this->sommet2 + $this->sommet3 + $this->computeMediane();
    }

    /**
     * Permet de calculer la superficie du triangle grâce à la médiane
     * @return int la superficie du triangle
     */
    public function superficie(): int
    {
        return ($this->sommet2 * $this->computeMediane()) / 2;
    }



}