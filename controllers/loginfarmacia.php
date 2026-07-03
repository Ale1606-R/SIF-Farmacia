<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Forzar a que PHP nos muestre cualquier error oculto en la pantalla
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once dirname(__DIR__) . "/Config/conexion.php";
    
    // Comprueba si la base de datos se conecto bien
    if (!$conexion) {
        die("Error crítico: No se pudo conectar a la base de datos MySQL. " . mysqli_connect_error());
    }
    
    $usuario = mysqli_real_escape_string($conexion, $_POST['Nombre_usuario']);
    $clave   = mysqli_real_escape_string($conexion, $_POST['Clave_acceso']);
    
    // Imprime que esta recibiendo php
    echo "Intentando entrar con el Usuario: [" . $usuario . "] y la Clave: [" . $clave . "]<br>";

    $query = "SELECT * FROM usuarios WHERE Nombre_usuario = '$usuario' AND Clave_acceso = '$clave'";
    $resultado = mysqli_query($conexion, $query);
    
    if (!$resultado) {
        die("Error en la consulta SQL: " . mysqli_error($conexion));
    }

    $filas = mysqli_num_rows($resultado);
    echo "Filas encontradas en la base de datos: " . $filas . "<br>";

    if ($filas == 1) {
        $datosusuario =mysqli_fetch_assoc($resultado);

        $_SESSION['Nombre_usuario'] = $usuario;

        $_SESSION['Rol_sistema'] =$datosusuario['rol'];

        switch($_SESSION['rol']){
            case 'Administrador':
            header("Location: ../views/dashboard.php");
            break;

            /*case 'Bodega':
                header(); // La ruta de la interfaz del de bodega 
                break;

            /*case 'Cajero':
                header(); // La ruta de la interfaz del de Cajero
                break; */    

        }

        header("Location: ../views/dashboard.php");
        exit();
    } else {
        echo "<h3>La base de datos rechazó los datos porque no coinciden exactamente.</h3>";
        echo "<a href='../views/login.php'>Volver a intentar</a>";
    }
}
?>