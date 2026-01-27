<?php

/**
 * Archivo principal de la aplicación
 *
 * Este es el punto de entrada de la aplicación web PHP. Muestra información
 * de un usuario utilizando clases y funciones auxiliares. Demuestra el uso
 * de la clase Usuario y de funciones utilitarias.
 *
 * @package App
 * @author Alumno
 * @version 1.0
 * @since 1.0
 *
 * @uses Usuario Clase para gestionar información de usuarios
 * @uses saludo() Función auxiliar para mostrar un mensaje de bienvenida
 */

require_once 'src/Usuario.php';
require_once 'src/utilidades.php';

// Crear una instancia de Usuario
$usuario = new Usuario("Ana", "García", 23);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación PHP Documentada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aplicación PHP de ejemplo</h1>
        <p><strong><?php echo htmlspecialchars($usuario->getNombreCompleto()); ?></strong></p>
        <p>Edad: <?php echo htmlspecialchars($usuario->getEdad()); ?> años</p>
        <p>Mensaje: <?php echo saludo(); ?></p>
    </div>
</body>
</html>
