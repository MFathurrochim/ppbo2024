<?php
require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';


$author = new Author("M.F Rochim", "Nasi goreng tanpa nasi");
$publisher = new Publisher("M.F Rochim", "Danau Sentarum", "085156090998");
$book = new Book(1101231034, "Memasak nasi goreng tanpa nasi", "Seseorang yang memasak nasi goreng tanpa nasi", "Memasak", "Indonesia", 80, $author->getName(), $publisher->getName());

print_r($book->showAll());
print_r($book->detail("1101231034"));
echo "Nomor pencipta: " . $publisher->getPhone();

?>