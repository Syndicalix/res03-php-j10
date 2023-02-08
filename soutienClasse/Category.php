<?php

class Category {

    // private attribute
    private int $id;
    private string $name;
    private string $description;
    private string $books;
    
    // public constructor
public function __construct(string $name, string $description, string $books)
    {
        $this->id = null;
        $this->name = $name;
        $this->description = $description;
        $this->books = [];
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getDescription() : string
    {
        return $this->description;
    }
    public function getBooks() : string
    {
        return $this->getBooks;
    }


    // public setter
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    public function setName(string $name) : void
    {
        $this->name = $ame;
    }
    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }
    public function setBooks(string $Book) : void
    {
        $this->books = $books;
    }
    public function addBook(Book $book)
    {
        $this->books[] = $book;
        return $this->books;
    }
    
    public function removeBook(Book $book)
    {
        $index = array_search($book, $this->books);
        if ($index !== false) {
            unset($this->books[$index]);
        }
        return $this->books;
    }
}    

?>