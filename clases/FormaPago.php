<?php
class formasPago{
  private $id_forma_pago;
  private $descripcion;



    public function getIdFormaPago()
    {
        return $this->id_forma_pago;
    }


    public function setIdFormaPago($id_forma_pago)
    {
        $this->id_forma_pago = $id_forma_pago;

        return $this;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }

  
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

}
 ?>
