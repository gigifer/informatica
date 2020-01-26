<?php
class Envio{
  private $id_envio;
  private $id_suculsal;
  private $costo;
  private $id_estado;



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
     * Get the value of Id Suculsal
     *
     * @return mixed
     */
    public function getIdSuculsal()
    {
        return $this->id_suculsal;
    }

    /**
     * Set the value of Id Suculsal
     *
     * @param mixed $id_suculsal
     *
     * @return self
     */
    public function setIdSuculsal($id_suculsal)
    {
        $this->id_suculsal = $id_suculsal;

        return $this;
    }

    /**
     * Get the value of Costo
     *
     * @return mixed
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set the value of Costo
     *
     * @param mixed $costo
     *
     * @return self
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get the value of Id Estado
     *
     * @return mixed
     */
    public function getIdEstado()
    {
        return $this->id_estado;
    }

    /**
     * Set the value of Id Estado
     *
     * @param mixed $id_estado
     *
     * @return self
     */
    public function setIdEstado($id_estado)
    {
        $this->id_estado = $id_estado;

        return $this;
    }

}

 ?>
