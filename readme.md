
# Larabikes

_CRUD que gestiona una web de motos. Proyecto realizado en laravel 6.1.0 _

### Pre-requisitos 📋
_Windows_
- Download wamp: http://www.wampserver.com/en/
- Actualice la ruta de la variable de entorno de Windows para que apunte a su carpeta de instalación de php (dentro del directorio de instalación de wamp) (así es como puede hacer [esto](http://stackoverflow.com/questions/17727436/how-to-properly-set-php-environment-variable-para-ejecutar-comandos-en-git-bash)   )
- Cree una base de datos localmente llamada **crud-larabikes**
- Descargar [composer](https://https://getcomposer.org/download/) 

## Configuración ⚙️
-  Arranca el servidor
``` run  php artisan serve``` 

- Cree un archivo ```.env ``` (puede usar .env.example de plantilla) 

- Abra la consola y directorio raiz del proyecto y ejecute:
 -  ```composer install```
 -  ```php artisan key:generate``` Genera APP_KEY
 -  ```php artisan migrate```    Migración de la bd
 -  ``` php artisan db:seed```   Inserción de datos

## Ejecutando las pruebas ⚙️
- Ejecute el arranque del servidor, si lo tuviera parado
``` run  php artisan serve``` 
- Ve a 
```http://localhost/[directorio_proyecto] ```
## Construido con 🛠️

* [Laravel](http://www.https://laravel.com/) - El framework web usado
* [Composer](https://https://getcomposer.org/) - Manejador de dependencias y paquetes de PHP

## Autor ✒️

* **David** -  [davidtrigo](https://github.com/davidtrigo)

