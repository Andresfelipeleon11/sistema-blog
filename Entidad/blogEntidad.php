<?php
namespace Entidad;

class Blog{
    private $idBlog;
    private $mensaje;
    private $idUsuario;

    /**
     * Get the value of idBlog
     */ 
    public function getIdBlog()
    {
        return $this->idBlog;
        
    }

    /**
     * Set the value of idBlog
     *
     * @return  self
     */ 
    public function setIdBlog($idBlog)
    {
        $this->idBlog = $idBlog;

        return $this;
    }

    /**
     * Get the value of mensaje
     */ 
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set the value of mensaje
     *
     * @return  self
     */ 
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }
}


?>