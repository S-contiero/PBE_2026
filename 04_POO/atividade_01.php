<?php

class celular{
    //Atributos
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    //Metados
    function ligar(){
        $this->ligado = true;
        echo "O celular foi ligado!";
    }

    function desligar(){
        $this-> ligado =false;
        echo "O celular foi deligado <br>";
    }

    function usar($consumir){
        $this->bateria = $this->bateria - $consumir;
        if($this->bateria < 0){
            $this->bateria = 0;
        }

        echo "A bateria foi consumida em $consumir <br>";
        echo "Sobrando um total de $this->bateria <br>";
    }

    function carregar($carga){
        $this->bateria - $this->bateria +$carga;
        if($this->bateria > 100){
            $this->bateria = 100;
        }

        echo "A bateria foi carregada em $carga <br>";
        echo "Aumentando a bateria para $this->bateria <br>";
    }

}


//Objetos 
$celular1 = new celular();

//Definindo os atributos 
$celular1->marca ="iphone";
$celular1->modelo ="17 pro max";
$celular1->cor ="Laranja";
$celular1->bateria =100;
$celular1->ligado ="true";

echo "marca:" . $celular1->marca . "<br>";
echo "modelo:" . $celular1->modelo . "<br>";
echo "cor:" . $celular1->cor. "<br>";
echo "bateria:" . $celular1->bateria . "<br>";
echo "ligado:" . $celular1->ligado . "<br>";

$celular1->carregar(33);
$celular1->carregar(12);
$celular1->usar(25);
$celular1->desligar();

//Objetos 
$celular2 = new celular();

//Definindo os atributos 
$celular2->marca ="iphone";
$celular2->modelo ="15 pro max";
$celular2->cor ="preto";
$celular2->bateria =90;
$celular2->ligado ="true";

echo "marca:" . $celular2->marca . "<br>";
echo "modelo:" . $celular2->modelo . "<br>";
echo "cor:" . $celular2->cor. "<br>";
echo "bateria:" . $celular2->bateria . "<br>";
echo "ligado:" . $celular2->ligado . "<br>";

$celular2->carregar(33);
$celular2->carregar(12);
$celular2->usar(25);
$celular2->desligar();



