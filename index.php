    <?php 
        $title = "Index";
        include 'includes/header.php'
        
    ?>

    <!-- Basic HTML-->
    <h1> HELLO WORLD!!  Hello HTML - PHP Primer</h1>
    <br/>
    <?php
         //Printing to HTML using echo
         echo 'Hello php!';
         echo '<br/>';
         echo 'second line';
         echo '<br/>';
    
         //Declare variable
         $name = 'Glassford Beckford';
         $age = 45;
         //echo variable
         echo $name;
         echo '<h1>My Name is: '.$name.' </h1>';
         echo '<h1>My age is: '.$age.' </h1>';
         //echo using double quotes and interpolation
         echo "<h1>My Name is: $name </h1>";

    ?>
     <button type="button" class="btn btn-dark">CLICK ME!</button>

    <?php 
         require 'includes/footer.php' 
   
    ?>