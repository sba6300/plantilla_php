<?php

 require_once "serverside.php";
$table_data->setCondicion(" estado<>0 ");
$table_data->get('view_clientes_activos','cliente_id',array(
    'nombre',
    'apellidos',
    'email',
    'nombre_en',
    'cliente_id',
));