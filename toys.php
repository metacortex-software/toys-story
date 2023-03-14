<?php

abstract class Toy 
{
  private int $power = 8;
  
  private int $positon;

  abstract function move()
  {
     $this->position++;
     $this->power--;
  }
}

class Duck extends Toy
{
  private $color;
  
  public function __construct(string $color)
  {
     $this->color = $color;  
  }
  
  public function getPosition() : int
  {
    return $this->posion; 
  }
}

$obj = new Duck('yellow');

$obj->move();
$obj->move();
$obj->move();

echo sprintf("on postion %d", $obj->getPostion());


