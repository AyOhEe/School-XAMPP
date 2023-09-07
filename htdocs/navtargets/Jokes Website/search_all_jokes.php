<?php

//get all jokes in table and display to webpage
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes";
$result = $mysqli->query($sql);

echo "<h2>Show all jokes</h2>";
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id: ".$row["JokeID"]." - Joke: ".$row["Joke_question"]." - Answer: ".$row["Joke_answer"]."<br>";
    }
} else {
    echo "0 results";
}

?>