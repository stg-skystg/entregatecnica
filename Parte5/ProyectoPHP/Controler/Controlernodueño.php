<?php
include("model/Modelnodueño.php");
    function QueryConsulta(){
        $query="SELECT idmascota,mascota.nombre,tipo_mascota.descripcion FROM `mascota`INNER join tipo_mascota on mascota.tipo_mascota = tipo_mascota.idtipo_mascota where propietario is null ORDER BY mascota.nombre DESC";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }
?>