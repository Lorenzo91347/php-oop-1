<?php

class Movie{

    public $name;
    public $year;
    public $genre;
    public $length;
    public $rating;
    public $recommend;

      function __construct(
        $_name,
        $_year,
        $_genre,
        $_length,
        $_rating,
        $_recommend = false,
    ){
     
        $this->name = $_name;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->length = $_length;
        $this->rating = $_rating;
        $this->recommend = $_recommend;
    }

    public function doRec($_rating)
    {
        if($_rating >= 4){
            
            return $this->recommend;

            $_recommend = true; 
        }
    }
}