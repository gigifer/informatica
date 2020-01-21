<?php
class Producto{
    private $cod_producto;
    private $descripcion;
    private $foto;
    private $precio;
    private $id_marca;



    /**
     * Get the value of Cod Producto
     *
     * @return mixed
     */
    public function getCodProducto()
    {
        return $this->cod_producto;
    }

    /**
     * Set the value of Cod Producto
     *
     * @param mixed $cod_producto
     *
     * @return self
     */
    public function setCodProducto($cod_producto)
    {
        $this->cod_producto = $cod_producto;

        return $this;
    }

    /**
     * Get the value of Descripcion
     *
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of Descripcion
     *
     * @param mixed $descripcion
     *
     * @return self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of Foto
     *
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of Foto
     *
     * @param mixed $foto
     *
     * @return self
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of Precio
     *
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of Precio
     *
     * @param mixed $precio
     *
     * @return self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of Id Marca
     *
     * @return mixed
     */
    public function getIdMarca()
    {
        return $this->id_marca;
    }

    /**
     * Set the value of Id Marca
     *
     * @param mixed $id_marca
     *
     * @return self
     */
    public function setIdMarca($id_marca)
    {
        $this->id_marca = $id_marca;

        return $this;
    }

}
?>
