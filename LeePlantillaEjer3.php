
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(n) {
        background-color: whitesmoke;
    }

    tr:nth-child(2n) {
        background-color: gray;
    }
</style>

<?php
    #se obtiene plantilla creada en el html
    $plantilla3 = file_get_contents('LeePlantillaEjer3.html');

    #se obtienen los resultados del fichero json: cada elemento es un array asociativo
    $personas = file_get_contents('results.json');

    #hacemos un explode para separar los datos de acuerdo a una etiqueta determinada
    $trozos = explode("##fila##", $plantilla3);

    #decodificamos el archivo json
    $personas = json_decode($personas);

    #iniciamos una variable que contendra el cuerpo de toda la pagina
    $cuerpo = "";

    #iteramos por cada persona
    echo "<table>";
    for($i = 0; $i<sizeof($personas); $i++){
        $array_aux = []; #se crea un array auxiliae
        foreach ($personas[$i] as $firma => $firma_valor){
            //echo $firma_valor;
            //echo "<br/>";

            array_push($array_aux,$firma_valor);

        }
        #print_r($array_aux[0]);
        $aux = $trozos[1]; #copiamos el valor de la plantilla para que no se pierda

        #como tenemos marcas guardadas en variable aux, basta con sustituir en si misma lo
        #que nos interesa
        $aux = str_replace('##nombre##', $array_aux[0],$aux);
        $aux = str_replace('##apellido1##', $array_aux[1],$aux);
        $aux = str_replace('##apellido2##', $array_aux[2],$aux );
        $aux = str_replace('##telefono##', $array_aux[3],$aux);
        $aux = str_replace('##poblacion##', $array_aux[4],$aux);
        $aux = str_replace('##provincia##', $array_aux[5],$aux);


        #ahora podemos imprimir de manera bonita lo que nos ha llegado
        echo "<tr>";
        echo "<td> $aux</td>";
        echo "</tr>";
        $cuerpo .=$aux;
    }echo "</table>";

    #Si se quiere comprobar correcto funcionamiento, descomentar esta linea
    #echo $cuerpo;
?>
