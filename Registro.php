<?php
$title = "Registro";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
</head>
<body>

    <header  >
        <h3>Registro</h3>
    </header>
    <div>
        
    </div>
    
    <div>
        <form action="./logica/enviarRegistro.php" method="post">
        <!-- <form action="./tempo.php" method="get"> -->
            
            &nbsp;
            <div>
                <label for="nombre_usuario">Ingresa nombre usuario:</label>
                <input type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
                <label for="carrera">Carrera:</label>
                <input type="text" name="carrera" required maxlength="100" placeholder="Ingresa tu carrera">
                <br><br>
                <label for="email">Correo:</label>
                <input type="text" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                <br><br>
                <label for="no_cuenta">Numero de cuenta:</label>
                <input type="text" name="no_cuenta" required maxlength="100" placeholder="Ingresa tu numero de cuenta">
                <br><br>
                <label for="direccion">Direccion particular:</label>
                <input type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu direccion particular">
                <br><br>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" required maxlength="8" placeholder="Ingresa tu telefono">
                <br><br>
                <label for="password">contraseña:</label>
                <input type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
            <button type="submit" name="submit" class="btn waves-effect waves-light blue">Enviar registro</button>
        </form>
    </div>
</body>
</html>

<div class="center-align" style="margin-top: 20px;">
        <a href='./Registro.php' class="waves-effect waves-light btn green">Nuevo registro</a>
        <a href='./Principal.php' class="waves-effect waves-light btn orange">Ver registro</a>
</div>


<?php
$content = ob_get_clean();
include './CSS/Plantilla.php';
?>