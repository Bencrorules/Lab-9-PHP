<!DOCTYPE html>
<h1>Results</h1>
    <?php 
        $answer1 = $_POST['question1'];
        $answer2 = $_POST['question2'];
        $answer3 = $_POST['question3'];
        $answer4 = $_POST['question4'];
        $answer5 = $_POST['question5'];
        
        $totalCorrect = 0;
            
        echo "Question 1: How many letters are in the word 'Apple'<br>";
        echo "You answered: $answer1<br>";
        echo "Correct answer: 5<br>";
        if ($answer1 == "5") { $totalCorrect++; }

        echo "Question 1: How many letters are in the word 'Banana'<br>";
        echo "You answered: $answer2<br>";
        echo "Correct answer: 6<br>";
        if ($answer2 == "6") { $totalCorrect++; }

        echo "Question 1: How many letters are in the word 'Orange'<br>";
        echo "You answered: $answer3<br>";
        echo "Correct answer: 6<br>";
        if ($answer3 == "6") { $totalCorrect++; }

        echo "Question 1: How many letters are in the word 'Grape'<br>";
        echo "You answered: $answer4<br>";
        echo "Correct answer: 5<br>";
        if ($answer4 == "5") { $totalCorrect++; }

        echo "Question 1: How many letters are in the word 'Nut'<br>";
        echo "You answered: $answer5<br>";
        echo "Correct answer: 3<br>";
        if ($answer5 == "3") { $totalCorrect++; }
            
        $percent = $totalCorrect / 5 * 100;
        echo "<div id='results'>You answered $totalCorrect / 5 correctly (%$percent)</div>";  
    ?>