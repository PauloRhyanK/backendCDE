<?php

class Materia{
    private $idMateria;
    private $nmMateria
    private $conteudo;
    private $dificultade;
    private $peso;
    private $horas;
    private $progesso;
    private $estado;
    private $cdCiclo;

    function __construct($nmMateria, $conteudo, $dificultade,$ciclo, ?$peso){
        $this->nmMateria = $nmMateria;
        $this->conteudo = $conteudo;
        $this->dificultade = $dificultade;
        $this->peso = $peso;
        $this->progresso = NULL;
        $this->estado = 0;
        $this->cdCiclo = $cdCiclo;

        $sql = 
            "INSERT INTO matia(
                nm_matia,
                in_cont,
                in_difi,
                in_peso,
                idCiclo,
                stat,
            ) VALUES (
                {$this->nmMateria},
                {$this->conteudo},
                {$this->dificuldade},
                {$this->peso},
                {$this->cdCiclo},
                {$this->estado},
            )"
        //EXECUTE SQÇ
        return $this;
    }

    // Id da materia gerada pelo BD
    // idMateria: int
    function getIdMateria(){
        return $this->idMateria;
    }

    // $conteudo: int
    function getConteudo(){
        return $this->conteudo
    }

    // $conteudo: int
    function setConteudo($conteudo){
        $this->conteudo = $conteudo;
    }

    // $dificuldade: int
    function getDificuldade(){
        return $this->difculdade
    }


    // $dificuldade: int
    function setDificuldade($dificultade){
        $this->dificuldade = $dificultade;
    }
    
    // $peso: float
    function getPeso(){
        return $this->peso
    }

    // $peso : float
    function setPeso($peso){
        $this->peso = $peso;
    }
    
    // $horas: int
    function getHoras(){
        return $this->horas
    }

    // $horas: int
    function setHoras($horas){
        $this->horas = $horas;
    } 

    // $progresso: float
    function getProgresso(){
        return $this->progresso
    }

    /*
        @Progresso da materia
        100 / horas totais da materia = acrescimo de tarefa por hora;
        $progresso: float
    */
    function addProgresso($progesso = 1){
        $acc = 100 / $this->$horas
        $this->progesso += ($progesso * $acc);
    } 

    // $estado: int
    function getEstado(){
        return $this->$estado
    }

    /* 
        @Estado da materia:
        $estado: int
        0 - criada
        1 - progresso
        2 - concluida

    */
    function setEstado($estado){
        if($estado == (0 || 1 || 2)){
            $this->estado = $estado;
        }else{
            return false
        }
    }

    // Id do Ciclo Associado a materia
    // $ciclo: int
    function getCiclo(){
        return $this->ciclo; 
    }

    //$ciclo: int
    function setCiclo($cdCiclo){
        $this->ciclo = $cdCiclo; 
    }
    
}