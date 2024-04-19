<?php


/**
 * Production Class
 * 
 * 
 * 
 * @author Stefano Bellini <stefano200118@gmail.com>
 * @license MIT
 * @copyright 2024 Boolean class 119
 *
 */
class Production {

    #un titolo, (queste sono le variabili d'istanza)
    public $title;

    #una lingua e 
    public $language;

    #un voto (su una scala da 1 a 10). 
    public $vote;


    /**
     * It make me set 
     */
    public function __construct(string $title, string $language, int $vote)
    {
        $this -> title = $title;
        $this -> lenguage = $lenguage;
        $this -> vote = $vote;
    }

/** */
    // getters
    function getTitle()
    {
        return  $this -> title;
    }

    function getLang()
    {
        return  $this -> lang;
    }

    function getVote()
    {
        return  $this -> vote;
    }


    //setters mi permettono di settare nuovi nomi
    public function setTitle($title)
    {
        $this -> title = $title;
    }

    public function setLanguage($lang)
    {
        $this -> lang = $lang;

    }
    
    public function setVote($vote)
    {
        $this -> vote = $vote;
    }

}