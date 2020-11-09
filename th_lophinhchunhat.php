<?php
class Rectangle {
    public $width;
    public $height;
  public function _construct($width,$height){
      $this->width = $width;
      $this->height = $height;
  }
  public function getArea(){
      return $this->width * $this->height;
  }
  public function getPerimeter(){
      return (($this->width + $this->height)*2);
  }
  public function getDisplay(){
      return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
  }
}
$width = 10;
$height =20;
$rectangle= new Rectangle($width,$height);

echo $rectangle->width;
echo $rectangle->height;

$rectangle->height = 30;
$rectangle->width = 20;

echo $rectangle->height."<br>";
echo $rectangle->width."<br>";
echo $rectangle->getPerimeter().'<br>';
echo $rectangle->getArea()."<br>";
echo ("Your Rectangle". $rectangle->display());
?>
