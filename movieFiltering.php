<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $movies = [
    ["name" => "The Shawshank Redemption", "releaseYear" => 1994],
    ["name" => "The Godfather", "releaseYear" => 1972],
    ["name" => "The Dark Knight", "releaseYear" => 2008],
    ["name" => "Pulp Fiction", "releaseYear" => 1994],
    ["name" => "The Lord of the Rings: The Return of the King", "releaseYear" => 2003],
    ["name" => "Forrest Gump", "releaseYear" => 1994],
    ["name" => "Inception", "releaseYear" => 2010],
    ["name" => "The Matrix", "releaseYear" => 1999],
    ["name" => "The Empire Strikes Back", "releaseYear" => 1980],
    ["name" => "The Godfather Part II", "releaseYear" => 1974],
    ["name" => "Fight Club", "releaseYear" => 1999],
    ["name" => "The Lord of the Rings: The Fellowship of the Ring", "releaseYear" => 2001],
    ["name" => "Interstellar", "releaseYear" => 2014],
    ["name" => "Goodfellas", "releaseYear" => 1990],
    ["name" => "City of God", "releaseYear" => 2002],
    ["name" => "Se7en", "releaseYear" => 1995],
    ["name" => "The Silence of the Lambs", "releaseYear" => 1991],
    ["name" => "The Usual Suspects", "releaseYear" => 1995],
    ["name" => "Léon: The Professional", "releaseYear" => 1994],
    ["name" => "Saving Private Ryan", "releaseYear" => 1998],
    ["name" => "Spirited Away", "releaseYear" => 2001],
    ["name" => "The Green Mile", "releaseYear" => 1999],
    ["name" => "Gladiator", "releaseYear" => 2000],
    ["name" => "The Departed", "releaseYear" => 2006],
    ["name" => "The Prestige", "releaseYear" => 2006],
    ["name" => "Memento", "releaseYear" => 2000],
    ["name" => "Whiplash", "releaseYear" => 2014],
    ["name" => "The Dark Knight Rises", "releaseYear" => 2012],
    ["name" => "Django Unchained", "releaseYear" => 2012],
    ["name" => "The Lion King", "releaseYear" => 1994],
    ["name" => "Back to the Future", "releaseYear" => 1985],
    ["name" => "Casablanca", "releaseYear" => 1942],
    ["name" => "Psycho", "releaseYear" => 1960],
    ["name" => "The Shining", "releaseYear" => 1980],
    ["name" => "12 Angry Men", "releaseYear" => 1957],
    ["name" => "Braveheart", "releaseYear" => 1995],
    ["name" => "The Grand Budapest Hotel", "releaseYear" => 2014],
    ["name" => "Inglourious Basterds", "releaseYear" => 2009],
    ["name" => "A Beautiful Mind", "releaseYear" => 2001],
    ["name" => "The Revenant", "releaseYear" => 2015],
    ["name" => "Joker", "releaseYear" => 2019],
    ["name" => "Parasite", "releaseYear" => 2019],
    ["name" => "Once Upon a Time in Hollywood", "releaseYear" => 2019],
    ["name" => "The Social Network", "releaseYear" => 2010],
    ["name" => "The Intouchables", "releaseYear" => 2011],
    ["name" => "Capernaum", "releaseYear" => 2018],
    ["name" => "The Hunt", "releaseYear" => 2012],
    ["name" => "Blade Runner 2049", "releaseYear" => 2017],
    ["name" => "The Big Lebowski", "releaseYear" => 1998]
];


  function filterMovieList($movies, $releaseYear) {
    $filteredMovies = [];

    foreach($movies as $movie) {
      if($movie['releaseYear'] >= $releaseYear) {
        $filteredMovies[] = $movie;
      }
    }

    return $filteredMovies;
  }
  ?>

<ul>
  <?php foreach(filterMovieList($movies, 2000) as $movie) : ?>
    <li>
      <?= $movie['name'] ?> (<?= $movie['releaseYear'] ?>)
    </li>
  <?php endforeach; ?>
</ul>
</body>
</html>



$books = [
  [
    'name' => 'Atomic Habits',
    'author' => 'James Clear',
    'releaseYear' => '1950',
    'purchaseUrl' => 'example.com'
  ],
  [
    'name' => 'Do Androids Dream of Electric Sheep',
    'author' => 'Philip K. Dick',
    'releaseYear' => '1968',
    'purchaseUrl' => 'example.com'
  ],
  [
    'name' => 'The Martian',
    'author' => 'Andy Weir',
    'releaseYear' => '2000',
    'purchaseUrl' => 'example.com'
  ],
  ];

  function filter($items, $fn) {
    $filteredItems = [];

    foreach ($items as $item) {
      if ($fn($item)) {
        $filteredItems[] = $item;
      }
    }

    return $filteredItems;
  }

  $filteredBooks = filter($books, function($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2000;
  });
