<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .RR{
          float:left;
      }
      .QQ{
          float:left;
      }
    </style>
</head>
<body>
<?php 
 include 'shape.php'; 
 ?>

            
                <h2>Circle</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <label for="rad">Radius:</label>
                        <input type="number"  id="rad" placeholder="Enter radius" name="radius"><br><br>
                    
                        <label for="color">Color:</label>
                        <input type="text"  id="color" placeholder="Enter color" name="color"><br><br>
                    
                    <button type="submit"  name="submit">Submit</button>
                    
                </form>
                <br>
        <hr>
        <h2> Circle Result Table</h2>
       
        <?php include 'total.php';
       

          if(isset($_POST['submit'])){
              $radius=$_POST['radius'];
              $color=$_POST['color'];

              $circle= new Circle($color,$radius);
              $area=$circle->getArea();
              $perimeter=$circle->getPerimeter();
              $color=$circle->get_color();

              showInfo($area,$perimeter,$color);

          }

              
        
        ?>
        
  
</body>
</html>