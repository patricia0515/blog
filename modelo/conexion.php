<?php
class conexion
{

    private $server;
    private $user;
    private $pass;
    private $db;

    public function __construct()
    {
        $this->server = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->bd = 'blog';
    }
    public function conectar()
    {
        $link = new PDO("mysql:host=$this->server;dbname=$this->bd", $this->user, $this->pass);
        return $link;
    }
}
