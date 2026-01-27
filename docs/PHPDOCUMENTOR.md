# phpDocumentor: Herramienta de Documentación para PHP

## ¿Qué es phpDocumentor?

phpDocumentor es una herramienta de código abierto que **genera documentación automática a partir del código PHP** y sus comentarios PHPDoc. Es el estándar de facto en la comunidad PHP para documentación.

## ¿Por qué usar phpDocumentor?

### 1. **Estándar de la comunidad**
- Es la herramienta más utilizada en proyectos PHP profesionales
- Recomendada por la PHP-FIG (PHP Framework Interop Group)
- Soportada por Composer y ecosistema PHP

### 2. **Compatible con estándares**
- Sigue **PSR-5**: PHPDoc Standard
- Compatible con **PSR-1** y **PSR-12**: Estándares de codificación
- Soporta todas las anotaciones PHPDoc estándar

### 3. **Múltiples formatos de salida**
- **HTML responsivo**: Documentación moderna y navegable
- **PDF**: Para distribución offline
- **Markdown**: Para integración en repositorios
- **LaTeX**: Para publicaciones académicas

### 4. **Automatización**
- Integración con CI/CD (GitHub Actions, GitLab CI, Jenkins)
- Extrae información del código automáticamente
- Genera índices, búsqueda y navegación

### 5. **Soportado por IDEs**
- PhpStorm: Autocompletado basado en PHPDoc
- VS Code: Plugins para visualizar documentación
- Otros editores: Reconocen los comentarios PHPDoc

### 6. **Características avanzadas**
- Análisis de dependencias entre clases
- Generación de diagramas de clase (con extensiones)
- Búsqueda a través de la documentación
- Versiones de API

### 7. **Comunidad activa**
- Desarrollo continuo (versión 3.x)
- Documentación completa
- Comunidad en Slack y GitHub

## Instalación

### Mediante Composer (Recomendado)

```bash
# Como dependencia de desarrollo
composer require --dev phpdocumentor/phpdocumentor

# Verificar instalación
vendor/bin/phpdoc --version
```

### Global (Opcional)

```bash
composer global require phpdocumentor/phpdocumentor

# Usar desde cualquier lugar
phpdoc --version
```

### Mediante Docker (Alternativa)

```bash
docker run --rm -v $(pwd):/data phpdoc/phpdoc:latest
```

## Uso básico

### Generar documentación HTML

```bash
vendor/bin/phpdoc
```

Genera documentación en `docs/html/` (según phpdoc.xml)

### Opciones comunes

```bash
# Especificar directorio de entrada
vendor/bin/phpdoc -d src

# Especificar directorio de salida
vendor/bin/phpdoc -t mi-docs

# Especificar tanto entrada como salida
vendor/bin/phpdoc -d src -t output

# Ver todas las opciones
vendor/bin/phpdoc --help
```

## Configuración (phpdoc.xml)

El proyecto incluye `phpdoc.xml` que configura:

```xml
<?xml version="1.0" encoding="UTF-8" ?>
<phpdocumentor>
    <title>Aplicación PHP Documentada</title>
    
    <!-- Caché y salida -->
    <parser>
        <target>docs/phpdoc-cache</target>
    </parser>
    
    <!-- Generador de documentación -->
    <transformer>
        <target>docs/html</target>
        <transformations>
            <transformation>
                <name>responsive-twig</name>
            </transformation>
        </transformations>
    </transformer>
    
    <!-- Archivos a documentar -->
    <files>
        <directory>src</directory>
        <directory>index.php</directory>
    </files>
</phpdocumentor>
```

## PHPDoc: Comentarios de documentación

### Estructura básica

```php
/**
 * Descripción breve
 *
 * Descripción larga y detallada de qué hace la función,
 * cuándo se debe usar y cualquier consideración especial.
 *
 * @param type $variable Descripción del parámetro
 * @return type Descripción del retorno
 */
public function miFunction($variable) {
    // código
}
```

### Etiquetas PHPDoc comunes

| Etiqueta | Uso | Ejemplo |
|----------|-----|---------|
| `@param` | Documenta parámetros | `@param string $nombre Nombre del usuario` |
| `@return` | Documenta retorno | `@return bool` |
| `@throws` | Excepciones lanzadas | `@throws InvalidArgumentException` |
| `@deprecated` | Marca como obsoleto | `@deprecated Use newFunction() instead` |
| `@since` | Versión de introducción | `@since 1.0.0` |
| `@author` | Autor del código | `@author Juan Pérez` |
| `@version` | Versión | `@version 1.0.0` |
| `@example` | Ejemplo de uso | `@example $obj->method();` |
| `@link` | Enlaces relacionados | `@link https://example.com` |
| `@see` | Referencias relacionadas | `@see otherFunction()` |

### Ejemplos en el proyecto

**Clase documentada:**
```php
/**
 * Clase Usuario
 *
 * Representa a un usuario de la aplicación.
 *
 * @package App
 * @author Alumno
 * @version 1.0
 */
class Usuario { }
```

**Método documentado:**
```php
/**
 * Obtiene el nombre completo del usuario
 *
 * @return string El nombre completo en formato "Nombre Apellidos"
 */
public function getNombreCompleto(): string { }
```

**Función documentada:**
```php
/**
 * Valida si un email tiene formato correcto
 *
 * @param string $email El email a validar
 * @return bool true si es válido, false en caso contrario
 * @example validarEmail("usuario@example.com") // true
 */
function validarEmail(string $email): bool { }
```

## Integración con CI/CD

### GitHub Actions

El proyecto incluye `.github/workflows/php-ci.yml` que genera documentación automáticamente:

```yaml
- name: Generar documentación
  run: vendor/bin/phpdoc
```

### Ventajas

- ✅ Documentación siempre actualizada
- ✅ Se genera con cada push
- ✅ Visible en el workflow
- ✅ Puede publicarse automáticamente en GitHub Pages

### Publicar en GitHub Pages

Agregar al workflow:
```yaml
- name: Publicar documentación
  uses: peaceiris/actions-gh-pages@v3
  with:
    github_token: ${{ secrets.GITHUB_TOKEN }}
    publish_dir: ./docs/html
```

## Comparación con alternativas

| Herramienta | Ventajas | Desventajas |
|-------------|----------|------------|
| **phpDocumentor** | Estándar, activo, múltiples formatos | Curva de aprendizaje |
| **Doxygen** | Soporta muchos lenguajes | No específico para PHP |
| **phpDocBlockGenerator** | Simple, IDE integrado | Funcionalidad limitada |
| **Sami** | Ligero, rápido | Menos funcionalidades |

**Conclusión**: phpDocumentor es la mejor opción para proyectos PHP profesionales.

## Comandos útiles

```bash
# Generar y abrir documentación
vendor/bin/phpdoc && open docs/html/index.html

# Generar en paralelo (más rápido)
vendor/bin/phpdoc -q

# Generar solo un archivo
vendor/bin/phpdoc --filename=src/Usuario.php

# Con configuración personalizada
vendor/bin/phpdoc -c mi-config.xml

# Ver versión
vendor/bin/phpdoc --version

# Ver lista de transformadores disponibles
vendor/bin/phpdoc list
```

## Recursos

- **Documentación oficial**: https://docs.phpdoc.org/
- **PSR-5 Standard**: https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc.md
- **GitHub**: https://github.com/phpDocumentor/phpDocumentor

## Conclusión

phpDocumentor es **la herramienta recomendada** para documentar código PHP porque:

1. ✅ Sigue estándares de la comunidad
2. ✅ Se integra fácilmente con CI/CD
3. ✅ Genera documentación profesional
4. ✅ Es ampliamente adoptado
5. ✅ Tiene comunidad activa
6. ✅ Automatiza la documentación

**Implementándola en tu proyecto, aseguras que la documentación siempre esté actualizada y sea accesible para otros desarrolladores.**
