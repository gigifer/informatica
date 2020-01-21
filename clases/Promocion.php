<?php
class Promocion{
  private $id_promocion;
  private $descripcion;
  private $fecha_inicio;
  private $fecha_fin;
  private $porcentaje;




    /**
     * Get the value of Id Promocion
     *
     * @return mixed
     */
    public function getIdPromocion()
    {
        return $this->id_promocion;
    }

    /**
     * Set the value of Id Promocion
     *
     * @param mixed $id_promocion
     *
     * @return self
     */
    public function setIdPromocion($id_promocion)
    {
        $this->id_promocion = $id_promocion;

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
     * Get the value of Fecha Inicio
     *
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * Set the value of Fecha Inicio
     *
     * @param mixed $fecha_inicio
     *
     * @return self
     */
    public function setFechaInicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    /**
     * Get the value of Fecha Fin
     *
     * @return mixed
     */
    public function getFechaFin()
    {
        return $this->fecha_fin;
    }

    /**
     * Set the value of Fecha Fin
     *
     * @param mixed $fecha_fin
     *
     * @return self
     */
    public function setFechaFin($fecha_fin)
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    /**
     * Get the value of Porcentaje
     *
     * @return mixed
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set the value of Porcentaje
     *
     * @param mixed $porcentaje
     *
     * @return self
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

}
 ?>
