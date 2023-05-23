<?php

require_once __DIR__ . '/../Models/Movie.php';
require_once __DIR__ . '/../Models/Genre.php';



$movies =  [  
  new Movie(
    "Fast & Furious 10",
    "Un numero divino, 10 significa un ritorno all'unità, la fusione tra essere e non essere. Il numero 10 indica il completamento di un ciclo.",
    '2h 21min',
    'fast-x.jpeg',
    [
      new Genre('drammatic'),
      new Genre('comedy'),

    ]
      
),
  new Movie(
    "L'uomo sulla strada",
    "Irene ha 8 anni quando assiste al tragico incidente in cui suo padre perde la vita per mano di un pirata della strada che scappa via. Quella bimba, che non ricorda il volto dell'assassino, diventa una ragazzina ribelle con l'ossessione di farsi.",
    '1h 50min',
    'uomo-sulla-strada.jpeg',
    [
      new Genre('drammatic')

    ]


),


];

