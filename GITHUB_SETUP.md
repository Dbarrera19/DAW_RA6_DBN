# Guía: Publicar tu proyecto en GitHub

## Pasos para crear el repositorio en GitHub

### 1. Crear un nuevo repositorio en GitHub

1. Inicia sesión en [GitHub](https://github.com)
2. Haz clic en el icono **+** en la esquina superior derecha
3. Selecciona **New repository**
4. Completa los datos:
   - **Repository name**: `proyecto-php` (o el nombre que prefieras)
   - **Description**: `Aplicación PHP documentada con GitHub Actions y CI/CD`
   - **Visibility**: Elige **Private** (recomendado para proyectos en desarrollo) o **Public**
   - **Initialize this repository with**: NO marques nada (ya tiene contenido)

5. Haz clic en **Create repository**

### 2. Conectar tu repositorio local con GitHub

Después de crear el repositorio, GitHub te mostrará instrucciones. Ejecuta en tu terminal:

```bash
cd "c:\Users\CampusFP\Desktop\Daniel_Barrera\Despliegue de aplcaciones web\proyecto_dbn_php"

# Cambiar nombre de rama a 'main' (opcional, si GitHub usa 'main' como predeterminado)
git branch -M main

# Agregar el repositorio remoto (reemplaza tu-usuario/proyecto-php)
git remote add origin https://github.com/tu-usuario/proyecto-php.git

# Hacer push de los commits
git push -u origin main
```

**Nota**: Reemplaza `tu-usuario` con tu nombre de usuario de GitHub y `proyecto-php` con el nombre del repositorio que creaste.

### 3. Verificar en GitHub

1. Abre tu repositorio en GitHub
2. Deberías ver los 3 commits en el historial
3. Accede a la pestaña **Actions** para ver los workflows de CI/CD

## Configuración de GitHub Pages (Opcional)

Para publicar la documentación automáticamente:

1. Ve a **Settings** → **Pages**
2. En **Source**, selecciona **Deploy from a branch**
3. Rama: **main**, Carpeta: **/(root)**
4. Haz clic en **Save**

La documentación estará en: `https://tu-usuario.github.io/proyecto-php/`

## Hacer Private o Public

### Para hacerlo Private

1. Ve a **Settings** → **General**
2. Desplázate a **Danger Zone**
3. Haz clic en **Change visibility**
4. Selecciona **Private**
5. Confirma el nombre del repositorio

### Para hacerlo Public

Pasos similares, pero selecciona **Public**.

**Recomendación**: Mantén como **Private** mientras estés desarrollando para proteger tu código.

## Agregar colaboradores (Opcional)

1. Ve a **Settings** → **Collaborators**
2. Haz clic en **Add people**
3. Busca y agrega usuarios

## Ver tus repositorios

- **Página principal**: GitHub.com
- Verás una sección "Your repositories"
- Allí aparecerá `proyecto-php`

## Troubleshooting

### Error: "fatal: 'origin' does not appear to be a 'git' repository"

Solución:
```bash
git remote add origin https://github.com/tu-usuario/proyecto-php.git
```

### Error de autenticación

Si obtienes error de contraseña:
1. Usa un **Personal Access Token** en lugar de contraseña
2. En GitHub: Settings → Developer settings → Personal access tokens
3. Genera un nuevo token con permisos de `repo`

### Push rechazado por rama remota

Solución:
```bash
git pull origin main --allow-unrelated-histories
git push origin main
```

## Comandos útiles

```bash
# Ver repositorio remoto configurado
git remote -v

# Cambiar URL remota
git remote set-url origin https://github.com/nuevo-usuario/nuevo-repo.git

# Ver estado de push
git status

# Actualizar desde GitHub
git pull origin main

# Forzar push (usar con cuidado)
git push -u origin main --force
```

## Próximos pasos

Después de publicar en GitHub:

1. ✅ Ve a tu repositorio en GitHub
2. ✅ Verifica que los 3 commits estén ahí
3. ✅ Abre la pestaña **Actions**
4. ✅ Observa el workflow de CI/CD ejecutándose
5. ✅ Verifica que los análisis pasen exitosamente

## Invite others to collaborate

1. **Settings** → **Collaborators and teams** → **Collaborators**
2. Haz clic en **Add people**
3. Busca por nombre de usuario o email
4. Selecciona el rol (Pull requests, Maintain, Admin)
5. Envía la invitación

## Resumen

Tu proyecto ahora tiene:

✅ **Control de versiones**: Historial de 3 commits  
✅ **Repositorio remoto**: En GitHub (privado o público)  
✅ **Documentación**: README.md completo  
✅ **CI/CD**: GitHub Actions configurado  
✅ **Seguridad**: .gitignore adecuado, sin datos sensibles  
✅ **Documentación técnica**: PHPDoc y Markdown  

**¡Tu proyecto está listo para ser usado y compartido!**
