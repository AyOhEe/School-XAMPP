<?php

    //connect to the database
    include "db.php";

    //get all jokes in table and display to webpage
    $sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes";
    $result = $mysqli->query($sql);

?>

<h2>Show all jokes</h2>
<div class="accordion">
<?php
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            //echo "id: ".$row["JokeID"]." - Joke: ".$row["Joke_question"]." - Answer: ".$row["Joke_answer"]."<br>";
            echo "<h3>".$row['Joke_question']."</h3>";
            echo "<div><p>";
            echo $row['Joke_answer'];
            echo "</p></div>";
        }
    } else {
        echo "0 results";
    }

    //close the connection: we're done here
    $mysqli->close();
?>
</div>