<?php
class Factura{
  private $nro_factura;
  private $fecha;
  private $id_empresa;
  private $id_usuario;
  private $fec_vencimiento;
  private $id_envio;
  private $id_forma_pago;



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
     * Get the value of Fecha
     *
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of Fecha
     *
     * @param mixed $fecha
     *
     * @return self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of Id Empresa
     *
     * @return mixed
     */
    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    /**
     * Set the value of Id Empresa
     *
     * @param mixed $id_empresa
     *
     * @return self
     */
    public function setIdEmpresa($id_empresa)
    {
        $this->id_empresa = $id_empresa;

        return $this;
    }

    /**
     * Get the value of Id Usuario
     *
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of Id Usuario
     *
     * @param mixed $id_usuario
     *
     * @return self
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    /**
     * Get the value of Fec Vencimiento
     *
     * @return mixed
     */
    public function getFecVencimiento()
    {
        return $this->fec_vencimiento;
    }

    /**
     * Set the value of Fec Vencimiento
     *
     * @param mixed $fec_vencimiento
     *
     * @return self
     */
    public function setFecVencimiento($fec_vencimiento)
    {
        $this->fec_vencimiento = $fec_vencimiento;

        return $this;
    }

    /**
     * Get the value of Id Envio
     *
     * @return mixed
     */
    public function getIdEnvio()
    {
        return $this->id_envio;
    }

    /**
     * Set the value of Id Envio
     *
     * @param mixed $id_envio
     *
     * @return self
     */
    public function setIdEnvio($id_envio)
    {
        $this->id_envio = $id_envio;

        return $this;
    }

    /**
     * Get the value of Id Forma Pago
     *
     * @return mixed
     */
    public function getIdFormaPago()
    {
        return $this->id_forma_pago;
    }

    /**
     * Set the value of Id Forma Pago
     *
     * @param mixed $id_forma_pago
     *
     * @return self
     */
    public function setIdFormaPago($id_forma_pago)
    {
        $this->id_forma_pago = $id_forma_pago;

        return $this;
    }

} ?>
