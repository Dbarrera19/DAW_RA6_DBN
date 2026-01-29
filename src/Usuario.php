<?php

/**
 * Clase Usuario
 *
 * Representa a un usuario de la aplicación web. Gestiona la información básica
 * de un usuario incluyendo nombre, apellidos y edad.
 *
 * @package App
 * @author Alumno
 * @version 1.0
 * @since 1.0
 */
class Usuario
{
    /**
     * Nombre del usuario
     *
     * @var string
     */
    private string $nombre;

    /**
     * Apellidos del usuario
     *
     * @var string
     */
    private string $apellidos;

    /**
     * Edad del usuario
     *
     * @var int
     */
    private int $edad;

    /**
     * Constructor de la clase Usuario
     *
     * Inicializa una nueva instancia de Usuario con los datos proporcionados.
     *
     * @param string $nombre El nombre del usuario
     * @param string $apellidos Los apellidos del usuario
     * @param int $edad La edad del usuario
     *
     * @return void
     */
    public function __construct(string $nombre, string $apellidos, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    /**
     * Obtiene el nombre completo del usuario
     *
     * Devuelve el nombre completo combinando el nombre y los apellidos del usuario.
     *
     * @return string El nombre completo del usuario en formato "Nombre Apellidos"
     */
    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellidos;
    }

    /**
     * Obtiene la edad del usuario
     *
     * @return int La edad del usuario en años
     */
    public function getEdad(): int
    {
        return $this->edad;
    }

    /**
     * Obtiene el nombre del usuario
     *
     * @return string El nombre del usuario
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Obtiene los apellidos del usuario
     *
     * @return string Los apellidos del usuario
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }
}
