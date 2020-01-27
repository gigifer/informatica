<?php
class Barrio{
  private $id_barrio;
  private $descripcion;
  private $id_ciudad;



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

}

 ?>
