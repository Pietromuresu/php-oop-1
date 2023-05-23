<?php




class Movie{
  public $title;
  public $description;
  public $duration;
  public $poster;
  public $votes;
  public $genre;

  

  public function __construct($_title, $_description, $_duration, $_poster,$_genre){
    $this->title = $_title; 
    $this->description = $_description; 
    $this->duration = $_duration;
    $this->poster = $_poster; 
    $this->votes = $this->getVotes();
    $this->genre = $_genre; 
  }

  public function getVotes(){
    return  rand(0, 5);
  }
 

}