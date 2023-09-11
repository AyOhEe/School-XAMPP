<html style="margin-left: 20px; margin-right: 20px">
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">

        <link rel="stylesheet" href="/jquery/1.13.2_themes_base_jquery-ui.css">
        <script src="/jquery/jquery-3.6.0.js"></script>
        <script src="/jquery/1.13.2_jquery-ui.js"></script>
        <script>
        $( function() {
        $( ".accordion" ).accordion();
        } );
        </script>
    </head>

    <body>
        <?php
            //connect to the database
            include "db.php";

            //get the keyword match pattern
            $keyword = $_GET["keyword"];
            $pattern = "%".$keyword."%";

            //get all jokes in table and display to webpage
            $sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes WHERE Joke_question LIKE ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("s", $pattern);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            echo "<h2>Show all jokes with the word \"$keyword\"</h2>";
            echo "<p><a href=\"/navtargets/Jokes%20Website\">Return to search page</a></p>";
        ?>

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
    </body>
</html>