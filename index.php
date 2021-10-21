<?php
class Movie
{

   public $title;
   public $genre;
   public $country;
   public $year;

   function __construct($_title, $_genre, $_country, $_year,)
   {
      $this->title = $_title;
      $this->genre = $_genre;
      $this->country = $_country;
      $this->year = $_year;
   }

   public function getTitle()
   {
      return $this->title;
   }
}

$rocky = new Movie("RockyBalboa", "Sportivo/Drammatico", "Stati Uniti", 2006);
$creed = new Movie("Creed", "Sportivo/Drammatico", "Stati Uniti", 2015);

var_dump($rocky);
