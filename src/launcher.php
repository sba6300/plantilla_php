<?php
session_start();

require './utils/config.php';
require './src/Roots.php';
require './utils/Tools.php';
require './utils/Lenguaje.php';
require PATH_SRC . 'autoloader/Autoloader.php';

Autoloader::registrar();

$rutas = scandir(PATH_ROUTES);

foreach ($rutas as $archivo) {
    $rutaArchivo = realpath(PATH_ROUTES . $archivo);
    if (is_file($rutaArchivo)) {
        require $rutaArchivo;
    }
}

Route::submit();
