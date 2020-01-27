<?php
class Provincia{
  private $id_provincia;
  private $descripcion;
  private $id_pais;



    /**
     * Get the value of Id Provincia
     *
     * @return mixed
     */
    public function getIdProvincia()
    {
        return $this->id_provincia;
    }

    /**
     * Set the value of Id Provincia
     *
     * @param mixed $id_provincia
     *
     * @return self
     */
    public function setIdProvincia($id_provincia)
    {
        $this->id_provincia = $id_provincia;

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
     * Get the value of Id Pais
     *
     * @return mixed
     */
    public function getIdPais()
    {
        return $this->id_pais;
    }

    /**
     * Set the value of Id Pais
     *
     * @param mixed $id_pais
     *
     * @return self
     */
    public function setIdPais($id_pais)
    {
        $this->id_pais = $id_pais;

        return $this;
    }

}

 ?>
