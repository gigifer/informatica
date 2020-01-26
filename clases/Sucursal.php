<?php
class Suculsal{
  private $id_sucursal;
  private $descripcion;
  private $id_empresa;




    /**
     * Get the value of Id Sucursal
     *
     * @return mixed
     */
    public function getIdSucursal()
    {
        return $this->id_sucursal;
    }

    /**
     * Set the value of Id Sucursal
     *
     * @param mixed $id_sucursal
     *
     * @return self
     */
    public function setIdSucursal($id_sucursal)
    {
        $this->id_sucursal = $id_sucursal;

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

}
 ?>
