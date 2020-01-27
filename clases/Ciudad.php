<?php
class Ciudad{
    private $id_ciudad;
    private $descripcion;
    private $id_provincia;



    /**
     * Get the value of Id Ciudad
     *
     * @return mixed
     */
    public function getIdCiudad()
    {
        return $this->id_ciudad;
    }

    /**
     * Set the value of Id Ciudad
     *
     * @param mixed $id_ciudad
     *
     * @return self
     */
    public function setIdCiudad($id_ciudad)
    {
        $this->id_ciudad = $id_ciudad;

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

}
?>
