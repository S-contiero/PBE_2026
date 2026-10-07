<?php

class Pedido
{
    public $numero;
    public $cliente;
    public $valor;
    public $status;

    function adicionar($valor){
        if($this->status == "Aguardando"){
            $this->valor = $this->valor + $valor;
        }else{ 
            echo"Não é possivel adicionar itrns.
                O pedido esta $this->status <br>";
        }
    }

    function cancelar(){
        $this->status = "Cancelado <br>";
        echo"Status alterado para $ths->status <br>";
    }

    function finalizar(){
        $this->status = "Finalizado";
        echo "Status alterado para $this->status <br>";
    }

    function exibirResumo(){
        echo "Número: " . $this->numero . "<br>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Valor: R$ " . $this->valor . "<br>";
        echo "Status: " . $this->status . "<br>";
    }
}

$pedido1 = new Pedido();

$pedido1->numero = 100;
$pedido1->cliente = "Jhenyffer";
$pedido1->valor = 0;
$pedido1->status = "Aguardando";

$pedido1->exibirResumo();
echo"<hr>";
$pedido1->adicionar(50);
$pedido1->adicionar(22);
$pedido1->exibirResumo();
echo"<hr>";
$pedido1->finalizar();
$pedido1->exibirResumo();
