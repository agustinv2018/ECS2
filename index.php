<?php


//Crear un repositorio en GitHub llamado ECS2
//Clonar el repositorio dentro del root del servidor PHP.
//Agregar un archivo index.php
//Resolver el siguiente enunciado dentro del archivo index.php
//Recibir dos variables mediante post.
//Dni (obligatoria, si no se envía devolver el mensaje. “DNI obligatorio.”) 
//Email.
//Devolver:
//Dni: [valorDNI]
//Email: [valorEmail] (En caso de no enviar el mail, no mostrar nada, tampoco el label Email)
//Realizar el commit de los cambios, con el mensaje “Dni y email”
//Pushear los cambios al repositorio remoto.
//Para entregar la evaluación copiar el link del repositorio.

if (isset($_POST['dni']) == false) {
    echo 'DNI OBLIGATORIO';
}

if (isset($_POST['dni']) == true && isset($_POST['email']) == false) {
    echo 'DNI  : ' . $_POST['dni'];
}


if (isset($_POST['dni']) == true && ($_POST['email']) == true) {

    echo 'DNI  : ' . $_POST['dni'];
    echo '<br>';
    echo 'email : ' . $_POST['email'];
}


//dsgsdf




