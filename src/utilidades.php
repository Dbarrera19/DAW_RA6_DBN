<?php

/**
 * Funciones auxiliares de la aplicación
 *
 * Este archivo contiene funciones utilitarias compartidas por la aplicación.
 * Proporciona funciones de uso general para la lógica de negocio.
 *
 * @package App
 * @author Alumno
 * @version 1.0
 * @since 1.0
 */

/**
 * Devuelve un saludo genérico
 *
 * Genera un mensaje de bienvenida para los usuarios de la aplicación.
 *
 * @return string Un mensaje de saludo y bienvenida
 *
 * @example
 * $saludo = saludo();
 * echo $saludo; // Bienvenido a la aplicación documentada en PHP
 */
function saludo(): string
{
    return "Bienvenido a la aplicación documentada en PHP";
}

/**
 * Valida si un email tiene un formato correcto
 *
 * Verifica si el email cumple con un formato básico de email válido.
 *
 * @param string $email El email a validar
 *
 * @return bool true si el email es válido, false en caso contrario
 *
 * @example
 * if (validarEmail("usuario@example.com")) {
 *     echo "Email válido";
 * }
 */
function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Sanitiza una cadena de texto removiendo caracteres especiales
 *
 * @param string $texto El texto a sanitizar
 *
 * @return string El texto sanitizado
 *
 * @example
 * $limpio = sanitizar("<script>alert('xss')</script>");
 * echo $limpio; // alert('xss')
 */
function sanitizar(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}
