<?php 
class Movie{
    public $id;
    public $title;
    public $genre;
    public $language;
    public $vote;
    public $year;
    public $image;
    public function __construct(int $id, string $title, string $genre, string $language, int $vote, string $year, string $image){
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->vote = $vote;
        $this->year = $year;
        $this->image = $image;
    }
}