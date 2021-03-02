<!DOCTYPE html>
<html lang="es">
    <body>
        <?php
            //  MOSTRAR ERRORES
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            // Unir con html
            $plantilla6 = file_get_contents("ejercicio06.html");

            // Obtener los datos
            $personas = file_get_contents("personass.json");
            $coches = file_get_contents("coches.json");

            // Dividir por ##fila## que nos devuelve un array
            /**
             * trozos [0] está el select
             * trozos [2] está la tabla (el contenido)
             * trozos [5] está la otra tabla (el contenido)
             *
             */
            $trozos = explode("##fila##", $plantilla6);

            // Decodificar archivo json
            $personas = json_decode($personas);
            $coches = json_decode($coches);

            // Iniciar una variable que contendrá el cuerpo de toda la pagina
            $cuerpo = "";




            /**
             * PARTE SELECT
             */
            // Datos de poblaciones
            $datos  = array('Pamplona','Tudela','Arre','Estella','Etxarri','Alsasua',
                'Tafalla','Baztán','Sangüesa','Olite','Corella','Aranguren','Viana',
                'Lesaca','Bera');

            // Iterar para cada persona y meterla en la tabla (tendrá tantas filas como elementos en $personas)
            echo "<label>";
            echo "<select>";
            for($i=0; $i<sizeof($datos); $i++){
                // Copiar el valor de la plantilla para que no se pierda
                $aux = $trozos[1];
                // Como tenemos marcas guardadas en variable aux, basta con sustituir con lo que nos interesa
                $aux = str_replace("##pob##", $datos[$i],$aux);
                // Concatenar resultados
                $cuerpo .=$aux;
            }
            // Imprimir resultado al final porque en cuerpo ya estarán todas las opciones
            echo "<option>";
            echo $cuerpo;
            echo "</option>";
            echo "</select>";
            echo "</label>";


            echo "<br>";
            echo "<br>";

            /**
            * PRIMERA TABLA
            */
            $cuerpo = "";
            // Iterar para cada persona y meterla en la tabla (tendrá tantas filas como elementos en $personas)
            echo "<table>";
            // Imprimir cabecera
            echo "<tr>";
            echo "<th> $trozos[2] </th>";
            echo "</tr>";

            for($j=0; $j<sizeof($personas); $j++){
                // Crear un array auxiliar donde ir almacenando cada persona
                $array_aux1 = [];

                // Transformar cada persona en array asociativo (teníamos un array de arrays en $personas)
                foreach ($personas[$j] as $firma => $firma_valor){
                    array_push($array_aux1, $firma_valor);
                }

                // Copiar el valor de la plantilla para que no se pierda
                $aux1 = $trozos[3];

                // Como tenemos marcas guardadas en variable aux, basta con sustituir con lo que nos interesa
                $aux1 = str_replace('##nombre##', $array_aux1[0],$aux1);
                $aux1 = str_replace('##apellido1##', $array_aux1[1],$aux1);
                $aux1 = str_replace('##apellido2##', $array_aux1[2],$aux1 );
                $aux1 = str_replace('##telefono##', $array_aux1[3],$aux1);
                $aux1 = str_replace('##poblacion##', $array_aux1[4],$aux1);
                $aux1 = str_replace('##provincia##', $array_aux1[5],$aux1);

                // ahora podemos imprimir de manera bonita lo que nos ha llegado
                echo "<tr>";
                echo "<td> $aux1 </td>";
                echo "</tr>";
                $cuerpo .=$aux1;

            }
            echo "</table>";

            echo "<br>";

            /**
             * SEGUNDA TABLA
             */
            $cuerpo = "";
            // Iterar para cada persona y meterla en la tabla (tendrá tantas filas como elementos en $personas)
            echo "<table>";
            // Imprimir cabecera
            echo "<tr>";
            echo "<th> $trozos[4] </th>";
            echo "</tr>";

            for($j=0; $j<sizeof($coches); $j++){
                // Crear un array auxiliar donde ir almacenando cada persona
                $array_aux2 = [];

                // Transformar cada persona en array asociativo (teníamos un array de arrays en $personas)
                foreach ($coches[$j] as $firma => $firma_valor){
                    array_push($array_aux2, $firma_valor);
                }

                // Copiar el valor de la plantilla para que no se pierda
                $aux2 = $trozos[5];

                // Como tenemos marcas guardadas en variable aux, basta con sustituir con lo que nos interesa
                $aux2 = str_replace('##marca##', $array_aux2[0],$aux2);
                $aux2 = str_replace('##modelo##', $array_aux2[1],$aux2);
                $aux2 = str_replace('##color##', $array_aux2[2],$aux2 );
                $aux2 = str_replace('##puertas##', $array_aux2[3],$aux2);

                // ahora podemos imprimir de manera bonita lo que nos ha llegado
                echo "<tr>";
                echo "<td> $aux2 </td>";
                echo "</tr>";
                $cuerpo .=$aux2;

            }
            echo "</table>";
        ?>
    </body>
</html>
