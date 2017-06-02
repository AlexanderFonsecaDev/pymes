<?php

class Cliente extends EntidadBase{

    private $Cedula,$Nick,$Nombre,$Apellido,$Correo,$Password,$Telefono;

    public function __construct()
    {
        $table = "cliente";
        parent::__construct($table);
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->Cedula;
    }

    /**
     * @param mixed $Cedula
     * @return Cliente
     */
    public function setCedula($Cedula)
    {
        $this->Cedula = $Cedula;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNick()
    {
        return $this->Nick;
    }

    /**
     * @param mixed $Nick
     * @return Cliente
     */
    public function setNick($Nick)
    {
        $this->Nick = $Nick;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     * @return Cliente
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * @param mixed $Apellido
     * @return Cliente
     */
    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->Correo;
    }

    /**
     * @param mixed $Correo
     * @return Cliente
     */
    public function setCorreo($Correo)
    {
        $this->Correo = $Correo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     * @return Cliente
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $telefono
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->Telefono = $telefono;
        return $this;
    }

    public function save(){
        $query="INSERT INTO cliente (Cedula, Nick, Nombre, Apellido, Correo, Password, Telefono) 
                VALUES ('".$this->Cedula."',
                       '".$this->Nick."',
                       '".$this->Nombre."',
                       '".$this->Apellido."',
                       '".$this->Correo."'),
                       '".$this->Password."',
                       '".$this->Telefono."';";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}

?>

