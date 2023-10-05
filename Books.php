<?php
include 'conexion.php';
include 'database.php';

class Books{

    // protected $ISBN;
    
    // Protected $user_id;

    public $title;

    // protected $author;

    // protected $genre;


    public function __construct($title = null){
      //  $this->ISBN =$isbn;
     //   $this->user_id=$user_id;
        $this->title=$title;
      //  $this->author=$author;
       // $this->genre=$genre;
    }
    
    // public function getISBN()
    // {
    //     return $this->ISBN;
    // }
   
    // public function getUser()
    // {
    //     return $this->user_id;
    // }
    // public function setUser($user_id)
    // {
    //     $this->user_id;
    // }
    public function getTitle()
    
    {        
        $pdo = new PDO('mysql:dbname=libreria;host=localhost', 'root', '');

        $query = "SELECT `title` FROM `books` WHERE `user_id` IS NOT NULL";
        
        $stmt = $pdo->query($query);
        
        $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);
        
        return $resultados;

    }
    // public function getAuthor()
    // {
    //     return $this->author;
    // }
    // public function getGenre()
    // {
    //     return $this->genre;
    // }  


    public function getTitleAlquilado()
    
      {        
        $pdo = new PDO('mysql:dbname=libreria;host=localhost', 'root', '');

        $query = "SELECT DISTINCT `title` FROM `books` WHERE `user_id` IS NOT NULL";
        
        $stmt = $pdo->query($query);
        
        $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);
        
        return $resultados;

    }
}


?>