<?php 


class Book{
    public int $id;
    public string $name;
    public string $bio;

    //constructor
    public function __construct(int $id, string $name, string $bio)
    {
        $this->id = $id;
        $this->name = $name;
        $this->bio = $bio;
    }

    // Getters & Setters
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name;
    }

    public function getBio()
    {
        return $this->bio;
    }
    public function setBio($bio)
    {
        return $this->bio;
    }


    // Method
    public function getAllAuthors() 
    {
        // Code pour récuperer tous les livres
    }
    public function getOneAuthor() 
    {

    }
    public function addAuthor()
    {
        
    }
    public function editAuthor()
    {
        
    }
    public function deleteAuthor()
    {
        
    }
}