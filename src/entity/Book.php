<?php

/**
 * Class Book
 * Représentation d'un livre dans l'app Artemis
 */

namespace Artemis;

require __DIR__.'/../controller/Database.php';

use PDO;
use Artemis\Databse;
use Artemis\Database;

class Book
{
    // Properties
    public int $id;
    public string $title;
    public string $description;
    public string $ISBN;
    public int $author_id;
    public int $publisher_id;

    // Constructor
    public function __construct(
        int $id,
        string $title,
        string $description,
        string $ISBN,
        int $author_id,
        int $publisher_id
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->ISBN = $ISBN;
        $this->author_id = $author_id;
        $this->publisher_id = $publisher_id;
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

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }
    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
        return $this;
    }

    public function getAuthor_id()
    {
        return $this->author_id;
    }
    public function setAuthor_id($author_id)
    {
        $this->author_id = $author_id;
        return $this;
    }

    public function getPublisher_id()
    {
        return $this->publisher_id;
    }
    public function setPublisher_id($publisher_id)
    {
        $this->publisher_id = $publisher_id;
        return $this;
    }

    // Methods
    /**
     * Méthode statique permettant de récupérer tous les livres
     * Ne prend aucun paramètre
     * Retourne un tableau associatif
     */
    static public function getAllBooks(): array
    {
        // SELECT * FROM Book;
        $pdo = Database::getPDO(); // Connexion
        $query = $pdo->prepare("SELECT * FROM Book;"); // Requete SQL
        $query->execute(); // Execution de la requete
        $books = $query->fetchAll(PDO::FETCH_ASSOC); // Conversion en Tableau ASSOC
        return $books; // Envoie du tableau hors scope
    }

    static public function getOneBook()
    {
        $pdo = Database::getPDO();
        $query = "SELECT
                    Book.title AS BookTitle,
                    Author.name AS AuthorName,
                    Publisher.name AS PublisherName
                FROM Book JOIN Author ON Book.author_id = Author.id
                JOIN Publisher ON Book.publisher_id = Publisher.id
                WHERE Book.id = 1;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $book = $stmt->fetch(PDO::FETCH_ASSOC);
        return $book;
    }
    static public function addBook()
    {
        // Code
    }
    public function editBook()
    {
        // Code
    }
    public function deleteBook()
    {
        // Code
    }
}
// Code interdit après l'accolade