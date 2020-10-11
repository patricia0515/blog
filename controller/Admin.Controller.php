<?php
require_once 'modelo/persona.php';
class AdminController
{
    public $model;
    public $session;
    public $datos;
    public $tipo;

    public function __construct()
    {
        $this->model = new persona;
        $this->session = session_start();
        $this->datos = array();
    }
    public function index()
    {
        require_once 'view/admin/usuarios.php';
    }
    public function talleres()
    {
        require_once 'view/admin/talleres.php';
    }
    public function crear_talleres_vista()
    {
        require_once 'view/admin/crear-taller.php';
    }
    public function crear_proveedor_vista()
    {
        require_once 'view/admin/crear-proveedor.php';
    }
    public function proveedores()
    {
        require_once 'view/admin/proveedores.php';
    }
    public function guardar()
    {
        if (isset($_POST) & !empty($_POST)) {
            $this->datos['nombre']          = $_POST['nombre'];
            $this->datos['tipo_documento']  = $_POST['tipo_documento'];
            $this->datos['no_documento']    = $_POST['no_documento'];
            $this->datos['direccion']       = $_POST['direccion'];
            $this->datos['telefono']        = $_POST['telefono'];
            $this->datos['email']           = $_POST['email'];
            $this->datos['tipo']            = $_POST['tipo'];

            $this->model->insertar($this->datos);

            if ($this->datos['tipo'] == 'proveedor') {
                require_once 'view/admin/proveedores.php';
            } elseif ($this->datos['tipo'] == 'taller') {
                require_once 'view/admin/talleres.php';
            }
        }
    }
    public function eliminar()
    {
        $id = $_REQUEST['id'];
        $tipo = $_REQUEST['tipo'];
        $this->model->eliminar($id);

        if ($tipo == 'proveedor') {
            require_once 'view/admin/proveedores.php';
        } elseif ($tipo == 'taller') {
            require_once 'view/admin/talleres.php';
        }
    }


    public function actualizar()
    {
        $this->datos['id'] = $_POST['id'];
        $this->datos['direccion'] = $_POST['direccion'];
        $this->datos['telefono'] = $_POST['telefono'];
        $this->datos['email'] = $_POST['email'];
        $this->datos['tipo'] = $_POST['tipo'];
        $this->tipo = $_POST['tipo'];

        if ($this->datos['tipo'] == 'proveedor') {
            require_once 'view/admin/proveedores.php';
        } elseif ($this->datos['tipo'] == 'taller') {
            require_once 'view/admin/talleres.php';
        }
    }
}
