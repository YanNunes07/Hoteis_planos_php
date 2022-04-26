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
        
        switch ($this->tipoPlano) {
            case "Master":
                return "Suíte Double Master: R$" .($this->suiteDouble() * $this->diaria);
                break;
            case "Família":
                return "Suíte Família: R$" .($this->suiteFamilia() * $this->diaria);
                break;
            case "Single":
                return "Suíte Single: R$" .(100 * $this->diaria);
                break;
            default:
              return $this->tipoPlano = "plano invalido";
               break;
        }
     
    }

    function getQuarto()
    {
        
        switch ($this->tipoPlano) {
            case "Master":
                return "Suíte Double Master" ;
                break;
            case "Família":
                return "Suíte Família";
                break;
            case "Single":
                return "Suíte Single";
                break;
            default:
              return "plano invalido";
               break;
        }
  
    }





    function __toString()
    {
        return nl2br("Nome:  $this->nome
                     RG: $this->RG
                     Email: $this->email
                     Idade: $this->idade
                     Telefone: $this->telefone
                     Quantidades de dias: $this->diaria
                     Tipo plano: {$this->getQuarto()}
                     Seu plano: {$this->total()}
                     ");
    }
}

