<?php 
    $title = "While Do/While Loop";
        include 'includes/header.php'
    ?>
 
    <h1>While Loop</h1>
    <?php
        $grade = 0; 
        // Infinate Loop
        // while($grade < 10){
        //   echo '<p>I AM LESS THAN 10!</p>';
        // }
        //Pre-Condition Loop
        while($grade < 10){
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++; 
        }

        echo 'EXIT LOOP!';
    ?>
    
    <h1>DO-While Loop</h1>
    <?php 
        // Posr Condition Loop.
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP!';
    ?>
<?php require 'includes/footer.php' ?>

