<?php
$title = "Registro";
ob_start();
?>

<?php

include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

$nombreUser=$_POST['nombre_usuario'];

$buscarusuario="SELECT * FROM  persona WHERE nombre_usuario ='$nombreUser'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);

if($count==1){
    echo"<h2>El usuario ya esta registrado</h2>";
    echo "<h4><a href='./Registro.php'>Nuevo registro</a></h4>";

}else{

    mysqli_query($conexion,"INSERT INTO persona(nombre_usuario,carrera,no_cuenta,direccion,telefono,email,password)
        VALUES(
            '$_POST[nombre_usuario]',
            '$_POST[carrera]',
            '$_POST[no_cuenta]',
            '$_POST[direccion]',
            '$_POST[telefono]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        
        echo "<br> <h1>Usuario creado con exito</h1>";

        echo "
        <a href='./Registro.php' class='waves-effect waves-light btn green'>Nuevo registro</a>
        <a href='./Principal.php' class='waves-effect waves-light btn orange'>Ver registros</a>
        ";
}
?>

<?php
$content = ob_get_clean();
include './CSS/Plantilla.php';
?>