# Blog

## Instalación

- actualizar los paquetes de php de los cuales depende laravel y el proyecto
se lee el archivo composer.lock y descarga las dependencias en la carpeta
vendor/

```shell
$ composer install
$ npm install
$ bower install
```

## Migraciones

```shell
$ php artisan make:migration add_categories_table --create=categories
$ php artisan migrate
```

## Modelos

Los modelos deben tener el mismo nombre de la tabla pero en singular.

```shell
$ php artisan make:model Category
```

## Tinker

```shell
>>> $article = new App\Article();
>>> $article->title = "titulo";
>>> $article->tags()->attach(1);
#consultar tabla
>>> $articles = App\Article::all();
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
