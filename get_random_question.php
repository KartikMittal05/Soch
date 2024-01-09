<?php
include 'connect.php';

// Select a random question
$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $question_text = $row['question_text'];
    $question_id = $row['question_id'];

    // Get options for the selected question
    $options_sql = "SELECT * FROM options WHERE question_id = $question_id";
    $options_result = $conn->query($options_sql);

    if ($options_result->num_rows > 0) {
        // Display the question and options
        echo "<h2>Question:</h2>";
        echo "<p>$question_text</p>";

        echo "<h3>Options:</h3>";
        while ($option_row = $options_result->fetch_assoc()) {
            $option_text = $option_row['option_text'];
            echo "<p>$option_text</p>";
        }
    } else {
        echo "No options found for this question.";
    }
} else {
    echo "No questions found in the database.";
}

$conn->close();
?>