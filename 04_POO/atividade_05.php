<?php

class Livro{
    
    public $titulo;
    public $autor;
    public $paginas;
    public $anoPublicacao;

    public function __construct($titulo, $autor, $paginas, $anoPublicacao = "Desconhecido"){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function exibirDetalhes(){
        echo "Título: $this->titulo, Autor: $this->autor, Páginas: $this->paginas, Publicação: $this->anoPublicacao";
        echo"<hr>";
    }
}

$livro1 = new Livro("O Verão que Mudou Minha Vida", "Jenny Han", 240, 2009);
$livro1-> exibirDetalhes();

$livro2 = new Livro("Amanhecer","Stephenie Meyer", 576, 2008);
$livro2->exibirDetalhes();

