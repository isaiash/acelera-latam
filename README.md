# Acelera Latam Project
Laravel web application to improve administration in the process of diagnosing ventures

# Instructions

Pasos a seguir para conseguir un buen funcionamiento de este prototipo.

* 1.- Para poder ejecutar el proyecto se necesita tener instalado XAMPP.
* 2.- Para visualizar el sistema, en la barra de navegación se debe escribir: http://localhost/aceleralatam/public/
* 3.- Para hacer uso de las funcionalidades de login y registro, se debe crear una base de datos con una tabla llamada "users" que contenga los atributos:
* - id (int autoincrementable)
* - email (varchar)
* - password (varchar)
* - nombre (varchar)
* - apellidos (varchar)
* - numero_telefono (int)
* - type (enum ['user', 'admin]) 
* - remeber_token (varchar)
* - created_at (timestamp)
* - updated_at (timestamp) 

y modificar el archivo de variables de entorno .env para ajustar el sistema a dicha base de datos.
