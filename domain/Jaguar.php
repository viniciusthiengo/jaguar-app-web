<?php

class Jaguar
{
    public $modelo;
    public $motor;
    public $preco;
    public $urlImagem;


    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setUrlImagem($urlImagem)
    {
        $this->urlImagem = $urlImagem;
    }
}