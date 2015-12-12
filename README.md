# Blog

## Instalación

- actualizar los paquetes de php de los cuales depende laravel y el proyecto
se lee el archivo composer.lock y descarga las dependencias en la carpeta
vendor/

```shell
$ composer install
```

## Migraciones

```shell
$ php artisan make:migration add_categories_table --create=categories
$ php artisan migrate
```
