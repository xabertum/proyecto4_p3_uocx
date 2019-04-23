<?php

class Usuario {
    
    // Variables internas
    
    private $id;
    private $nombre;
    private $username;
    private $password;
    private $rol;    
    


    //Getters & Setters
    
    /**
     * @return mixed
     */
    public function getNombre ()
    {
        return $this->nombre;
    }
    
    /**
     * @param mixed $nombre
     */
    public function setNombre ($nombre)
    {
        $this->nombre = $nombre;
    }    
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    
    
    
    
    
    
    
}

