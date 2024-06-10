# TicketFlex

Para ejecutar el proyecto, es necesario tener instalados Node.js y Composer.

## Instalación de dependencias

1. En la consola, ejecuta los siguientes comandos para descargar las dependencias de Laravel:
    ```sh
    composer install
    composer update
    ```

2. Para descargar las dependencias de Vite, ejecuta:
    ```sh
    npm install
    ```

## Poblar la Base de Datos

Para poblar la base de datos, ejecuta los siguientes comandos en el siguiente orden:

1. Migrar la base de datos:
    ```sh
    php artisan migrate:fresh
    ```

2. Sembrar la base de datos con los datos iniciales:
    ```sh
    php artisan db:seed --class=ArticulosSeeder 
    php artisan db:seed --class=SalasSeeder
    php artisan db:seed --class=EventosSeeder
    ```

## Compilar y optimizar código

Para lanzar el servidor de Vite, ejecuta:
```sh
npm run build

```
## Lanzar Laravel a producción
php artisan serve --host=0.0.0.0 --port=80php artisan serve --host=0.0.0.0 --port=80
