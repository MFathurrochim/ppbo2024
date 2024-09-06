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
