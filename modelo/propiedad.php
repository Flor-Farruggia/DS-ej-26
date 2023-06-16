<?php
/**Respetando la arquitectura propuesta en clase:
Crear una clase PropiedadInmobiliaria con las siguientes propiedades:
Id, Direccion, MetrosCuadrados, Ciudad, Valor.
Agregarle un metodo constructor que acepte como parámetros Id, Direccion, MetrosCuadrados, Ciudad, Valor, y dentro del mismo, los asigne a las propiedades correspondientes.
Finalmente agregarle un método mostrarDatos, que imprima todas sus propiedades.**/

class PropiedadInmobiliaria {
    public $Id; 
    public $Direccion; 
    public $MetrosCuadrados; 
    public $Ciudad; 
    public $Valor;

    function __construct($TipoId, $Dir, $MetrosCuad, $Ciud, $Val) {
        $this->Id=$TipoId;
        $this->Direccion=$Dir;
        $this->MetrosCuadrados=$MetrosCuad;
        $this->Ciudad=$Ciud;
        $this->Valor=$Val;
    }

    public function mostrarDatos(){
        echo 'Datos de la propiedad inmobiliaria: '.'<br>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Dirección: '.$this->Direccion.'<br>';
        echo 'Metros cuadrados: '.$this->MetrosCuadrados.'<br>';
        echo 'Ciudad: '.$this->Ciudad.'<br>';
        echo 'Valor: '.$this->Valor.'<br>';
    }
}