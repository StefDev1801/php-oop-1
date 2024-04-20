<?php
/**
 * Movie Class
 * 
 * 
 * 
 * @author Stefano Bellini <stefano200118@gmail.com>
 * @license MIT
 * @copyright 2024 Boolean class 119
 *
 */
class Movie {

    #un titolo, (queste sono le variabili d'istanza)
    public $profits;

    #una lingua e 

    #un voto (su una scala da 1 a 10). 
    public $duration;


    /**
     * It make me set 
     */
    public function __construct(string $profits, string $duration, int $duration)
    {
        $this -> profits = $profits;
        $this -> duration = $duration;
    }

/** */
    // getters
    function getProfits()
    {
        return  $this -> profits;
    }

    function getDuration()
    {
        return  $this -> duration;
    }


    //setters mi permettono di settare nuovi nomi
    public function setProfits($profits)
    {
        $this -> profits = $profits;
    }
    
    public function setDuration($duration)
    {
        $this -> duration = $duration;
    }

}