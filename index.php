<?php  

require_once __DIR__ . '/db/Movies.php';
require_once __DIR__ . '/Models/Genre.php';


foreach ($movies as $movie ) {
  echo "<h3>" . $movie->title . "</h3>";
  echo '<br>';
  echo $movie->description;
  echo '<br>';
  echo $movie->duration;
  echo '<br>';
  echo $movie->poster;
  echo '<br>';
  echo $movie->votes;
  echo '<br>';
  foreach ($movie->genre as $key) {
    echo $key->genre . '<br>';
  };
  echo '<br>';
  echo '<hr>';


}

  
?>