<!DOCTYPE html>
<html lang="es">
    <body>
        <?php
            // Obtener los posibles valores del formulario y donde se van a depositar
            $nombre = $_GET["user_name"];
            $apellido1 = $_GET["user_surname1"];
            $apellido2 = $_GET["user_surname2"];
            $direccion = $_GET["user_add"];
            $poblacion = $_GET["user_pob"];
            $provincia = $_GET["user_prov"];
            $tel1 = $_GET["user_tel1"];

            /*
                echo "<table>";
                echo "<tr>";
                echo "<td>";
                echo "Nombre";
                echo "</td>";
                echo "<td>";
                echo "$nombre";
                echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>";
                echo "Apellido 1";
                echo "</td>";
                echo "<td>";
                echo "$apellido1";
                echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>";
                echo "Apellido 2";
                echo "</td>";
                echo "<td>";
                echo "$apellido2";
                echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>";
                echo "Dirección";
                echo "</td>";
                echo "<td>";
                echo "$direccion";
                echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>";
                echo "Población";
                echo "</td>";
                echo "<td>";
                echo "$poblacion";
                echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>";
                echo "Provincia";
                echo "</td>";
                echo "<td>";
                echo "$provincia";
                echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>";
                echo "Teléfono 1";
                echo "</td>";
                echo "<td>";
                echo "$tel1";
                echo "</td>";
                echo "</tr>";
    */
            // Indicar fichero plantila
            $cadena = file_get_contents("plantilla05.html");
            // Dividir por ##fila##
            $trozos = explode("##fila##", $cadena);

            // Iniciar una variable que contendrá el cuerpo de toda la pagina
            $cuerpo = "";

            // Iterar para cada persona y meterla en la tabla (tendrá tantas filas como elementos en $personas)
            echo "<table>";

            // Copiar el valor de la plantilla para que no se pierda
            $aux = $trozos[1];

            // Como tenemos marcas guardadas en variable aux, basta con sustituir con lo que nos interesa
            $aux = str_replace('##nombre##', $nombre,$aux);
            $aux = str_replace('##apellido1##', $apellido1,$aux);
            $aux = str_replace('##apellido2##', $apellido2,$aux );
            $aux = str_replace('##direccion##', $direccion,$aux);
            $aux = str_replace('##poblacion##', $poblacion,$aux);
            $aux = str_replace('##provincia##', $provincia,$aux);
            $aux = str_replace('##telefono##', $tel1,$aux);

            #ahora podemos imprimir de manera bonita lo que nos ha llegado
            echo "<tr>";
            echo "<th> $trozos[0] </th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> $aux </td>";
            echo "</tr>";
            $cuerpo .=$aux;

            echo "</table>";
        ?>
    </body>
</html>



