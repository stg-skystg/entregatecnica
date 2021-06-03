<?php
include("model/ModelNopropi.php");
    function QueryConsulta(){
        $query="select * from propietario se1 where NOT EXISTS (select null FROM mascota se2 WHERE se1.idpropietario = se2.propietario)";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }
?>