<?php


class usuario
{

    private $id;
    private $usuario;
    private $contrasena;
    private $foto;
    private $tabla;
    private $carpetaFotos;

    /**
     * usuario constructor.
     * @param $id
     * @param $usuario
     * @param $contrasena
     * @param $foto
     * @param $tabla
     * @param $carpetaFotos
     */
    public function __construct($id="", $usuario="", $contrasena="", $foto="")
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->foto = $foto;
        $this->tabla = "usuario";
        $this->carpetaFotos = "fotos/";
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
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * @param mixed $contrasena
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function insertar($datos,$foto)
    {
        $conexion = new Bd();
        $conexion->insertarElemento($this->tabla, $datos,$this->carpetaFotos, $foto);
    }

    public function imprimirEnTr(){

        $html = "<tr><td>".$this->id."</td>
            <td>".$this->usuario."</td>
            <td>".$this->contrasena."</td>
            <td><img src='".$this->foto."'></td>
            <td><a href='#'>Ver</a> </td>
            <td><a href='#'>Borrar</a> </td>
            <td><a href='#'>Editar</a> </td></tr>";

        return $html;

    }


}