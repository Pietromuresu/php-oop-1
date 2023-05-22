<?php  

class Movie{
  public $title;
  public $description;
  public $duration;
  public $poster;

  public function __construct($_title, $_description, $_duration, $_poster){
    $this->title = $_title; 
    $this->description = $_description; 
    $this->duration = $_duration; 
    $this->poster = $_poster; 
  }

}

$movies =  [  
  new Movie(
    "Fast & Furious 10",
    "Un numero divino, 10 significa un ritorno all'unità, la fusione tra essere e non essere. Il numero 10 indica il completamento di un ciclo.",
    '2h 21m',
    'fast-x.jpeg'

),
  new Movie(
    "L'uomo sulla strada",
    "Irene ha 8 anni quando assiste al tragico incidente in cui suo padre perde la vita per mano di un pirata della strada che scappa via. Quella bimba, che non ricorda il volto dell'assassino, diventa una ragazzina ribelle con l'ossessione di farsi.",
    '1h 50m',
    'uomo-sulla-strada.jpeg'

),


];


foreach ($movies as $movie ) {
  echo "<h3>" . $movie->title . "</h3>";
  echo '<br>';
  echo $movie->description;
  echo '<br>';
  echo $movie->duration;
  echo '<br>';
  echo $movie->poster;
  echo '<br>';
  echo '<hr>';


}

  



?>