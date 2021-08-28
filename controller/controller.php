<?php
    require_once("../model/model.php");
    $usuario = new Usuario();
    $datos = $usuario->getUsuario();
    require_once("../view/view.php");
?>