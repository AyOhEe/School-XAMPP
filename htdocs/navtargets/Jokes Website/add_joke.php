<?php

    //connect to the database
    include "db.php";

    //get the joke data
    $joke_question = $_GET["joke_question"];
    $joke_answer = $_GET["joke_answer"];

    //display new joke
    echo "<h1>Trying to add a new joke:</h1>";
    echo "<h3>$joke_question<br>";
    echo "$joke_answer</h3>";
    
    echo "<p><a href=\"/navtargets/Jokes%20Website\">Return to search page</a></p>";

    //add new joke
    $sql = "INSERT INTO Jokes VALUES (NULL, '$joke_question', '$joke_answer')";
    $result = $mysqli->query($sql);

    //close db connection (search_all_jokes makes a new one)
    $mysqli->close();

    //show all jokes in the database
    include "search_all_jokes.php";
?>