<?php

require_once 'conexion.php';

class Producto{
    private $cod_producto;
    private $descripcion;
    private $foto;
    private $precio;
    private $id_marca;

    public function getCodProducto()
    {
        return $this->cod_producto;
    }

    public function setCodProducto($cod_producto)
    {
        $this->cod_producto = $cod_producto;

        return $this;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getIdMarca()
    {
        return $this->id_marca;
    }

    public function setIdMarca($id_marca)
    {
        $this->id_marca = $id_marca;

        return $this;
    }
    public function __construct() {
      $this->$cod_producto = NULL;
      $this->$descripcion = NULL;
      $this->$foto = NULL;
      $this->$precio = NULL;
      $this->$id_marca = NULL;
  }


}
?>
