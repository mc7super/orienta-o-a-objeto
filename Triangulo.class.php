<?php
class Triangulo{
    private $base;
    private $altura;
    public function setBase($base){
        $this->base = $base;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function calcularArea(){
        $resultado = ($this->base* $this->altura)/2;
        return $resultado;
    }
}
?>