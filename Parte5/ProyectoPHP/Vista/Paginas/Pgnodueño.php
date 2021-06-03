<!DOCTYPE html>
<?php
include("Controler/Controlernodueño.php");
$query = QueryConsulta();
?>
<html lang="es">
    <head width="200" height="200">
        <meta charset="UTF-8">
        <link rel='stylesheet' type="text/css" href="Vista/CSS/Vistas.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <table align='center' class="blueTable">
            <thead>
                <tr>
                    <th colspan="4" align='center'><H2>Mascotas</H2></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th width="30%" align='center'><H3>id</H3>
                    <th width="30%" align='center'><H3>nombre</H3></th>
                    <th width="30%" align='center'><H3>tipo de mascota</H3></th>
                </tr>
                <?php
                while ($f = $query->fetch_object()){
                ?>
                <tr>

                    <td align='center'><H3><?php echo $f->idmascota?></H3></td>
                    <td align='center'><H3><?php echo $f->nombre?></H3></td>
                    <td align='center'><H3><?php echo $f->descripcion?></H3></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        
    </body>
    

</html>
