<?php
require_once 'Acoes.php';
class Simio  implements Acoes {
    //Atributos
    private $vida;
    private $armadura;
    private $agilidade;
    private $nivel;

    //Ataques
    
    public function Ataque1() {
        
    }

    public function Ataque2() {
        
    }

    public function Ataque3() {
        
    }

    public function Ataque4() {
        
    }

    //Métodos Próprios

    public function Gritar() {
        echo "<p>Uh! Uh! Uh!</p>";
    }

    public function Comer() {
        echo "<p>Banana!</p>";
    }
    
    public function Defender() {
        echo "<p>Defendido</p>";
    }

    //Métodos Especiais
    public function __construct() {
        
    }

    /**
     * Get the value of vida
     */ 
    public function getVida()
    {
        return $this->vida;
    }

    /**
     * Set the value of vida
     *
     * @return  self
     */ 
    public function setVida($vida)
    {
        $this->vida = $vida;

        return $this;
    }

    /**
     * Get the value of armadura
     */ 
    public function getArmadura()
    {
        return $this->armadura;
    }

    /**
     * Set the value of armadura
     *
     * @return  self
     */ 
    public function setArmadura($armadura)
    {
        $this->armadura = $armadura;

        return $this;
    }

    /**
     * Get the value of agilidade
     */ 
    public function getAgilidade()
    {
        return $this->agilidade;
    }

    /**
     * Set the value of agilidade
     *
     * @return  self
     */ 
    public function setAgilidade($agilidade)
    {
        $this->agilidade = $agilidade;

        return $this;
    }

    /**
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */ 
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }
}