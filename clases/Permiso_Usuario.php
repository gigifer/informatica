<?php
class Permiso_Usuario{
  private $id_usuario;
  private $id_permiso;



    /**
     * Get the value of Id Usuario
     *
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of Id Usuario
     *
     * @param mixed $id_usuario
     *
     * @return self
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

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

}
 ?>
