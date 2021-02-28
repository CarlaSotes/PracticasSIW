<?php

    //SE PUEDEN IMPRIMIR ERRORES: INVESTIGAR!!!! (SHOW ERRORS IN PHP :))

    //Se crea un array con dichos datos: datos de los clientes
    $datos  = array(
        array('nombre'=>'Chris','apellido1'=> 'Broad', 'apellido2'=>'Abroad','telefono'=>8156787689,'poblacion'=>'southYamagata','provincia'=> 'YamagataPrefecture' ),
        array('nombre'=>'Natsuki', 'apellido1'=>'coldBox', 'apellido2'=>'LikeAMagic',8156787679, 'poblacion'=>'southYamagata','provincia'=>  'YamagataPrefecture'),
        array('nombre'=>'Sharla', 'apellido1'=>'sharmeloen', 'apellido2'=>'LikeAMagic',8156787679,'poblacion'=> 'southYamagata', 'provincia'=>'YamagataPrefecture'),
        array('nombre'=>'Alex', 'apellido1'=>'sharmelan', 'apellido2'=>'LikeAMagic',8156787679,'poblacion'=> 'southYamagata', 'provincia'=>'YamagataPrefecture'),
        array('nombre'=>'John', 'apellido1'=>'sharmeen', 'apellido2'=>'LikeAMagic',8156787679,'poblacion'=> 'southYamagata', 'provincia'=>'YamagataPrefecture'),
        array('nombre'=>'Aki', 'apellido1'=>'sharmeuoen', 'apellido2'=>'LikeAMagic',8156787679,'poblacion'=> 'southYamagata', 'provincia'=>'YamagataPrefecture'),
        array('nombre'=>'Joey', 'apellido1'=>'sharaloen', 'apellido2'=>'LikeAMagic',8156787679,'poblacion'=> 'southYamagata', 'provincia'=>'YamagataPrefecture'),
        array('nombre'=>'Conor', 'apellido1'=>'sharmeloen', 'apellido2'=>'LikeAMagic',8156787679,'poblacion'=> 'southYamagata', 'provincia'=>'YamagataPrefecture'),
        array('nombre'=>'Gunk', 'apellido1'=>'sharkeloen', 'apellido2'=>'LikeAMagic',8156787679,'poblacion'=> 'southYamagata', 'provincia'=>'YamagataPrefecture'),
        array('nombre'=>'Mikel', 'apellido1'=>'charmander', 'apellido2'=>'LikeAMagic',8156787679,'poblacion'=> 'southYamagata', 'provincia'=>'YamagataPrefecture'),
    );

    //Codificar los datos en formato json
    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($datos));
    fclose($fp);
?>