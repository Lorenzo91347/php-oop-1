<?php
include_once __DIR__.'/info/ratings.php';


class Movie{

    public $name;
    public $year;
    public $genre;
    public $length;
    public $vote;


      function __construct(
        $_name,
        $_year,
        $_genre,
        $_length,
        $_vote
    
        

    ){
        
        $this->name = $_name;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->length = $_length;
        $this->vote = $_vote;
    
    }
    public function getVote(){
        return $this-> vote;
    }
    

   

    

    
}