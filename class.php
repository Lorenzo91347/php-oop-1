<?php

class Movie{

    public $name;
    public $year;
    public $genre;
    public $length;
    public $rating;

    function __construct(
        $_name,
        $_year,
        $_genre,
        $_length,
        $_rating
    ){
     
        $this->name = $_name;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->length = $_length;
        $this->rating = $_rating;
    }

    public function doRec($_rating)
    {
        if($_rating >= 4){
            

        }
    }
}