<?php

class Producto extends EntidadBase
{
    private $id;
    private $Nombre;
    private $Descripcion;
    private $Existencias;
    private $Precio_venta;
    private $url;

    public function __construct($adapter)
    {
        $table = "producto";
        parent::__construct($table, $adapter);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Producto
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Producto
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param mixed $Descripcion
     * @return Producto
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExistencias()
    {
        return $this->Existencias;
    }

    /**
     * @param mixed $Existencias
     * @return Producto
     */
    public function setExistencias($Existencias)
    {
        $this->Existencias = $Existencias;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecioVenta()
    {
        return $this->Precio_venta;
    }

    /**
     * @param mixed $Precio_venta
     * @return Producto
     */
    public function setPrecioVenta($Precio_venta)
    {
        $this->Precio_venta = $Precio_venta;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return Producto
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


    public function save()
    {
        $query = "INSERT INTO producto (id,Nombre,Descripcion,Existencias,Precio_venta,url)
                VALUES('" . $this->id . "',
                       '" . $this->Nombre . "',
                       '" . $this->Descripcion . "',
                       '" . $this->Existencias . "',
                       '" . $this->Precio_venta . "',
                       '" . $this->url . "');";
        $save = $this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}

?>