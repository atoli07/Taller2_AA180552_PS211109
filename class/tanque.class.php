<?php
class tanque{
    //atributos
    public $tipo_combustible;
    public $prec_por_galon;
    public $cantidad;

    public function __construct($tipo_combustible, $precio, $cantidad=100)
    {
        $this->tipo_combustible=$tipo_combustible;
        $this->prec_por_galon=$precio;
        $this->cantidad=$cantidad;
    }

    public function rellenarTanque()
    {
        $this->cantidad=100;
    }

    public function despachoTanque($tanque)
    {
        
    }
}
?>