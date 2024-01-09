<?php
include 'connect.php'; // Database connection

// Sample questions and options data
$sample_questions = [
    "What is the capital of France?",
    "Who painted the Mona Lisa?",
    // Add more sample questions
];

// Insert sample questions into 'questions' table
foreach ($sample_questions as $question_text) {
    $insert_question_sql = "INSERT INTO questions (question_text) VALUES ('$question_text')";
    if ($conn->query($insert_question_sql) !== TRUE) {
        echo "Error inserting question: " . $conn->error;
    } else {
        $question_id = $conn->insert_id; // Get the last inserted question ID

        // Sample options for each question
        $sample_options = [
            "Paris" => true,
            "Rome" => false,
            "Berlin" => false,
            // Add more sample options and set the correct one
        ];

        // Insert sample options into 'options' table
        foreach ($sample_options as $option_text => $is_correct) {
            $insert_option_sql = "INSERT INTO options (question_id, option_text, is_correct) VALUES ('$question_id', '$option_text', '$is_correct')";
            if ($conn->query($insert_option_sql) !== TRUE) {
                echo "Error inserting option: " . $conn->error;
            }
        }
    }
}

$conn->close();
?>