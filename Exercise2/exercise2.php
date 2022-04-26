<?php
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];

    echo "<p>Question 1: How many kilometer(km) is 1 mile equivalent to?</p>";
    echo "You answered: ".$q1."<br>";
    echo "Correct answer: 1.6 km<br>";

    echo "<p>Question 2: Which is the longest river in the world?</p>";
    echo "You answered: ".$q2."<br>";
    echo "Correct answer: Nile River<br>";

    echo "<p>Question 3: How many planets are there in our solar system?</p>";
    echo "You answered: ".$q3."<br>";
    echo "Correct answer: 8<br>";
    
    echo "<p>Question 4: Which is the easiest way to tell the age of many trees?</p>";
    echo "You answered: ".$q4."<br>";
    echo "Correct answer: To count the rings on the trunk<br>";

    echo "<p>Question 5: What do we call a newly hatched butterfly?</p>";
    echo "You answered: ".$q5."<br>";
    echo "Correct answer: A caterpillar<br>";

    $count  = 0;
    if($q1 == "1.6 km") {
        $count++;
    }
    if($q2 == "Nile River"){
        $count++;
    }
    if($q3 == "8"){
        $count++;
    }
    if($q4 == "To count the rings on the trunk"){
        $count++;
    }
    if($q5 == "A caterpillar"){
        $count++;
    }

    $percent = ($count/5)*100;

    echo "<p>You answered ".$count." out of 5 questions correctly.</p>";
    echo "<p>Score percentage: ".$percent."%</p><br>";
?>