<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Ejercicio en PHP Laravel para Extendeal

En una arquitectura de microservicios se crea un modulo que administra los cuadro de un museo.
## Requisitos del servicio
Esta aplicación esta basada laravel ^8.75. Consulte las instrucciones de instalación de Laravel para obtener más información.

Apache 2.4, PHP 7.3, MySQL 8, Composer 2.2.6.

## Virtualhost
Para este ejemplo el virtualhost creado es http://localhost:8000

## Setup and Config

### Requirements
1. PHP
2. MySQL database
3. Composer

## Installation steps:
1. Clonar el repositorio:
```bash
git clone git@github.com:LilianLSilva/Extendeal.git
```
2. Una vez clonado el repositorio, necesitamos crear una base de datos Mysql (i.e. `extendeal`).

3. copiar el archivo .env.example en el archivo .env y edita el archivo de configuración, especialmente la configuración de Mysql.
```bash
cp .env.example .env
```
4. Ejecute con siguientes comandos.
```bash
composer install
```
### Database migration:
5. necesitamos correr las migraciones de las nuevas tablas de `cuadros` y `usuario_cuadros`.
```bash
php artisan migrate
```

### Database seeding:

6.  Para popular las tablas con datos de ejemplo debemos correr el seguiente comando que corre los seed del modulo:
```bash
php artisan module:seed 
```

Listo. Ya podemos probar la API con Postman.
```code
GET http://localhost:8000/api/cuadros
```
Debe retornar algo como:
```javascript
{
    "current_page": 1,
        "data": [
        {
            "id": 1,
            "titulo": "Las Meninas",
            "autor": "Diego Velazquez",
            "medidas": "3.18 metros de ancho por 2.76 metros de altura",
            "tecnica": "oleo",
            "material": "lienzo",
            "anio": 1656,
            "usuario_id": 1,
            "cuadro_id": 1
        },
        {
            "id": 4,
            "titulo": "El jardín de las delicias",
            "autor": "El Bosco",
            "medidas": "220 cm x 97 cm en cada panel",
            "tecnica": "oleo",
            "material": "tríptico de madera de roble",
            "anio": 1490,
            "usuario_id": 1,
            "cuadro_id": 3
        },
        {
            "id": 5,
            "titulo": "La Mona Lisa",
            "autor": "Leonardo da Vinci",
            "medidas": "77 x 53 cm",
            "tecnica": "oleo",
            "material": "madera",
            "anio": 1503,
            "usuario_id": 1,
            "cuadro_id": 4
        },
        {
            "id": 6,
            "titulo": "Retrato de la infanta Margarita Teresa en un vestido azul,",
            "autor": "Diego Velazquez",
            "medidas": "127 × 107",
            "tecnica": "oleo",
            "material": "lienzo",
            "anio": 1659,
            "usuario_id": 1,
            "cuadro_id": 5
        }
    ],
        "first_page_url": "http://localhost:8000/api/cuadros?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/cuadros?page=1",
        "links": [
        {
            "url": null,
            "label": "&laquo; Previous",
            "active": false
        },
        {
            "url": "http://localhost:8000/api/cuadros?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": null,
            "label": "Next &raquo;",
            "active": false
        }
    ],
        "next_page_url": null,
        "path": "http://localhost:8000/api/cuadros",
        "per_page": 15,
        "prev_page_url": null,
        "to": 4,
        "total": 4
}
```

## Q&A

### Doubts?
Puedes enviar un mail a silvalilian662@gmail.com
