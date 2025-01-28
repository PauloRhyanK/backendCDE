<?php 
class Ciclo{
    private $idCiclo;
    private $nmCiclo;
    private $dsCiclo;
    private $dtCriado;
    private $estado;
    private $progesso;

    function __construct($nmCiclo, $dsCiclo, $dtCriado){
        $this->nmCiclo = $nmCiclo;
        $this->dsCiclo = $dsCiclo;
        $this->dtCriado = $dtCriado
        $this->estado =  0;
        $this->progesso = 0;
        $sql = 
            "INSERT INTO ciclo(
                nm_ciclo,
                ds_ciclo,
                dt_create,
                stat,
                progss
            ) VALUES (
                {$this->nmCiclo},
                {$this->dsCiclo},
                {$this->dtCriado},
                {$this->estado},
                {$this->progresso},
            )"
        //Execute SQL
    }
}




?>