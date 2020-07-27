<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include'shape.php';
?>
<h2>Square</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    
                        <label for="rad">Width:</label>
                        <input type="number"  id="width" placeholder="Enter width" name="width"><br><br>
                    
                        <label for="rad">Height:</label>
                        <input type="number"  id="height" placeholder="Enter height" name="height"><br><br>
            
                        <label for="color">Color:</label>
                        <input type="text"  id="color" placeholder="Enter color" name="color"><br><br>
                    
                    <button type="submit"  name="submit">Submit</button>
                    
                    
                </form>
                <br>
            <hr>

            <h2>Square Result Table</Table></h2>
            <?php 
            include 'total.php';
            
            if(isset($_POST['submit'])){
                $width=$_POST['width'];
                $height=$_POST['height'];
                $color=$_POST['color'];

                $rectangle=new Rectangle($width,$height,$color);
                $area=$rectangle->getArea();
                $perimeter=$rectangle->getPerimeter();
                $color=$rectangle->get_color();

                showInfo($area,$perimeter,$color);
            }


            
            ?>
</body>
</html>