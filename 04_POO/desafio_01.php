<?php
    class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente, $valorItens = 0) {
        $this->cliente = $cliente;
        $this->valorItens = $valorItens;
    }

    public function adicionarItem($valor) {
        $this->valorItens += $valor;
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Cliente: $this->cliente - Total dos Itens: $this->valorItens <br>";
    }
}

class NotaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar; // total do pedido + porcentagem do imposto

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);

        echo "Subtotal: R$ $this->totalPedido <br>";
        echo "Imposto aplicado:  $this->imposto <br>";
        echo "Valor do imposto: R$ <br>";
        echo "Total a pagar: R$ $this->totalPagar <br>";
    }
} 

$pedido = new Pedido("Stefany", 20);
$pedido->adicionarItem(50);
$pedido->adicionarItem(27);
echo $pedido->exibirPedido();


$nota = new NotaFiscal($pedido->getTotal(), 8);
$nota->calcularTotal();
$nota->exibirNota();


?>