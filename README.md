# 📋 Aplicación PHP Documentada con CI/CD

Aplicación web PHP sencilla con documentación completa, control de versiones con GitHub y configuración de integración continua mediante GitHub Actions.

## 📋 Índice

- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Uso](#uso)
- [Estructura del Repositorio](#estructura-del-repositorio)
- [Documentación](#documentación)
- [Control de Versiones con Git](#control-de-versiones-con-git)
- [Integración Continua](#integración-continua)
- [Seguridad](#seguridad)
- [Autor](#autor)

## ✨ Características

- ✅ Aplicación web PHP completamente documentada
- ✅ Código documentado con PHPDoc siguiendo estándares PSR-5
- ✅ Clases y funciones auxiliares bien estructuradas
- ✅ Control de versiones con Git y GitHub
- ✅ Integración continua con GitHub Actions
- ✅ Verificación automática de sintaxis PHP
- ✅ Generación automática de documentación
- ✅ Archivo .gitignore adecuadamente configurado
- ✅ README.md con instrucciones completas

## 📦 Requisitos

- **PHP**: 7.4 o superior
- **Composer**: Para gestionar dependencias
- **Git**: Para control de versiones
- **GitHub**: Cuenta para alojar el repositorio

### Requisitos opcionales (para generar documentación localmente)

- **phpDocumentor**: 3.0 o superior
- **Docker**: Para entornos de desarrollo aislados

## 🚀 Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/proyecto-php.git
cd proyecto-php
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Configurar permisos (Linux/Mac)

```bash
chmod +x src/
chmod 644 src/*.php
```

### 4. Servir la aplicación

**Opción 1: Servidor PHP integrado**
```bash
php -S localhost:8000
```

**Opción 2: Con Apache/Nginx**
- Configurar el DocumentRoot apuntando a la carpeta del proyecto
- Reiniciar el servidor web

Luego accede a `http://localhost:8000` en tu navegador.

## 💻 Uso

### Ejecutar la aplicación

La aplicación es muy sencilla. Al abrir `index.php` en tu navegador, verás:
- Un título "Aplicación PHP de ejemplo"
- Información de un usuario de ejemplo (Ana García, 23 años)
- Un mensaje de bienvenida

### Usar las clases

```php
<?php
require_once 'src/Usuario.php';
require_once 'src/utilidades.php';

// Crear un usuario
$usuario = new Usuario("Juan", "Pérez", 30);

// Acceder a la información
echo $usuario->getNombreCompleto(); // Juan Pérez
echo $usuario->getEdad();            // 30
echo saludo();                        // Bienvenido a la aplicación documentada en PHP
?>
```

### Usar funciones auxiliares

```php
<?php
require_once 'src/utilidades.php';

// Validar email
if (validarEmail("usuario@example.com")) {
    echo "Email válido";
}

// Sanitizar entrada de usuario
$entrada = $_GET['nombre'] ?? '';
$segura = sanitizar($entrada);
echo $segura;
?>
```

## 📁 Estructura del Repositorio

```
proyecto-php/
├── src/                          # Código fuente
│   ├── Usuario.php              # Clase Usuario con PHPDoc
│   └── utilidades.php           # Funciones auxiliares con PHPDoc
├── docs/                         # Documentación
│   ├── DOCUMENTACION.md          # Documentación técnica en Markdown
│   ├── html/                     # Documentación HTML generada
│   └── phpdoc-cache/             # Caché de phpDocumentor
├── .github/
│   └── workflows/
│       └── php-ci.yml            # GitHub Actions Workflow
├── .gitignore                    # Archivos ignorados por Git
├── README.md                     # Este archivo
├── phpdoc.xml                    # Configuración de phpDocumentor
├── composer.json                 # Dependencias del proyecto
└── index.php                     # Archivo principal de la aplicación
```

### Descripción de carpetas

| Carpeta | Descripción |
|---------|-------------|
| `src/` | Contiene el código fuente PHP de la aplicación |
| `docs/` | Documentación técnica y generada de la aplicación |
| `.github/workflows/` | Configuración de GitHub Actions para CI/CD |

## 📚 Documentación

### Estándares utilizados

El código sigue los siguientes estándares:

- **PHPDoc (PSR-5)**: Documentación en el código
- **PSR-1**: Estándar básico de codificación
- **PSR-12**: Guía extendida de estilo de código

### Tipos de documentación

#### 1. Documentación en el código (PHPDoc)

Cada archivo, clase y función está documentada con comentarios PHPDoc:

```php
/**
 * Obtiene el nombre completo del usuario
 *
 * Devuelve el nombre completo combinando nombre y apellidos.
 *
 * @return string El nombre completo en formato "Nombre Apellidos"
 */
public function getNombreCompleto(): string
{
    return $this->nombre . " " . $this->apellidos;
}
```

#### 2. Documentación Markdown

Consulta [docs/DOCUMENTACION.md](docs/DOCUMENTACION.md) para documentación técnica completa.

#### 3. Documentación HTML generada

Genera la documentación HTML con:
```bash
vendor/bin/phpdoc
```

La documentación se genera en `docs/html/`.

### phpDocumentor

**¿Por qué phpDocumentor?**

phpDocumentor es la herramienta estándar para documentar código PHP porque:

1. **Estándar de la comunidad**: Seguido por la mayoría de proyectos PHP
2. **Compatible con PSR-5**: Sigue los estándares de documentación de PHP
3. **Múltiples formatos**: Genera HTML, PDF y otras salidas
4. **Análisis automático**: Extrae información del código automáticamente
5. **Integración con IDE**: Soportado por PhpStorm, VS Code, etc.
6. **Activamente mantenido**: Recibe actualizaciones regulares
7. **Comunidad activa**: Amplio soporte y documentación

**Instalación**

```bash
composer require --dev phpdocumentor/phpdocumentor
```

**Generar documentación**

```bash
# Generar HTML (formato por defecto)
vendor/bin/phpdoc

# Generar solo para carpeta específica
vendor/bin/phpdoc -d src

# Ver todas las opciones
vendor/bin/phpdoc --help
```

## 🔄 Control de Versiones con Git

### Configuración inicial

```bash
# Inicializar repositorio (si aún no existe)
git init

# Configurar usuario local
git config user.name "Tu Nombre"
git config user.email "tu@email.com"
```

### Commits en este proyecto

El proyecto incluye un historial de commits mínimo con 3 commits:

1. **Commit inicial**: Estructura del proyecto y código base
   ```bash
   git add .
   git commit -m "Inicialización del proyecto con estructura básica"
   ```

2. **Segundo commit**: Documentación PHPDoc
   ```bash
   git commit -m "Añadir documentación PHPDoc completa al código"
   ```

3. **Tercer commit**: Configuración de CI/CD
   ```bash
   git commit -m "Configurar GitHub Actions y documentación"
   ```

### Flujo básico de Git

```bash
# Ver estado
git status

# Preparar cambios
git add src/archivo.php

# O preparar todo
git add .

# Confirmar cambios
git commit -m "Descripción del cambio"

# Enviar a GitHub
git push origin main

# Ver historial
git log --oneline

# Ver cambios sin preparar
git diff

# Ver cambios preparados
git diff --staged
```

### Buenas prácticas

- ✅ Commits pequeños y enfocados
- ✅ Mensajes descriptivos en presente
- ✅ Una característica o corrección por commit
- ✅ No subir archivos sensibles (contraseñas, tokens)
- ✅ Revisar `.gitignore` antes de hacer push

## 🔄 Integración Continua

### GitHub Actions

El proyecto incluye un workflow de GitHub Actions que se ejecuta automáticamente al hacer push.

**Ubicación**: `.github/workflows/php-ci.yml`

**Qué hace:**

1. **Verifica la sintaxis PHP**: Comprueba que no haya errores de sintaxis
2. **Valida el código**: Ejecuta análisis básicos
3. **Genera documentación**: Crea automáticamente la documentación (opcional)

### Ver resultados

1. Ve a tu repositorio en GitHub
2. Haz clic en la pestaña "Actions"
3. Verás un listado de ejecuciones
4. Haz clic en una ejecución para ver detalles

### Crear el workflow localmente

El workflow ya está configurado en `.github/workflows/php-ci.yml`.

Para personalizar:

1. Edita `.github/workflows/php-ci.yml`
2. Haz push a GitHub
3. El workflow se ejecutará automáticamente

## 🔒 Seguridad

### Configuración segura

✅ **Implementado:**
- Type hints en funciones (mayor seguridad de tipos)
- Función `sanitizar()` para prevenir XSS
- Función `validarEmail()` para validar entrada
- No hay contraseñas en el código

✅ **Configuración del repositorio:**
- `.gitignore` excluye datos sensibles
- No subir `.env` con secretos
- Usar GitHub Secrets para variables sensibles

### Recomendaciones

1. **Nunca hacer push de:**
   - Contraseñas
   - API keys
   - Tokens de acceso
   - Configuración local

2. **Usar para datos sensibles:**
   - GitHub Secrets (en la configuración del repositorio)
   - Variables de entorno
   - Archivos `.env` (no versionados)

3. **En producción:**
   - Usar HTTPS
   - Validar y sanitizar toda entrada
   - Mantener PHP actualizado
   - Usar dependencias actualizadas

## 👤 Autor

- **Alumno**: Proyecto de documentación y CI/CD
- **Versión**: 1.0.0
- **Fecha**: 2026

## 📄 Licencia

Este proyecto está bajo licencia MIT. Ver el archivo LICENSE para más detalles.

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Para contribuir:

1. Fork el proyecto
2. Crea una rama para tu característica (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## ❓ Preguntas Frecuentes

### ¿Cómo genero la documentación?
```bash
composer install
vendor/bin/phpdoc
```

### ¿Dónde veo la documentación generada?
En la carpeta `docs/html/` después de ejecutar `phpdoc`.

### ¿Cómo configuro GitHub Actions?
El workflow ya está en `.github/workflows/php-ci.yml`. Solo necesitas hacer push.

### ¿Puedo hacer el repositorio privado?
Sí, en las configuraciones de GitHub. Es recomendable para proyectos en desarrollo.

### ¿Qué hacer si GitHub Actions falla?
1. Revisa los logs en la pestaña "Actions"
2. Comprueba que la sintaxis PHP sea correcta
3. Verifica que no haya conflictos en el código

---

**¿Necesitas ayuda?** Abre un issue en GitHub o consulta la documentación técnica en [docs/DOCUMENTACION.md](docs/DOCUMENTACION.md).
#   T e s t  
 