<!DOCTYPE html>
<?php
if ((isset($_POST['telefono'])) && ($_POST['telefono'] != '') && (isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['imei'])) && ($_POST['imei'] != '') && (isset($_POST['tipo_celular'])) && ($_POST['tipo_celular'] != '')) {

    include "model/model.php";
    $nuevo = new Usuario();
    $asd = $nuevo->setUsuario($_POST['telefono'], $_POST['nombre'], $_POST['imei'], $_POST['tipo_celular']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Examen practico</title>
        
    </head>
        
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>Examen Practico</h1>
                <hr/>
                <p class="lead">Ingreso y lectura de usuario</p>
            </header>
            <div class="row">
                <div class="col-lg-6">

                    <form action="#" method="post">
                        <h3>Nuevo Usuario</h3>                
                        Telefono: <input type="text" name="telefono"/>    
                        Nombre: <input type="text" name="nombre" /> 
                        imei: <input type="text" name="imei"/> 
                        Tipo telefono: <input type="text" name="tipo_celular"/>    
                        <br/>
                        <input type="submit" value="Crear" class="btn btn-success"/>
                    </form>
                </div>
                <div>
                    
                    <hr/>
                    <h3>Listado de usuarios</h3>
                    <a href="controller/controller.php"><i></i> Acceder al listado de usuarios</a>
                    <hr/>
                </div> 
            </div>
            
        </div>
    </body>
</html>