<?php 
     $title = "Arrays and Printout";
     include 'includes/header.php'

?>

    <h1><?php echo $title ?></h1>
    <?php
        //A variable
        $num = 3;

        //An array
        //Only one type of data
        $numbers = array(1,2,3,4,5,6,7,8,9,10,2,65,77,4,85,75,95,65,95,660,225);
        //you can access the value in a subscript of the array using the index.
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";
        
        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }

     ?>
<?php require 'includes/footer.php' ?>

