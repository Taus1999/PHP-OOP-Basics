<?php
// Your code here!
abstract class User {
  protected $scores           = 0;
  protected $numberOfArticles = 0;
 
  // The abstract and concrete methods
  public function setNumberOfArticles($int){
      $numberOfArticles = (int)$int;
      $this->numberOfArticles = $numberOfArticles;
  }
  
  public function getNumberOfArticles(){
      return $this->numberOfArticles;
  }
  
  abstract public function calcScores();
}

class Author extends User {
    public function calcScores() {
        return $this->scores = $this->numberOfArticles*10+20;
    }
}

class Editor extends User {
    public function calcScores() {
        return $this->scores = $this->numberOfArticles*6+15;
    }
    
}
const BR = '<br />';

$author1 = new Author();
$author1->setNumberOfArticles(8);
echo $author1->calcScores().BR;
//echo BR;


$editor1 = new Editor();
$editor1->setNumberOfArticles(15);
echo $editor1->calcScores();

?>





