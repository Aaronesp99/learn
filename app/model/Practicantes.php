<?php
class Practicantes{
    private $dni;
    private $nombres; 
    private $apePaterno;
    private $apeMaterno;
    private $celular;
    
    public function listarPracticantes(){
        $cn= new Cn();
        $mysqli = $cn->conectar();
        $stm=$mysqli->prepare("call sp_lista_practicantes()");
        $stm->execute();
        if($stm->error==""){
            $res = $stm->get_result();
            if($res->num_rows>0){
                $array = $res->fetch_all(MYSQLI_ASSOC);
            }else{
                $array = "vacio";
            }

        }else{
            $array  = $stm->error;
        }
        return $array;
    }

    public function agregarPracticante(){
        $cn= new Cn();
        $mysqli = $cn->conectar();
        $stm=$mysqli->prepare("call sp_agregar_practicante(?,?,?,?,?)");
        $stm->bind_param("ssssi", $this->dni, $this->apePaterno, $this->apeMaterno, $this->nombres, $this->celular);
        $stm->execute();
        if($stm->error==""){
            if($stm->affected_rows>0){
                $array = "ok";
            }else{
                $array = "no";
            }

        }else{
            $array  = $stm->error;
        }
        return $array;
    }


    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of nombres
     */ 
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set the value of nombres
     *
     * @return  self
     */ 
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get the value of apePaterno
     */ 
    public function getApePaterno()
    {
        return $this->apePaterno;
    }

    /**
     * Set the value of apePaterno
     *
     * @return  self
     */ 
    public function setApePaterno($apePaterno)
    {
        $this->apePaterno = $apePaterno;

        return $this;
    }

    /**
     * Get the value of apeMaterno
     */ 
    public function getApeMaterno()
    {
        return $this->apeMaterno;
    }

    /**
     * Set the value of apeMaterno
     *
     * @return  self
     */ 
    public function setApeMaterno($apeMaterno)
    {
        $this->apeMaterno = $apeMaterno;

        return $this;
    }

    /**
     * Get the value of celular
     */ 
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     *
     * @return  self
     */ 
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }
}