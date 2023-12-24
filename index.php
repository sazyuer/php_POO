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
        //Sin constructor
        $persona1 = new Persona();
        $persona1->nombre = "Juan";
        $persona1->apellidos = "Perez García";
        $persona1->edad = 25;

        echo "<br>Nombre: " . $persona1-> nombre;
        echo "<br>Apellidos: " . $persona1->apellidos;
        echo "<br>Edad: " . $persona1->edad;

        //Con constructor
        class Libro {
            public $titulo;
            public $autor;
            public $editorial;
            public $precio;

            public function __construct($titulo, $autor, $editorial, $precio) {
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->editorial = $editorial;
                $this->precio = $precio;
            }

        }
        echo "<br><br>";
        $libro1 = new Libro("El Quijote", "Cervantes", "Anaya", 20);
        echo "<br>Titulo: " . $libro1->titulo;
        echo "<br>Autor: " . $libro1->autor;
        echo "<br>Editorial: " . $libro1->editorial;
        echo "<br>Precio: " . $libro1->precio . " €";
    ?>

    
</body>
</html>