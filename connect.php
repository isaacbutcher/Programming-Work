<?php

    // Creating a variable for each of the input boxes
    $foodname = $_POST['foodname'];
    $ingredients = $_POST['ingredients'];
    $stepbystep = $_POST['stepbystep'];
    $season = $_POST['season'];
    $time = $_POST['time'];
    $difficulty = $_POST['difficulty'];

    // Connecting to a database
    $conn = new mysqli('localhost', 'root', '', 'survey_results');
    if($conn->connect_error){
        die('Connection Failed : '. $conn->connect_error);

    } 
    else {
        $stmt = $conn->prepare("INSERT INTO survey(FoodName, Ingredients, Stepbystep, Season, Cooking, Difficulty) values(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssi",$foodname, $ingredients, $stepbystep, $season, $time, $difficulty);
            $stmt->execute();
            echo "Answers sent! Thank you!";
            $stmt->close();
            $conn->close();
    }
?>