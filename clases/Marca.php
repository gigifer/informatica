<?php
class Marca{
  private $id_marca;
  private $descripcion;
  private $id_pais;



    /**
     * Get the value of Id Marca
     *
     * @return mixed
     */
    public function getIdMarca()
    {
        return $this->id_marca;
    }

    /**
     * Set the value of Id Marca
     *
     * @param mixed $id_marca
     *
     * @return self
     */
    public function setIdMarca($id_marca)
    {
        $this->id_marca = $id_marca;

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
