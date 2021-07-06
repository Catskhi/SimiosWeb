<?php
class Ataque {
    //Atributos
    private $nome;
    private $descricao;

    //Ataques

    protected function socar() {
        $this->setNome("Soco");
        $this->setDescricao("Soco básico");
        echo "Socou";
    }

    protected function socoDuplo() {
        $this->setNome("Soco Duplo!");
        $this->setDescricao("Socos básicos duas vezes");
        echo "Socou duas vezes!";
    }



    //Métodos Especiais

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
}