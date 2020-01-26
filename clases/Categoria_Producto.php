<?php
class CategoriaProducto{
  private $id_categoria_producto;
  private $id_categoria;
  private $id_producto;



    /**
     * Get the value of Id Categoria Producto
     *
     * @return mixed
     */
    public function getIdCategoriaProducto()
    {
        return $this->id_categoria_producto;
    }

    /**
     * Set the value of Id Categoria Producto
     *
     * @param mixed $id_categoria_producto
     *
     * @return self
     */
    public function setIdCategoriaProducto($id_categoria_producto)
    {
        $this->id_categoria_producto = $id_categoria_producto;

        return $this;
    }

    /**
     * Get the value of Id Categoria
     *
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    /**
     * Set the value of Id Categoria
     *
     * @param mixed $id_categoria
     *
     * @return self
     */
    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;

        return $this;
    }

    /**
     * Get the value of Id Producto
     *
     * @return mixed
     */
    public function getIdProducto()
    {
        return $this->id_producto;
    }

    /**
     * Set the value of Id Producto
     *
     * @param mixed $id_producto
     *
     * @return self
     */
    public function setIdProducto($id_producto)
    {
        $this->id_producto = $id_producto;

        return $this;
    }

}

 ?>
