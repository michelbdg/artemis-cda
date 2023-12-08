<?php 


class Client{
    public int $id;
    public string $name;
    public string $email;
    public string $deposit;

    //constructor
    public function __construct(int $id, string $name, string $email, string $deposit)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->deposit = $deposit;
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

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email;
    }

    public function getDeposit()
    {
        return $this->deposit;
    }
    public function setDeposit($deposit)
    {
        return $this->deposit;
    }
}