<?php


class Movie {

  private $title;
  private $rating;
  private $release_date;
  private $genre;

  function __construct( $title, $rating, $release_date ){
    $this->title = $title;
    $this->rating = $rating;
    $this->release_date = $release_date;
  }

  function getTitleYear(){
    echo $this->title.' ('.substr($this->release_date, 0, 4).')';
  }

  function getTitle(){
    return $this->title;
  }

  function setTitle( $title ){
    if (strlen($title) >= 2) {
      $this->title = $title;
    }
  }

}


?>
