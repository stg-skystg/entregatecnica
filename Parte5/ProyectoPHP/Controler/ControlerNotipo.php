<?php
include("model/ModelNotipo.php");
    function QueryConsulta(){
        $query="SELECT tipo_mascota.descripcion, COUNT(mascota.tipo_mascota) as cantidad FROM `mascota` INNER join tipo_mascota on mascota.tipo_mascota = tipo_mascota.idtipo_mascota GROUP BY mascota.tipo_mascota ORDER BY mascota.nombre DESC";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }
?>