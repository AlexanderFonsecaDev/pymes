<?php




class Cliente extends EntidadBase
{
    private $cedula;
    private $nick;
    private $nombre;
    private $apellido;
    private $correo;
    private $password;
    private $telefono;

    public function __construct($adapter)
    {
        $table = "cliente";
        parent::__construct($table, $adapter);
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param mixed $cedula
     * @return Cliente
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * @param mixed $nick
     * @return Cliente
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     * @return Cliente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     * @return Cliente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     * @return Cliente
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return Cliente
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }

    public function save()
    {
        $query = "INSERT INTO cliente (cedula,nick,nombre,apellido,correo,password,telefono)
                VALUES('" . $this->cedula . "',
                       '" . $this->nick . "',
                       '" . $this->nombre . "',
                       '" . $this->apellido . "',
                       '" . $this->correo . "' ,
                       '" . $this->password . "' ,
                       '" . $this->telefono . "');";
        $save = $this->db()->query($query);
        //$this->db()->error;
        return $save;
    }


}