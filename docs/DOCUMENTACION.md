# Documentación de la Aplicación PHP

## Descripción General

Esta es una aplicación web PHP de ejemplo completamente documentada. Demuestra el uso de clases, funciones auxiliares y documentación PHPDoc.

## Estructura del Proyecto

```
proyecto-php/
├── src/
│   ├── Usuario.php          # Clase Usuario
│   └── utilidades.php       # Funciones auxiliares
├── docs/                     # Documentación generada
├── .github/
│   └── workflows/            # Configuración de GitHub Actions
├── index.php                 # Archivo principal
├── phpdoc.xml               # Configuración de phpDocumentor
├── composer.json            # Dependencias del proyecto
├── .gitignore               # Archivos ignorados por Git
└── README.md                # Este archivo
```

## Clases

### Clase Usuario

Ubicación: `src/Usuario.php`

Representa a un usuario de la aplicación con los siguientes atributos:

**Propiedades privadas:**
- `$nombre` (string): Nombre del usuario
- `$apellidos` (string): Apellidos del usuario  
- `$edad` (int): Edad del usuario en años

**Métodos públicos:**

#### Constructor
```php
public function __construct(string $nombre, string $apellidos, int $edad)
```
Inicializa una nueva instancia de Usuario.

#### getNombreCompleto()
```php
public function getNombreCompleto(): string
```
Devuelve el nombre completo del usuario combinando nombre y apellidos.

#### getEdad()
```php
public function getEdad(): int
```
Devuelve la edad del usuario.

#### getNombre()
```php
public function getNombre(): string
```
Devuelve el nombre del usuario.

#### getApellidos()
```php
public function getApellidos(): string
```
Devuelve los apellidos del usuario.

## Funciones Auxiliares

Ubicación: `src/utilidades.php`

### saludo()
```php
function saludo(): string
```
Devuelve un mensaje de bienvenida para la aplicación.

**Retorno:** String con el mensaje "Bienvenido a la aplicación documentada en PHP"

### validarEmail()
```php
function validarEmail(string $email): bool
```
Valida si un email tiene un formato correcto.

**Parámetros:**
- `$email` (string): El email a validar

**Retorno:** `true` si el email es válido, `false` en caso contrario

### sanitizar()
```php
function sanitizar(string $texto): string
```
Sanitiza una cadena de texto removiendo caracteres especiales y previniendo XSS.

**Parámetros:**
- `$texto` (string): El texto a sanitizar

**Retorno:** El texto sanitizado y seguro

## Archivo Principal

### index.php

El punto de entrada de la aplicación. Realiza las siguientes acciones:

1. Importa las clases y funciones necesarias
2. Crea una instancia de la clase Usuario
3. Muestra información del usuario en HTML

## Ejemplo de Uso

```php
<?php
require_once 'src/Usuario.php';
require_once 'src/utilidades.php';

// Crear un usuario
$usuario = new Usuario("Ana", "García", 23);

// Obtener información
echo $usuario->getNombreCompleto(); // Ana García
echo $usuario->getEdad();            // 23

// Usar funciones auxiliares
echo saludo();                        // Bienvenido a la aplicación documentada en PHP

// Validar email
if (validarEmail("usuario@example.com")) {
    echo "Email válido";
}
?>
```

## Estándares de Documentación

El código sigue los estándares PHPDoc definidos por:
- **PSR-5**: PHPDoc Standard para anotaciones de código
- **PSR-1**: Basic Coding Standard
- **PSR-12**: Extended Coding Style Guide

Cada función, clase y método está documentado con:
- Descripción clara del propósito
- @param: Definición de parámetros y tipos
- @return: Tipo de retorno y descripción
- @example: Ejemplos de uso cuando es relevante
- @since: Versión desde la que está disponible

## Generación de Documentación

### Requisitos
- PHP 7.4 o superior
- phpDocumentor 3.0 o superior
- Composer (gestor de dependencias de PHP)

### Instalación de Dependencias
```bash
composer install
```

### Generar Documentación HTML
```bash
vendor/bin/phpdoc
```

La documentación se genera en la carpeta `docs/html/`.

### Generar Documentación Markdown
```bash
vendor/bin/phpdoc -t docs/markdown -d src
```

## Seguridad

- El código utiliza type hints para mayor seguridad
- Las funciones sanitizar() previene ataques XSS
- validarEmail() valida entrada de usuario
- No se almacenan datos sensibles en el código

## Licencia

MIT License

## Autor

Alumno - Proyecto de documentación y CI/CD

## Versión

1.0.0 - 2026
