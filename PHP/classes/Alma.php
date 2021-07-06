<?php
abstract class Alma {
    //Atributos
    protected $forca;
    protected $destreza;
    protected $constituicao;
    protected $sabedoria;
    protected $inteligencia;
    protected $carisma;

    //Métodos Próprios

    protected function aumentaFor($for) {
        $this->setForca($this->getForca() + $for);
    }

    protected function aumentarDes($des) {
        $this->setDestreza($this->getDestreza() + $des);
    }

    protected function aumentaCon($con) {
        $this->setConstituicao($this->getConstituicao() + $con);
    }

    protected function aumentaSab($sab) {
        $this->setSabedoria($this->getSabedoria() + $sab);
    }

    protected function aumentaInt($int) {
        $this->setInteligencia($this->getInteligencia() + $int);
    }

    protected function amentaCar($car) {
        $this->setCarisma($this->getCarisma() + $car);
    }

    //Métodos Especiais

    /**
     * Get the value of forca
     */ 
    public function getForca()
    {
        return $this->forca;
    }

    /**
     * Set the value of forca
     *
     * @return  self
     */ 
    public function setForca($forca)
    {
        $this->forca = $forca;

        return $this;
    }

    /**
     * Get the value of destreza
     */ 
    public function getDestreza()
    {
        return $this->destreza;
    }

    /**
     * Set the value of destreza
     *
     * @return  self
     */ 
    public function setDestreza($destreza)
    {
        $this->destreza = $destreza;

        return $this;
    }

    /**
     * Get the value of constituicao
     */ 
    public function getConstituicao()
    {
        return $this->constituicao;
    }

    /**
     * Set the value of constituicao
     *
     * @return  self
     */ 
    public function setConstituicao($constituicao)
    {
        $this->constituicao = $constituicao;

        return $this;
    }

    /**
     * Get the value of sabedoria
     */ 
    public function getSabedoria()
    {
        return $this->sabedoria;
    }

    /**
     * Set the value of sabedoria
     *
     * @return  self
     */ 
    public function setSabedoria($sabedoria)
    {
        $this->sabedoria = $sabedoria;

        return $this;
    }

    /**
     * Get the value of inteligencia
     */ 
    public function getInteligencia()
    {
        return $this->inteligencia;
    }

    /**
     * Set the value of inteligencia
     *
     * @return  self
     */ 
    public function setInteligencia($inteligencia)
    {
        $this->inteligencia = $inteligencia;

        return $this;
    }

    /**
     * Get the value of carisma
     */ 
    public function getCarisma()
    {
        return $this->carisma;
    }

    /**
     * Set the value of carisma
     *
     * @return  self
     */ 
    public function setCarisma($carisma)
    {
        $this->carisma = $carisma;

        return $this;
    }
}