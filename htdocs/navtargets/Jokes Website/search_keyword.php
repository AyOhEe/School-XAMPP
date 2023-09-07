<?php
    //connect to the database
    include "db.php";

    //get the keyword parameter
    $keyword = $_GET["keyword"];

    //get all jokes in table and display to webpage
    $sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes WHERE Joke_question LIKE \"%".$keyword."%\"";
    $result = $mysqli->query($sql);

    echo "<h2>Show all jokes with the word \"".$keyword."\"</h2>";
    echo "<p><a href=\"/navtargets/Jokes%20Website\">Return to search page</a></p>";
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "id: ".$row["JokeID"]." - Joke: ".$row["Joke_question"]." - Answer: ".$row["Joke_answer"]."<br>";
        }
    } else {
        echo "0 results";
    }

    //close the connection: we're done here
    $mysqli->close();
?>