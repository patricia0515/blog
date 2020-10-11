<?php
class routesController
{
    public function persona()
    {
        header('location:?c=&a=');
    }

    public function categorias()
    {
        header('location:');
    }
    public function usuarios(){
        header('location:?c=Usuarios&a=listar');
    }
}
