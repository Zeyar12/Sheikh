<!DOCTYPE html>
 <html>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     Name:
     <input type="text" name="name"><br><br>

     Email:
     <input type="text" name="email"><br><br>

     Phone:
     <input type="text" name="phone"><br><br>

     Township:
     <select name="township" >
        <option value="London">London </option>
        <option value="Barcelona">Barcelona</option>
        <option value="Munich">Munich</option>
     </select><br><br>
      
     Grade:
     <input type="radio" name="grade" value="Final Year">Final Year
    <input type="radio" name="grade" value="Fourth Year">Fourth Year
    <input type="radio" name="grade" value="Third Year">Third Year <br><br>

     Subject:
     <input type="checkbox" name="subject[]" value="Java">Java
     <input type="checkbox" name="subject[]" value="Php">Php 
     <input type="checkbox" name="subject[]" value="Python">Python <br><br>

     <input type="submit" name="submit" value="submit">

     </form>
  </body>
 </html>

   <?php
      if($_SERVER["REQUEST_METHOD"] == "POST")
        
       {
           $name =$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
           $township=$_POST['township'];
           $grade=$_POST['grade'];
           $subject=$_POST['subject'];

           if(empty($name))
             {
                 echo "Name is Empty";
             }
             else{
                 echo "Name is" ." ".$name ."<br>";
             }


            if(empty($email))
            {
                echo "Email is Empty";
            } 
            else{
                echo "Email is" ." " .$email ."<br>";
            }

             

            if(empty($phone))
            {
                echo "Phone is Empty";
            }
            else{
                echo "Phone is" ." " .$phone ."<br>";
            }


            if(empty($township))
            {
                echo "Township is Empty";
            }
            else{
                echo "Township is" ." ".$township ."<br>";
            }


            if(empty($grade))
            {
                echo "Grade is Empty";
            }
            else{
                echo "Grade is" ." " .$grade ."<br>";
            }


            if(empty($subject))
            {
                echo "Subject is Empty";
            }
            else{
                foreach($subject as $s)
                echo "Subject is" ." " .$s ."<br>";
            }

       }


   ?>