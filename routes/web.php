<?php

Route::get("/",ControladorUsuarios::class);

Route::get("/hola/:nombre", function($nombre, Request $request) {

    return "Hola " . $nombre ;
});
