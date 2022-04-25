<?php

class Reserva
{
    private $nome;
    private $email;
    private $telefone;
    private $RG;
    private $diaria;
    private $valor;
    private $idade;
    private $tipoPlano;

    public function __construct()
    {
    }
    public function __destruct()
    {
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }


    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }


    public function getRG()
    {
        return $this->RG;
    }


    public function setRG($RG)
    {
        $this->RG = $RG;
    }


    public function getDiaria()
    {
        return $this->diaria;
    }


    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;
    }


    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getTipoPlano()
    {
        return $this->tipoPlano;
    }


    public function setTipoPlano($tipoPlano)
    {
        $this->tipoPlano = $tipoPlano;
    }

    function suiteDouble()
    {
        return 150;
    }
    function suiteFamilia()
    {
        return 180;
    }

    function suiteSingle()
    {
        return 100;
    }

    function total()
    {
        $this->tipoPlano;
        switch ($this->tipoPlano) {
            case 1:
                $this->tipoPlano = "Suíte Double Master: R$" + ($this->suiteDouble() * $this->diaria);
                break;
            case 2:
                $this->tipoPlano = "Suíte Família: R$" + ($this->suiteFamilia() * $this->diaria);
                break;
            case 3:
                $this->tipoPlano = "Suíte Single: R$" + (100 * $this->diaria);
                break;
            default:
               $this->tipoPlano = "plano invalido";
               break;
        }
        return $this->tipoPlano;
    }



    function __toString()
    {
        return nl2br("Nome:  $this->nome
                     RG: $this->RG
                     Email: $this->email
                     Idade: $this->idade
                     Telefone: $this->telefone
                     Quantidades de dias: $this->diaria
                     Seu plano: {$this->total()}
                     ");
    }
}
