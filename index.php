<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <?php
        class Persona {
            public $nombre;
            public $apellidos;
            public $edad;
        }

        $persona1 = new Persona("Pedro", "García García", 25);

        echo "<br>Nombre: " . $persona1->nombre;
        echo "<br>Apellidos: " . $persona1->apellidos;
        echo "<br>Edad: " . $persona1->edad;
    ?>

    
</body>
</html>