<?php
require_once ("Controler/ControlerLog.php");
session_start();

//if ($_SESSION['usuario']!=null || $_SESSION['usuario']!='') {
//    $salir = salir();
//}
if (isset($_POST["User_desk"])) {
    $validacion = Validar();   
}

$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'PgMenu';

require_once 'Vista/Paginas/Header.php';


        echo '<div class="topnav">
            <div class="login-container">
            </div>
        </div>';
            require_once 'Vista/Paginas/' . $pagina .'.php';
            require_once 'Vista/Paginas/Foother.php';
            require_once 'Vista/Paginas/Foother.php';
    
require_once 'Vista/Paginas/' . $pagina .'.php';

require_once 'Vista/Paginas/Foother.php';

?>