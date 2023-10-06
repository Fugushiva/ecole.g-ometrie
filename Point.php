<?php
class Point {
    //Propriétés
    protected int $x;
    protected int $y;

    //Méthodes
    public function __construct(int $x = 0, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    //Getters
    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    //Setters
    public function setX(int $x) {
        $this->x = $x;
    }

    public function setY(int $y) {
        $this->y = $y;
    }

    public function __toString() {
        return "(x: {$this->x}, y :{$this->y})";
    }
}