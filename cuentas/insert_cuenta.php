<?php
if ($_POST) {
    $titular = $_POST['titular'];
    $cuenta = $_POST['cuenta'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];


    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();

    $consulta = "INSERT INTO cuentas (titular, cuenta, cedula, email)
                    VALUES ('$titular', '$cuenta', '$cedula', '$email')";

    $resultado = $conexion->prepare($consulta);

    if ($resultado->execute()) {
        $objeto = null;
        echo '<script type="text/javascript">
            alert("Cuenta Guardada exitosamente");
            window.location.replace("cuentas.php");
            </script>';
    } else {
        $objeto = null;
        echo '<script type="text/javascript">
            alert("No se ha podido ingresar correctamente la cuenta");
            // window.location.replace("cuentas.php");
            </script>';
    }
} else {
    $objeto = null;
    die("Ha ocurrido un error en el envío del POST");
}
