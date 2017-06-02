<?php

class ClientesController extends ControladorBase
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //Cargamos la vista index y le pasamos valores
        $this->view("index", array(
            "Clientes" => "lista de clientes activos"
        ));
    }

    public function registrarCliente()
    {
        $this->view("registrarCliente", array(
            "Clientes" => "lista de clientes activos"
        ));
    }

    public function sesion()
    {
        $this->view("sesion", array(
            "Hola" => "Soy Dante"
        ));
    }

    public function crear()
    {
        if (isset($_POST["nombre"])) {

            //Creamos un cliente
            $cliente = new Cliente();
            $cliente->setCedula($_POST["cedula"]);
            $cliente->setNick($_POST["nick"]);
            $cliente->setNombre($_POST["nombre"]);
            $cliente->setApellido($_POST["apellido"]);
            $cliente->setCorreo($_POST["email"]);
            $cliente->setPassword(sha1($_POST["password"]));
            $cliente->setTelefono($_POST["telefono"]);
            $save = $cliente->save();
            var_dump($cliente);
            echo $_POST["nombre"]  . " " .$_POST["cedula"] . " " . $_POST["nick"] . " " . $_POST["apellido"] . " " . $_POST["email"] ;
        }



        //$this->redirect("clientes", "index");
    }

    public function borrar()
    {
        if (isset($_GET["cedula"])) {
            $id = (int)$_GET["cedula"];

            $cliente = new cliente();
            $cliente->deleteById($id);
        }
        $this->redirect();
    }



}

?>