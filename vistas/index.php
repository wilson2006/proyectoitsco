<?php
/*
  Inicio del sistema
 */

include('../php/conexion.php');

$query = "select * from productos";
$result = mysql_query($query, $conexion) or die("Consulta incorrecta " . mysql_error());
;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>  
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container">
            <h1>¡Hola mundo! </h1>
            <table class="table table-hover table-condensed table-responsive">
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>PVP</td>
                    </tr>
                </thead>
                <?php
                while ($row = mysql_fetch_array($result)){                                  
                ?>
                <tbody>
                    <tr>
                        <td><?php print $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo number_format($row[3],"2",".",","); ?></td>
                        <td><?php echo number_format($row[3],"2",".",","); ?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>

        <!-- Librería jQuery requerida por los plugins de JavaScript -->
        <script src="../js/jquery.js"></script>

        <!-- Todos los plugins JavaScript de Bootstrap (también puedes
             incluir archivos JavaScript individuales de los únicos
             plugins que utilices) -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>






