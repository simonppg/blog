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

## Errores

- No supported encrypter found. The cipher and / or key length are invalid.

Solucion:
```shell
$ php artisan key:generate
Application key [xlhF31NeOlibJcoOW9tvZg7TkHcAZI3a] set successfully.
$ vim .env
> APP_KEY=xlhF31NeOlibJcoOW9tvZg7TkHcAZI3a
```
