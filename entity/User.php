<?php

class User
{
    private $idUser;
    private $username;
    private $password;
    private $email;
    /**@var $role Role */
    private $role;

    public function __construct()
    {
        $this->role = new Role();
    }

    /**
     * @return Role
     */
    public function getRole()
    {
        if (!isset($this->role)) {
            $this->role = new Role();
        }
        return $this->role;
    }

    /**
     * @param Role $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function __set($name, $value)
    {
        if (!isset($this->role)) {
            $this->role = new Role();
        }
        switch ($name) {
            case 'id_user':
                $this->idUser = $value;
                break;
            case 'role_id_role':
                $this->role->setIdRole($value);
                break;
            case 'role_nama_role':
                $this->role->setNamaRole($value);
                break;
        }
    }
}

?>