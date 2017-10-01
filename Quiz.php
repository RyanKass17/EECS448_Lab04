<?php
    $answer1 = $_POST['Q1'];
    $answer2 = $_POST['Q2'];
    $answer3 = $_POST['Q3'];
    $answer4 = $_POST['Q4'];
    $answer5 = $_POST['Q5'];

    $correct = 0;
    if ($answer1 == "7")
    {
      $correct++;
    }
    echo"Question 1: How many days are in a week?" . "<br>" . "You answered: " . $answer1 . "<br>" . "Correct answer: 7" . "<br>" . "<br>";
    if ($answer2 == "Lucy")
    {
       $correct++;
    }
    echo"Question 2: Which is a real variety of yam?" . "<br>" . "You answered: " . $answer2 . "<br>" . "Correct answer: Lucy" . "<br>" . "<br>";
    if ($answer3 == "11")
    {
      $correct++;
    }
    echo"Question 3: What is the wind speed velocity of an unladen swallow?" . "<br>" . "You answered: " . $answer3 . "<br>" . "Correct answer: 11 meters per second" . "<br>" . "<br>";
    if ($answer4 == "Heart Disease")
    {
      $correct++;
    }
    echo"Question 4: What is the number one cause of death in the world?" . "<br>" . "You answered: " . $answer4 . "<br>" . "Correct answer: Heart Disease" . "<br>" . "<br>";
    if ($answer5 == "100")
    {
      $correct++;
    }
    echo"Question 5: What is my grade on this assignment?" . "<br>" . "You answered: " . $answer5 . "<br>" . "Correct answer: 100%" . "<br>" . "<br>";
    echo "You got $correct / 5 which is " . $correct/5*100 . "%";

?>
