<?php
/**En un archivo index, instanciar una PropiedadInmobiliaria utilizando el constructor, indicando como parámetros, los siguientes datos:
Id: 1
Direccion: San Juan 325
Metros Cuadrados: 100
Ciudad: Rosario
Valor: $ 1.500.000
Finalmente llamar al método MostrarDatos. */

require_once 'modelo/propiedad.php';

$PI = new PropiedadInmobiliaria (1, 'San Juan 235', 100, 'Rosario', '$1.500.000');
$PI-> mostrarDatos();