<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        width: 80%;
        margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 50%;
            margin: 50px;
            border-collapse: collapse;
        }
        th, td  {
            text-align: left;
            border: 1px solid grey;
            padding: 5px;
        }
        
    </style>
</head>
<body>
    <a href="index.php">Volver</a>
    <h1>Definiendo datos de un usuario utilizando un array asociativo</h1>
    
    <?php
        $userInfo = [
            "name" => "Nicolás",
            "age" => "23",
            "dni" => "1234956B",
            "city" => "Madrid",
            "email" => "nicolas1@gmail.com"
        ];
        $tableHTML = "<table>" . PHP_EOL . "<thead>" . "<tr>";

        foreach ($userInfo as $clave=>$valor)
   		{
            $tableHTML.="<th>$clave</th>";
            
        } $tableHTML.="</tr>" . "</thead>" ;
        foreach ($userInfo as $clave=>$valor)
   		{
               $tableHTML.="<td>$valor</td>" . PHP_EOL;
        }    
       
           $tableHTML.="</tr>" . "</table>";

        echo $tableHTML;
	
      
    ?>



</body>
</html>
 

 

 
