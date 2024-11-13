<?php
// Título específico de la página
$title = "Inicio";
// Contenido específico de la página
ob_start();
?>

<div class="row">
    <div>
        <h1>Login del Sistema</h1>
        
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
// Almacena el contenido generado en una variable
$content = ob_get_clean();

// Incluye la plantilla
include './CSS/Plantilla.php';
?>
