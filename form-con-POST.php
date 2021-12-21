<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Intro PHP</title>
    <style>
        body {
        width: 80%;
        margin: 0 auto;
    }
        h1 {
            text-align: center;
        }

        form {
            width: 50%;
            margin: 3vw auto;
        }

        #submit {
            display: block;
            width: 150px;
            margin: 20px auto;
        }
        
        #datos_form {
            width: 250px;
            margin: 0 auto;
        }
        #datos_form h1 {
             font-size: 16px;
         }
    </style>
</head>

<body>
<a href="index.php">Volver</a>
    <h1>Formulario Intro PHP</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Escribe tu mensaje</label>
            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="sí" name="radio_button" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Acepto politica de cookies
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="sí" id="check" name="check">
            <label class="form-check-label" for="flexCheckDefault">
                Acepto política de privacidad
            </label>
        </div>
        <button class="btn btn-primary" type="submit" id="submit" name="submit">Submit form</button>
    </form>
        <div id="datos_form">
    <?php
    
        //2.Haz un formulario con un input de texto, un input de tipo “radio” y otro de tipo selector. Usa el Método POST y escribe en un documento HTML los datos enviados.
    if (isset($_POST['submit'])) {
        echo "<h1>Datos del formulario</h1>";
        $message = $_POST["message"];
        $radioButton = $_POST["radio_button"];
        echo "Mensaje escrito: " . $message . "</br>";
        echo "Acepto política de cookies: " . $radioButton . "</br>";
     
        
        if (isset($_POST["check"])) {
            $check = $_POST["check"];
            echo "Acepto politica de privacidad: " . $check . "</br>";
        }
    }
    
    
    ?>
        </div>


</body>

</html>