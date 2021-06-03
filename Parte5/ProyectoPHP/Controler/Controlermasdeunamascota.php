<?php
include("model/Modelmasdeunamascota.php");
    function QueryConsulta(){
        $query="SELECT propietario.nombre as propietario, COUNT(propietario) as cantidad FROM `mascota` INNER join propietario on mascota.propietario = propietario.idpropietario INNER join tipo_mascota on mascota.tipo_mascota = tipo_mascota.idtipo_mascota GROUP BY propietario HAVING COUNT(propietario) > 1";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }
?>