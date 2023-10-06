<?php
abstract class Forme {
    /**
     * @var array|string[] Tableau du nom des formes
     */

    private array $formes = [
        1 => 'cercle',
        2 => 'triangle',
        3 => "rectangle"
    ];

    protected string $type;

    protected object $position;

    




    /**
     * Forme constructor.
     * @param int $formeIndex index du type de forme
     * @param Point $position position des points pour créer la forme
     */
    public function __construct(int $formeIndex, Point $position){
        //On vérifie que le type de forme existe
        $this->type = $this->formes[$formeIndex];
        $this->position = $position;
    }

    /**
     * @return string le type de forme
     */
    public function __toString(){
        return "La forme est un " . $this->type;
    }

    abstract public function perimetre(): int;
    abstract public function superficie(): int;


    /**
     * @param string $type type de forme
     * @return void
     */


    /***
     * @param array $formes
     * @return void
     */
    public function setForme(array $formes){
        $this->formes = $formes;
    }

    /**
     * @return array|string[] le tableau des formes
     */
    public function getFome(){
        return $this->formes;
    }



    /**
     * @return string le type de forme
     */
    public function getType(){
        return $this->type;
    }

    /**
     * @return array|string[] le tableau la forme selon l'index
     */
    public function getFormes(){
        return $this->formes;
    }

    /**
     * @param Point $position position des points pour modifier la forme
     * @return void
     */
    public function setPosition(Point $position){
        $this->position = $position;
    }









}