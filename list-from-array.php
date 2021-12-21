<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>List from array</title>
</head>
<style>
   body {
        width: 80%;
        margin: 0 auto;
    }
    h1 {
       text-align: center;
    }
</style>
<body>
      <a href="index.php">Volver</a>
      <h1>List from array</h1>

     <?php
         $listItems = ["Manzanas", "Peras", "Platanos", "Uvas"];
         
         $listHTML="<ul>" . PHP_EOL;
         foreach ($listItems as $value)
         {
            $listHTML.="<li>$value</li>" . PHP_EOL;
         }
         $listHTML.="</ul>";
         echo $listHTML;   
      ?> 
</body>
</html>


