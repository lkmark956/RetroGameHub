## Instalación y Configuración

Sigue estos pasos para configurar el proyecto después de clonarlo desde GitHub:

### 1. Clonar el repositorio

```bash
git clone https://github.com/lkmark956/RetroGameHub.git
cd RetroGameHub/videojuegos
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Instalar dependencias de Node.js

```bash
npm install
```

### 4. Copiar archivo de configuración

```bash
cp .env.example .env
```

### 5. Generar clave de aplicación

```bash
php artisan key:generate
```

### 6. Ejecutar migraciones de base de datos (si es necesario)

```bash
php artisan migrate
```

### 7. Iniciar el servidor de desarrollo de Laravel

En una terminal, ejecuta:

```bash
php artisan serve
```

### Si no va con Artisan usar

```bash
php -S 127.0.0.1:8000 -t public
```

La aplicación estará disponible en `http://127.0.0.1:8000/` o alternativamente `http://videojuegos.test/games`
