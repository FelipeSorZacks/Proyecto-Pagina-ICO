<?php
$title = "Eliminar Usuario";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style=" text-align: center;" >Elimina Usuario</h1>
    <form style=" text-align: center;" method="POST" action="./logica/deleteUsuario.php">

        <input  type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
        <br />
        <button type="submit">Eliminar usuario</button>

    </form>
    
    <h1><a href="Principal.php">Inicio de listas</a></h1>

</body>

</html>

<?php
$content = ob_get_clean();
include './CSS/Plantilla.php';
?>