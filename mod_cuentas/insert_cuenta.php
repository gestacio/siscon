<?php
if ($_POST) {
    $banco = $_POST['banco'];
    $cuenta = $_POST['cuenta'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];


    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();

    try {
        $consulta = "INSERT INTO cuentas (banco, cuenta, cedula, email)
                    VALUES ('$banco', '$cuenta', '$cedula', '$email')";
                    
        $resultado = $conexion->prepare($consulta);

        if ($resultado->execute()) {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("Cuenta Guardada exitosamente");
            window.location.replace("administrar_cuentas.php");
            </script>';

        } else {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("No se ha podido ingresar correctamente la cuenta");
            // window.location.replace("administrar_cuentas.php");
            </script>';
        }


    } catch(PDOException $exception) {
        $error = $exception->getMessage();
        echo "An Error has occurred " . $error;

    } catch (Exception $e) {
        $objeto = null;
        die("El error de Conexión es: " . $e->getMessage());
    }
} else {
    $objeto = null;
    die("Ha ocurrido un error en el envío del POST");
}