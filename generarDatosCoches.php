<?php
    //Se crea un array con dichos datos: datos de los clientes
    $datos  = array(
        array('marca'=>'Ford','modelo'=> 'Focus', 'color'=>'gris','puertas'=>5),
        array('marca'=>'Ford','modelo'=> 'Fiesta', 'color'=>'amarillo','puertas'=>5),
        array('marca'=>'Citroen','modelo'=> 'c4', 'color'=>'gris','puertas'=>5),
        array('marca'=>'Citroen','modelo'=> 'kactus', 'color'=>'gris','puertas'=>5),
        array('marca'=>'Peugeot','modelo'=> 'Focus', 'color'=>'gris','puertas'=>5),
        array('marca'=>'Peugeot','modelo'=> 'Fcus', 'color'=>'gris','puertas'=>5),
        array('marca'=>'Renault','modelo'=> 'Focu', 'color'=>'gris','puertas'=>5),
        array('marca'=>'Renault','modelo'=> 'Focus', 'color'=>'gris','puertas'=>5),
        array('marca'=>'Dacia','modelo'=> 'Sandero', 'color'=>'gris','puertas'=>5),
        array('marca'=>'Dacia','modelo'=> 'Duster', 'color'=>'blanco','puertas'=>5),
    );


    // Escribir los datos en un fichero json
    $datoscodificados = json_encode($datos);
    // Guardar en el fichero
    file_put_contents("coches.json", $datoscodificados . "\n", FILE_APPEND);
    // Confirmación
    echo "DATOS GUARDADOS!";
?>
