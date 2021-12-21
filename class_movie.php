<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    body {
        width: 80%;
        margin: 0 auto;
    }
    h1 {
        text-align: center;
    }
    .card-container {
        display: flex;
    }
    .card {
        width: 20%;
        margin: 15px;
    }
    </style>
</head>
<body>
    <a href="index.php">Volver</a>
    <h1>Creación de varios objetos Película</h1>
    <div class="card-container">
    <?php

        class Movie {
           
            var $name;
            var $year;
            var $duration;
            var $image;
        
            public function __construct($name, $year, $duration, $image)
            {
                $this->name = $name;
                $this->year = $year;
                $this->duration = $duration;
                $this->image = $image;
            }

            public function getName()
            {
                return $this->name;
            }
            
            public function getYear()
            {
                return $this->year;
            }
        
            public function getDuration()
                {
                    return $this->duration;
                }
            public function getImage()
            {
                return $this->image;
            }
        
        }
        
            $movie1 = new Movie('MATRIX RESURRECTIONS', '2021', '2h 28min', 'https://placeimg.com/640/480/any' );
            $movie2 = new Movie('Spider-Man: No Way Home', '2021', '2h 29min', 'https://placeimg.com/640/480/animals');
            $movie3 = new Movie('Cazafantasmas: Más allá', '2021', '2h 04min', 'https://placeimg.com/640/480/nature');
            $listOfMovies = array($movie1, $movie2, $movie3);
    ?>
    
    <?php
    foreach ($listOfMovies as $valor): ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $valor->getImage(); ?>" class="card-img-top" alt="Carátula de la película">
            <div class="card-body">
                <h5 class="card-title"><?php echo $valor->getName(); ?></h5>
                <p class="card-text"><?php echo $valor->getYear(); ?></p>
                <a href="#" class="btn btn-primary"><?php echo $valor->getDuration(); ?></a>
            </div>
        </div>

        <?php endforeach; ?>
    </div>

    
</body>
</html>