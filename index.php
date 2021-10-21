<?php
class Movie
{
   public $title;
   public $genre;
   public $country;
   public $year;

   function __construct($_title, $_genre, $_country, $_year)
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

   public function getGenre()
   {
      return $this->genre;
   }

   public function getCountry()
   {
      return $this->country;
   }

   public function getYear()
   {
      return $this->year;
   }
}

$rocky = new Movie("Rocky Balboa", "Sportivo/Drammatico", "Stati Uniti", 2006);
$creed = new Movie("Creed", "Sportivo/Drammatico", "Stati Uniti", 2015);

var_dump($rocky, $creed);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <div>
      Titolo: <?php echo $rocky->getTitle() ?> <br>
      Genere: <?php echo $rocky->getGenre() ?> <br>
      Paese: <?php echo $rocky->getCountry() ?> <br>
      Anno: <?php echo $rocky->getYear() ?> <br>
   </div>
</body>

</html>