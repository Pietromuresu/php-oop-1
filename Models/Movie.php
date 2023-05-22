<?php



class Movie{
  public $title;
  public $description;
  public $duration;
  public $poster;
  public $votes;

  public function __construct($_title, $_description, $_duration, $_poster){
    $this->title = $_title; 
    $this->description = $_description; 
    $this->duration = $_duration;
    $this->poster = $_poster; 
    $this->votes = $this->getVotes();
  }

  public function getVotes(){
    return  rand(0, 5);
  }
 

}