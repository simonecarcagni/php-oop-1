<?php

class Movie {
    public $title;

    public $image;

    public $timing;

    public function __construct($_title, $_image, $_timing){
        $this->title = $_title;
        $this->image = $_image;
        $this->timing = $_timing;
    }

    public function getMovieDetails(){
        return "Movie: $this->title, Duration: $this->timing, Poster: $this->poster";
    }
}

