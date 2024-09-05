<?php

class Author {
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function show($type) {
        if ($type === 'name') {
            return $this->name;
        } elseif ($type === 'description') {
            return $this->description;
        } else {
            return null;
        }
    }
}

class Book {
    private $ISBN;
    private $title;
    private $description;
    private $category;
    private $language;
    private $numberOfPage;
    private $author;
    private $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Category' => $this->category,
            'Language' => $this->language,
            'NumberOfPage' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher,
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return null;
        }
    }
}

class Publisher {
    private $name;
    private $address;
    private $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}

$author = new Author("M.F Rochim", "Nasi goreng tanpa nasi");
$publisher = new Publisher("M.F Rochim", "Danau Sentarum", "085156090998");
$book = new Book(1101231034, "Memasak nasi goreng tanpa nasi", "Seseorang yang memasak nasi goreng tanpa nasi", "Memasak", "Indonesia", 80, $author->getName(), $publisher->getName());

print_r($book->showAll());
print_r($book->detail("1101231034"));
echo "Nomor pencipta: " . $publisher->getPhone();

?>