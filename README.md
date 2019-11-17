# Ejercicio Excepciones

El objetivo de esta práctica es intentar controlar un error en el caso de que una petición HTTP a un API
sea incorrecta y produzca un error.

Es mucho mejor controlar las excepciones nosotros y actuar en consecuencia, que dejar que la excepción finalice
nuestro programa.

Una vez controlado el error, cread un script que utilizando la misma API https://swapi.co, nos diga los nombres
de los planetas que salen en la película "La amenaza fantasma". Ojo que los nombres están en inglés.

**Tip:** Mirad la documentación de GUzzle para ver qué excepciones lanza: http://docs.guzzlephp.org/en/stable/quickstart.html#exceptions
 
**Bonus:** Cuando tengáis el código resuelto, hacer refactoring para que el código sea orientado a objetos.

La idea es que haya una clase encargada de realizar las peticiones HTTP al api y vosotros solamente le pregunteis
mediante una llamada a un método que os devuelva una lista de objetos planeta.

## Instalación

Para facilitar las cosas hay un fichero docker-compose.yml que contiene un servidor web con php y composer instalados.

Lo único que hay que hacer es ejecutar lo siguiente:

```
docker-compose up -d
```

Entramos en el contenedor e instalamos las dependencias:

```
docker-compose exec webserver bash
composer install
```

Y ya tendriais acceso a la aplicación en la url: http://localhost:8888/demo.php

Presupone que tenéis una imagen llamada php-apache-upgrade, que deberíais de crearla partiendo del fichero Dockerfile del proyecto: 

https://gitlab.com/upgrade-hub/upgrade-hub-students-bootcamp-6-pt/php-environment/tree/php-composer
