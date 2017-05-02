<?php
    require 'conexion.php';
    require 'usuario.php';
    $username='juanito';
    $password='123';
    $usuario=usuario::login($username,$password);

    var_dump($usuario);
