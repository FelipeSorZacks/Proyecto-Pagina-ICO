<?php
$title = "Inicio Error";
ob_start();
?>


<h1>Login error</h1>
<div  >
    
        <form method="POST" action="logica/loguear.php">

            <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
            <br />
            <input type="text" name="clave" placeholder="Contraseña" />
            <br />

            <button type="submit">Inicar Sesion</button>

        </form>
    
</div>


<?php
$content = ob_get_clean();
include './CSS/Plantilla.php';
?>