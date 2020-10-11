<?php
require_once 'modelo/usuario.php';
class UsuariosController
{

    public $model;
    public $session;
    public $datos;
    public $route;

    public function __construct()
    {
        $this->model = new usuario;
        $this->session = session_start();
        $this->datos = array();
    }
    public function index()
    {
        require_once 'view/index.php';
    }
    public function listar(){
        require_once'view/admin/usuarios.php';
    }
    public function registro()
    {
        require_once 'view/register.php';
    }

    public function registrar()
    {
        if (isset($_POST) & !empty($_POST)) {
            //Agregar los datos al array
            $this->datos['tipo_documento'] = $_POST['tipo_documento'];
            $this->datos['no_documento'] = $_POST['no_documento'];
            $this->datos['nombre'] = $_POST['nombre'];
            $this->datos['email'] = $_POST['email'];

            $this->datos['clave'] = $_POST['clave'];
            $this->datos['clave'] = password_hash($this->datos['clave'], PASSWORD_BCRYPT);


            //Insercion

            $resultado=$this->model->insertar($this->datos);

            if ($resultado == 1) {
                echo '<script>alert("Ya estas registrado,puedes iniciar sesion")</script>';
                require_once 'view/index.php';
            } else {
                echo '<script>alert("Usuario no registrado")</script>';
                require_once 'view/register.php';
            }
        }
    }
    public function validar()
    {
        $no_documento = $_POST['no_documento'];
        $clave = $_POST['clave'];

        $resultado = $this->model->validacion($no_documento);

        if (!empty($resultado)) {
            $verificacion = password_verify($clave, $resultado[0]['clave']);
            if ($verificacion == 1) {
                $_SESSION['idusuario'] = $resultado[0]['idusuario'];
                $_SESSION['nombre'] = $resultado[0]['nombre'];
                require_once'view/admin/usuarios.php';
            } else {
                echo '<script>alert("Contraseña incorrecta")</script>';
                require_once 'view/index.php';
            }
        } else {
            echo '<script>alert("Usuario no existe")</script>';
            require_once 'view/index.php';
        }
        
    }
    public function eliminar(){
        $this->datos['idusuario']=$_REQUEST['idusuario'];
        
        $this->model->eliminar($this->datos);
        require_once'view/admin/usuarios.php';
    }



}
