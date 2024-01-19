<?php

class Role
{
    private $idRole;
    private $namaRole;

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param mixed $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    /**
     * @return mixed
     */
    public function getNamaRole()
    {
        return $this->namaRole;
    }

    /**
     * @param mixed $namaRole
     */
    public function setNamaRole($namaRole)
    {
        $this->namaRole = $namaRole;
    }

    public function __set($name, $value)
    {
        switch ($name) {
            case 'id_role':
                $this->idRole = $value;
                break;
            case 'nama_role':
                $this->namaRole = $value;
                break;
        }
    }
}

?>