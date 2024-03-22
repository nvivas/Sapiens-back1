# Proyecto fin del Máster de Desarrollo FullStack I

## Empezar
Para empezar a usar este proyecto se debe tener instalado un paquete de herramientas, en mi caso elejí XAMPP.
- Apache --> Servidor Web
- Intérprete PHP --> PHP
- MySql --> Base de datos

## Descargar el proyecto
En GitHub, se debe pulsar en `code` y copiar el enlace que pone en `HTTPS`
- `https://github.com/nvivas/Sapiens-back1.git`

## Composer
Se debe instalar composer en el proyecto. Para ello, se debe lanzar el siguiente comando en la terminal:
- `composer install`

Se crea las dependencias de Laravel en una carpeta llamada `vendor`

## Crear las tablas en la Base de Datos (Migraciones)
Se debe crear las tablas en Base de Datos. Para ello se lanza el siguiente comando en una terminal:
- `php artisan migrate`

Si se abre la BBDD se verá que se han creado las tablas que están descritas en la carpeta:
- `Sapiens-back1/database/migrations`

## Crear datos en la Base de Datos
Se debe ejecutar el siguiente comando en la terminal para llenar la base de datos:
- `php artisan db:seed --class=JuegosSeeder` 
Esto hará que todo lo que hay en `Sapiens-back1/database/seeder/JuegosSeeder` se añada a la base de datos

## Compilar el proyecto
Para compilar se debe ejecutar el siguiente comando en la terminal en el directorio del proyecto
- `php artisan serve`
