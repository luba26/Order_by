<?php
//requerimiento de archivo en controladores
require_once "controladores/plantilla.controlador.php";

//creación de objetos para instanciar plantillas
$plantilla = new PlantillaControlador();
$plantilla->CargarPlantilla();