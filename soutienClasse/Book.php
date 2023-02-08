<?php

class Book {

    // private attribute
    private int $id;
    private string $title;
    private string $author;
    private string $categories;

    // public constructor
public function __construct(string $title, string $author, string $categories)
    {
        $this->id = null;
        $this->title = $title;
        $this->author = $author;
        $this->categories = array(Category);
    }
    
    // public getter
    public function getId() : int
    {
        return $this->id;
    }
    public function getTitle() : string
    {
        return $this->title;
    }
    public function getauthor() : string
    {
        return $this->author;
    }
    public function getCategories() : string
    {
        return $this->getCategories;
    }


    // public setter
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    public function setCategories(string $categories) : void
    {
        $this->categories = $categories;
    }
    public function addCategory(Category $category) {
        array_push($this->categories, $category);
    }
    public function removeCategory(Category $category) {
        $key = array_search($category, $this->categories);
        if ($key !== false) {
            unset($this->categories[$key]);
        }
    }
}
?>