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

            //get the joke data
            $joke_question = $_GET["joke_question"];
            $joke_answer = $_GET["joke_answer"];

            //display new joke
            echo "<h1>Trying to add a new joke:</h1>";
            echo "<div class=\"accordion\"><h3>$joke_question</h3>";
            echo "<div><p>$joke_answer</p></div></div>";
            
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
    </body>

</html>