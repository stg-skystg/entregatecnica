<?php
include("model/Modeltipo.php");
    function QueryConsulta1(){
        $query="SELECT descripcion,count(descripcion) as cantidad FROM `tipo_mascota` INNER JOIN mascota on tipo_mascota.idtipo_mascota = mascota.tipo_mascota GROUP BY idtipo_mascota";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }

    function QueryConsulta2(){
        $query="SELECT propietario.nombre,COUNT(mascota.nombre) AS cantidad FROM `propietario` INNER JOIN mascota on propietario.idpropietario = mascota.propietario GROUP BY propietario.nombre";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }
?>