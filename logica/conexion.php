<?php
$title = "Conexion";

$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "Sharilamejor1";
$db_name = "test_php";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    echo "<h1>MySQL no le está dando permisos para ejecutar consultas. Verificar error: " . $conexion->connect_error . "</h1>";
} else {
    echo "<h1>Conexión exitosa a la BD</h1>";
}


$content = ob_get_clean();
?>
