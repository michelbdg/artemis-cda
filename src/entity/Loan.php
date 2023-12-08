<?php 


class CLient{
    public int $id;
    public string $client_id;
    public string $book_id;
    public DateTime $start_date;
    public DateTime $end_date;
    public string $returned;

    //constructor
    public function __construct(int $id, string $client_id, string $book_id, string $start_date, string $end_date, bool $returned)
    {
        $this->id = $id;
        $this->client_id = $client_id;
        $this->book_id = $book_id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->returned = $returned;
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

    public function getClient_id()
    {
        return $this->client_id;
    }
    public function setClient_id($client_id)
    {
        return $this->client_id;
    }

    public function getBook_id()
    {
        return $this->book_id;
    }
    public function setBook_id($book_id)
    {
        return $this->book_id;
    }

    public function getStart_date()
    {
        return $this->start_date;
    }
    public function setStart_date($start_date)
    {
        return $this->start_date;
    }

    public function getEnd_date()
    {
        return $this->returned;
    }
    public function setEnd_date($end_date)
    {
        return $this->returned;
    }

    public function getReturned()
    {
        return $this->returned;
    }
    public function setReturned($returned)
    {
        return $this->returned;
    }


    //method
    public function getAllPublishers() 
    {
        // Code pour récuperer tous les livres
    }
    public function getOnePublisher() 
    {

    }
    public function addPublisher()
    {
        
    }
    public function editPublisher()
    {
        
    }
    public function deletePublisher()
    {
        
    }
}