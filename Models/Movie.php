<?php 
class Movie{
    public $id;
    public $title;
    public $genre;
    public $language;
    public $vote;
    public $year;
    public $image;
    public $availableFlags = ['en', 'it', 'es', 'de', 'fr'];
    public function __construct(int $id, string $title, string $genre, string $language, int $vote, string $year, string $image){
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->vote = $vote;
        $this->year = $year;
        $this->image = $image;
    }

    public function stars(){
        $rate = $this->vote/2;
        for ($i = 0; $i < 5; $i++){
            if($i < $rate){
                echo '<i class="fa-star fa-solid"></i>';
            } else {
                echo '<i class="fa-star fa-regular"></i>';
            }
            
        }
    }
    public function getFlag(){
        if(in_array($this->language,$this->availableFlags)){
            return "<img src='images/$this->language.png' alt='$this->language'>";
        }
    }
}