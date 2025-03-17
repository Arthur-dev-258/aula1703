<?php

class Calculadora {

    private $total;
    private $numero1;
    private $numero2;

    public function setNumero1($parametro_numero1) {
        $this->numero1 = $parametro_numero1;
    }

    public function setNumero2($parametro_numero2) { //se o parentese é vazio a funcionalidade é set
        $this->numero2 = $parametro_numero2;//espaço alocado na memoria recebe o valor enviado pelo usuario
    }

    public function somar() {//se o parentese é vazio a funcionalidade é get retornando a operação ja executada pelo SO
        $this->total = $this->numero1 + $this->numero2;
    }

    public function subtrair() {
        $this->total = $this->numero1 - $this->numero2;
    }

    public function dividir() {
        $this->total = $this->numero1 / $this->numero2;
    }

    public function multiplicar() {
        $this->total = $this->numero1 * $this->numero2;
    }
 
 public function mostrar_media() {
        $this->total = ($this->numero1 + $this->numero2)/2;
		
    }
 
    public function getTotal() {
        return $this->total;
    }

}