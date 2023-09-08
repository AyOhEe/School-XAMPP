<?php

    //get the joke data
    $joke_question = $_GET["joke_question"];
    $joke_answer = $_GET["joke_answer"];

    //display new joke
    echo "<h1>Trying to add a new joke:</h1>";
    echo "<h3>$joke_question<br>";
    echo "$joke_answer</h3>";
    
    echo "<p><a href=\"/navtargets/Jokes%20Website\">Return to search page</a></p>";


    //connect to the database
    include "db.php";

    //add new joke
    $sql = "INSERT INTO Jokes VALUES (NULL, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $joke_question, $joke_answer);
    $result = $stmt->execute() or die(mysqli_error());
    $stmt->close();

    //close db connection
    $mysqli->close();

    
    //show all jokes in the database
    include "search_all_jokes.php";
?>