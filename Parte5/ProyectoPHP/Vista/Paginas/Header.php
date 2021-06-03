<?php
echo'
<html lang="es">
    <head width="200" height="200">
        <header> 
            <ul>
                <li class="$pagina =="PgMenu" ? "active" : "";"><a href="?p=PgMenu">Menu</a></li>
                <li class="$pagina =="PgListProduc" ? "active" : "";"><a href="?p=Pglistatodasmasctoas">Todas las masctoas</a></li>
                <li class="$pagina =="PgRegsProduct" ? "active" : ""; "><a href="?p=Pgnodueño">mascotas sin dueño</a></li>
                <li class="$pagina =="PgGaleria" ? "active" : ""; "><a href="?p=PgNotipo">Listado de tipos</a></li>
                <li class="$pagina =="PgRegsSolicit" ? "active" : ""; "><a href="?p=Pgmasdeunamascota">dueños con mas de una mascota</a></li>
                <li class="$pagina =="PgListSolicitudes" ? "active" : ""; "><a href="?p=Pgtipo">listo de tipos de mascotas</a></li>
                <li class="$pagina =="PgVideo" ? "active" : ""; "><a href="?p=PgNopropi">sin mascotas</a></li>
            </ul>
        </header>';
?>
