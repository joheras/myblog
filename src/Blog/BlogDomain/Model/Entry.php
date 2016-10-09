<?php

namespace Blog\BlogDomain\Model;


class Entry {
    
    private $id;
    private $titulo;
    private $cuerpo;
    
    
    function __construct($id, $titulo, $cuerpo) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->cuerpo = $cuerpo;
    }

    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getCuerpo() {
        return $this->cuerpo;
    }

    public function __toString() {
        return "Title: " . $this->titulo . " , Body: " . $this->cuerpo;
    }

    
    
    
    
    
    
}
