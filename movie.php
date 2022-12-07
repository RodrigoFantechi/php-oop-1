<?php

require __DIR__ . '/Genre.php';

class Movie {
    public $name;
    public $genres;
    public $description;
    public static $coverImage;

    public function __construct(string $name, array $genres, string $description, string $coverImage) {
        $this->name = $name;
        $this->genres = $genres;
        $this->description = $description;
        $this->coverImage = $coverImage;

    }
    
    public function getName()
    {
       return $this->name;
    }
}
