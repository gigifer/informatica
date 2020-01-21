<?php
class PromocionesProducto{
  private $id_promociones_producto;
  private $id_promocion;
  private $id_producto;




    /**
     * Get the value of Id Promociones Producto
     *
     * @return mixed
     */
    public function getIdPromocionesProducto()
    {
        return $this->id_promociones_producto;
    }

    /**
     * Set the value of Id Promociones Producto
     *
     * @param mixed $id_promociones_producto
     *
     * @return self
     */
    public function setIdPromocionesProducto($id_promociones_producto)
    {
        $this->id_promociones_producto = $id_promociones_producto;

        return $this;
    }

    /**
     * Get the value of Id Promocion
     *
     * @return mixed
     */
    public function getIdPromocion()
    {
        return $this->id_promocion;
    }

    /**
     * Set the value of Id Promocion
     *
     * @param mixed $id_promocion
     *
     * @return self
     */
    public function setIdPromocion($id_promocion)
    {
        $this->id_promocion = $id_promocion;

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
