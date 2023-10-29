<?php

// Creación de clase para instanciar plantilla

class PlantillaControlador
{

    public function CargarPlantilla()
    {
        //instancia de la clase
        include "vistas/plantilla.php";
    }
}