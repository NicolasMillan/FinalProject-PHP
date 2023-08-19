<!DOCTYPE html>
<html>
<head>
    <title>Motorcycle Trivia Game</title>
</head>
<body>
    <h1>Motorcycle Trivia Game</h1>

    <?php
    // Array of trivia questions about motorcycles
    $questions = array(
        "What company produces the iconic 'Harley-Davidson' motorcycles?",
        "Which motorcycle brand is known for its sportbike 'Ninja' series?",
        "What is the term for the protective gear motorcyclists wear to prevent injury in case of accidents?",
        "Which type of motorcycle is designed for off-road use and rough terrains?",
        "What does the abbreviation 'CC' stand for in relation to motorcycle engines?"
    );

    // Array of correct answers corresponding to the questions
    $answers = array(
        "Harley-Davidson",
        "Kawasaki",
        "Gear or Gearset",
        "Dirt Bike",
        "Cubic Centimeters"
    );

    // Count the number of questions
    $numQuestions = count($questions);
    // Initialize the user's score
    $score = 0;

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Loop through each question
        for ($i = 0; $i < $numQuestions; $i++) {
            // Get the user's answer for the current question
            $userAnswer = $_POST["q$i"];
            // Get the correct answer for the current question
            $correctAnswer = $answers[$i];

            // Display the current question
            echo "<p><strong>Question " . ($i + 1) . ":</strong> " . $questions[$i] . "</p>";
            // Display the user's answer
            echo "<p>Your answer: $userAnswer</p>";
            // Display the correct answer
            echo "<p>Correct answer: $correctAnswer</p>";

            // Check if the user's answer is correct
            if ($userAnswer == $correctAnswer) {
                // Display "Correct!" in green
                echo "<p><span style='color: green;'>Correct!</span></p>";
                // Increment the user's score
                $score++;
            } else {
                // Display "Incorrect." in red
                echo "<p><span style='color: red;'>Incorrect.</span></p>";
            }
        }

        // Display the user's final score
        echo "<h2>Your Score: $score / $numQuestions</h2>";
    }
    ?>

    <!-- Form to input answers -->
    <form method="POST" action="">
        <?php
        // Loop through each question to create input fields
        for ($i = 0; $i < $numQuestions; $i++) {
            echo "<p><strong>Question " . ($i + 1) . ":</strong> " . $questions[$i] . "</p>";
            // Input field for the user's answer
            echo "<input type='text' name='q$i'><br><br>";
        }
        ?>
        <!-- Submit button -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
