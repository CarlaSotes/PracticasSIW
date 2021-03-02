<!DOCTYPE html>
<html lang="es">
    <body>
        <?php
            //  MOSTRAR ERRORES
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            // Datos de poblaciones
            $datos  = array('Pamplona','Tudela','Arre','Estella','Etxarri','Alsasua',
                    'Tafalla','Baztán','Sangüesa','Olite','Corella','Aranguren','Viana',
                    'Lesaca','Bera');

            // Obtener fichero plantilla
            $plantilla4 = file_get_contents("plantilla04.html");

            // Dividir por ##fila##
            $trozos = explode("##fila##", $plantilla4);

            // Iniciar una variable que contendrá el cuerpo de toda la pagina
            $cuerpo = "";
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

        ?>
    </body>
</html>