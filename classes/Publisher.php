<?php

/**
 * Class Publisher
 * Représentation d'un éditeur dans l'app Artemis
 */

namespace Artemis;

class Publisher
{
    // Properties
    public int $id;
    public string $name;

    // Constructor
    public function __construct(
        int $id, 
        string $name
        )
    {
        $this->id = $id;
        $this->name = $name;
    }

    // Getters & Setters 
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
//Pas de code ici