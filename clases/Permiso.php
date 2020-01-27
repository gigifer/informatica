<?php
class Permiso{
  private $id_permiso;
  private $descripcion;



    /**
     * Get the value of Id Permiso
     *
     * @return mixed
     */
    public function getIdPermiso()
    {
        return $this->id_permiso;
    }

    /**
     * Set the value of Id Permiso
     *
     * @param mixed $id_permiso
     *
     * @return self
     */
    public function setIdPermiso($id_permiso)
    {
        $this->id_permiso = $id_permiso;

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

}

 ?>
