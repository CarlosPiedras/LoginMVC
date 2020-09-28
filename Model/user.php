<?php
class User{ //creamos la clase (todas las clases son publicas por defecto)
   //Ponemos los atributods. (los atributos son siempre privados)
    private $id_user;
    private $email;
    private $password;
    //Creamos contructor. (en php solo hay un contructor)
    public function __construct($email, $password){ // function siempre publicas
        $this->email=$email; //$email son los datos que te introducen
        $this->password=$password;
    }
    //Metodos getters and setters. Gett para recivir valores y Sett para mostrar los valores
    

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }
}