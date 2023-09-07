<html>
    <head>

    </head>

    <body>
        <h1>Jokes page</h1>

        <?php

        //host, login details and db name
        $host = "localhost";
        $username = "root";
        $user_pass = "root";
        $db_name = "test";

        //connect to database
        $mysqli = new mysqli($host, $username, $user_pass, $db_name);
        //show error if connection failed. otherwise show connection info
        if ($mysqli->connect_errno){
            echo "Failed to connect to MySQL";
        }
        echo $mysqli->host_info ."<br>";

        
        //get all jokes in table and display to webpage
        $sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes";
        $result = $mysqli->query($sql);

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
    </body>
</html>