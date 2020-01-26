<?php
class DetalleFactura{
    private $id_detalle_factura;
    private $nro_factura;
    private $cod_producto;
    private $precio_unitario;
    private $cantidad;



    /**
     * Get the value of Id Detalle Factura
     *
     * @return mixed
     */
    public function getIdDetalleFactura()
    {
        return $this->id_detalle_factura;
    }

    /**
     * Set the value of Id Detalle Factura
     *
     * @param mixed $id_detalle_factura
     *
     * @return self
     */
    public function setIdDetalleFactura($id_detalle_factura)
    {
        $this->id_detalle_factura = $id_detalle_factura;

        return $this;
    }

    /**
     * Get the value of Nro Factura
     *
     * @return mixed
     */
    public function getNroFactura()
    {
        return $this->nro_factura;
    }

    /**
     * Set the value of Nro Factura
     *
     * @param mixed $nro_factura
     *
     * @return self
     */
    public function setNroFactura($nro_factura)
    {
        $this->nro_factura = $nro_factura;

        return $this;
    }

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
     * Get the value of Precio Unitario
     *
     * @return mixed
     */
    public function getPrecioUnitario()
    {
        return $this->precio_unitario;
    }

    /**
     * Set the value of Precio Unitario
     *
     * @param mixed $precio_unitario
     *
     * @return self
     */
    public function setPrecioUnitario($precio_unitario)
    {
        $this->precio_unitario = $precio_unitario;

        return $this;
    }

    /**
     * Get the value of Cantidad
     *
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of Cantidad
     *
     * @param mixed $cantidad
     *
     * @return self
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

}
?>
