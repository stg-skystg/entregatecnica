<?php
include("model/Modellistatodasmasctoas.php");
    function QueryConsulta(){
        $query="SELECT idmascota,mascota.nombre,tipo_mascota.descripcion as propietario FROM `mascota`INNER join tipo_mascota on mascota.tipo_mascota = tipo_mascota.idtipo_mascota where mascota.propietario is null OR mascota.propietario is not null ORDER BY mascota.nombre ASC";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }
?>