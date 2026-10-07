<?php

class ContaBancaria{

    public $titular;
    public $saldo;

     public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }

    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
    }
    public function exibirSaldo(){
        echo "Titular: $this->titular, Saldo: $this->saldo <br>";
    }
}
$conta1 = new contaBancaria("Stefany", 700);
$conta1->depositar(350);
$conta1->sacar(200);
$conta1->exibirSaldo();
