<?php
$title = "Inicio Error";
ob_start();
?>


<div class="row">
    <div>
        <h1>Login del Sistema</h1>
        <h4 style="color: #ff4646 ;">Error al introducir usuario</h4>
        
        <div class="col s12 m5">
        &nbsp;
            <form method="POST" action="logica/loguear.php">
                <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
                <br />
                <input type="password" name="clave" placeholder="Contraseña" />
                <br />

                <div>
                    <br> <br>
                    <button type="submit" name="submit" class="btn waves-effect waves-light blue">Iniciar Sesión</button>
                </div>
            </form> 
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
include './CSS/Plantilla.php';
?>


