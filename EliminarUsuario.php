<?php
$title = "Eliminar Usuario";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1 style=" text-align: center;" >Eliminar Usuario</h1>
    <hr>
    <p></p>
    &nbsp;
    <form style=" text-align: center;" method="POST" action="./deleteUsuario.php">

        <input  type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
        <br />
        &nbsp;
        <p></p>
        <button type="submit" name="submit" class="btn waves-effect waves-light blue">Eliminar usuario</button>

    </form>
 
    <div class="center-align" style="margin-top: 20px;">
        <a href='./Registro.php' class="waves-effect waves-light btn green">Nuevo registro</a>
        <a href='./Principal.php' class="waves-effect waves-light btn orange">Ver registros</a>
    </div>

</body>

</html>

<?php
$content = ob_get_clean();
include './CSS/Plantilla.php';
?>