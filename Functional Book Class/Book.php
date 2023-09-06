<?php
class Book {
    // private function that can read all the properties inside the class
    private $title;
    private $author;
    private $pages;

    // public funtion that construct the given properties which is the title, author, and pages.
    public function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    // public method that set the title
    public function setTitle($title) {
        $this->title = $title;
    }

    // public method that get the title
    public function getTitle() {
        return $this->title;
    }

    // public method that set the author
    public function setAuthor($author) {
        $this->author = $author;
    }

    // public method that get the author
    public function getAuthor() {
        return $this->author;
    }

    // public method that set the pages
    public function setPages($pages) {
        $this->pages = $pages;
    }

    // public method that get the pages
    public function getPages() {
        return $this->pages;
    }

    // public method that describe into "title" by "author" has "pages"
    public function describe() {
        return $this->title . " by " . $this->author . " has " . $this->pages . " pages";
    }
}

// Creating a object that instantiated the title
$book = new Book("Harry Potter", "JK Rowling", 400);

// to print the book using the describe method
echo $book->describe() . "\n";

// Modifying the title and pages using the setTitle and setPages
$book->setTitle("Harry Potter with Magic wand and Friends");
$book->setPages(696);
// the describe will print to see the changes
echo $book->describe() . "\n";
?>


