<?php

class UsuariosController extends ControladorBase
{
    public $conectar;
    public $adapter;
    private $cliente;

    public function __construct()
    {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
        $this->cliente = null;
    }

    public function index()
    {

        $producto = new Producto($this->adapter);
        $allProductos = $producto->getAll();
        if (isset($this->cliente)) {
            $this->view("index", array("user" => $this->cliente, "allproducts" => $allProductos));
        } else {
            $this->view("index", array("allproducts" => $allProductos));
        }

    }

    public function crear()
    {
        if (isset($_POST["nombre"])) {
            $cliente = new Cliente($this->adapter);
            $cliente->setCedula($_POST["cedula"]);
            $cliente->setNombre($_POST["nombre"]);
            $cliente->setNick($_POST["nick"]);
            $cliente->setApellido($_POST["apellido"]);
            $cliente->setCorreo($_POST["correo"]);
            $cliente->setPassword($_POST["password"]);
            $cliente->setTelefono($_POST["telefono"]);
            $save = $cliente->save();
            $this->cliente = $cliente;

            $producto = new Producto($this->adapter);
            $allProductos = $producto->getAll();

            session_start();
            $_SESSION["user"] = $cliente;
            $this->view("index", array("user" => $cliente, "allproducts" => $allProductos));


        } else {
            $this->redirect("Usuarios", "getRegister");
        }

    }

    public function borrar()
    {
        if (isset($_GET["cedula"])) {
            $id = (int)$_GET["cedula"];

            $cliente = new Cliente($this->adapter);
            $cliente->deleteById($id);
        }
        $this->redirect();
    }


    public function getLogin()
    {
        return $this->view("login", null);
    }

    public function getRegister()
    {
        return $this->view("register", null);
    }

    public function getProfile()
    {
        return $this->view("profile", null);
    }

    public function login()
    {
        if (isset($_POST["nick"])) {
            $cliente = new Cliente($this->adapter);
            $result = $cliente->getBy("Nick", $_POST["nick"]);
            if (isset($result)) {
                foreach ($result as $obj) {
                    if ($obj->Nick == $_POST["nick"] && $obj->Password == $_POST["password"]) {
                        $this->cliente = new Cliente($this->adapter);
                        $this->cliente->setCedula($obj->Cedula);
                        $this->cliente->setNombre($obj->Nombre);
                        $this->cliente->setNick($obj->Nick);
                        $this->cliente->setApellido($obj->Apellido);
                        $this->cliente->setCorreo($obj->Correo);
                        $this->cliente->setPassword($obj->Password);
                        $this->cliente->setTelefono($obj->Telefono);

                        $producto = new Producto($this->adapter);
                        $allProductos = $producto->getAll();
                        $_SESSION["user"] = $this->cliente;

                        $this->view("index", array("user" => $this->cliente, "allproducts" => $allProductos));
                    }
                }
            } else {
                $this->redirect("Usuarios", "getLogin");
            }
        } else {
            $this->redirect("Usuarios", "getLogin");
        }
    }

    public function order()
    {
        if (isset($_POST["pedido"])) {
            $pedido = $_POST["pedido"];
            $productos = explode(",", $pedido);
            $order = array();
            $product = new Producto($this->adapter);
            foreach ($productos as $prod) {
                $result = $product->getBy("Id", $prod);
                array_push($order, $result);
            }


            $this->view("order", array("allOrder" => $order));
        } else {
            $this->view("order", null);
        }
    }


}

?>
