<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EXAMEN PRACTICO</title>
        
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>EXAMEN PRACTICO</h1>
            </header>
            <div class="col-lg-6 text-center">
                <hr/>
                <h3>Listado de usuarios</h3>
                <table class="table">
                    <tr>
                        <td><strong>TELEFONO</strong></td>
                        <td><strong>NOMBRE</strong></td>
                        <td><strong>IMEI</strong></td>
                        <td><strong>TIPO CELULAR</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ?>
                        <tr>
                            <td><?php echo $datos[$i]["telefono"]; ?></td>
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td><?php echo $datos[$i]["imei"]; ?></td>
                            <td><?php echo $datos[$i]["tipo_celular"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href="../index.php"> <i></i> Volver a la página principal</a>
                <hr/>
            </div> 
            
        </div>
    </body>
</html>