<?php 
  abstract class Shape{
      public $color;
  
   public function set_color($color){
       $this->color=$color;
   }
   public function get_color(){
       return $this->color;
   }
    abstract public function getArea();
    abstract public function getPerimeter();

}

  class Circle extends Shape{
      public $radius;
      public function __construct($color,$radius){
          $this->color=$color;
          $this->radius=$radius;

      }
      public function getArea(){
        return 3.142*$this->radius*$this->radius; 
      }
      public function getPerimeter(){
          return 2*3.142*$this->radius;
      }
  }

   class Rectangle extends Shape{
       public $width;
       public $height;
       public function __construct($width,$height,$color){
           $this->width=$width;
           $this->height=$height;
           $this->color=$color;
       }
       public function getArea(){
           return $this->height * $this->width ;
       }
       public function getPerimeter(){
           return 2*($this->height + $this->width);
       }
   }

   class Square extends Rectangle{
       public function __construct($color,$width,$height){
           $this->color=$color;
           $this->width=$width;
           $this->height=$height;
       }

   }
   function showInfo($a,$p,$c)
   {
       //echo "Area is : ".$a."<br>Parameter is : ".$p."<br>Color is : ".$c;
       echo "<table style='border:1px solid;'>";
       echo "<tr style='border:1px solid;'><th  style='border:1px solid;'>Area</th><th  style='border:1px solid;'>Perimeter</th><th  style='border:1px solid;'>Color</th></tr>";
       echo "<tr  style='border:1px solid;'><td  style='border:1px solid;'>".$a."</td><td  style='border:1px solid;'>".$p."</td><td  style='border:1px solid;'>".$c."</td></tr>";
       echo "</table>";
   }
?>