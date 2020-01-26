<?php
class Empresa{
  private $id_empresa;
  private $razon social;
  private $dir_calle;
  private $nro_calle;
  private $id_barrio;


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
     * Get the value of Razon
     *
     * @return mixed
     */
    public function getRazon()
    {
        return $this->razon;
    }

    /**
     * Set the value of Razon
     *
     * @param mixed $razon
     *
     * @return self
     */
    public function setRazon($razon)
    {
        $this->razon = $razon;

        return $this;
    }

    /**
     * Get the value of Dir Calle
     *
     * @return mixed
     */
    public function getDirCalle()
    {
        return $this->dir_calle;
    }

    /**
     * Set the value of Dir Calle
     *
     * @param mixed $dir_calle
     *
     * @return self
     */
    public function setDirCalle($dir_calle)
    {
        $this->dir_calle = $dir_calle;

        return $this;
    }

    /**
     * Get the value of Nro Calle
     *
     * @return mixed
     */
    public function getNroCalle()
    {
        return $this->nro_calle;
    }

    /**
     * Set the value of Nro Calle
     *
     * @param mixed $nro_calle
     *
     * @return self
     */
    public function setNroCalle($nro_calle)
    {
        $this->nro_calle = $nro_calle;

        return $this;
    }

    /**
     * Get the value of Id Barrio
     *
     * @return mixed
     */
    public function getIdBarrio()
    {
        return $this->id_barrio;
    }

    /**
     * Set the value of Id Barrio
     *
     * @param mixed $id_barrio
     *
     * @return self
     */
    public function setIdBarrio($id_barrio)
    {
        $this->id_barrio = $id_barrio;

        return $this;
    }

}

 ?>
