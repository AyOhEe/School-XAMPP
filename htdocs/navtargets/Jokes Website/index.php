<html>
    <head>

    </head>

    <body>
        <h1>Jokes page</h1>
        <p>
            <a href="/">Back to navigation</a>
        </p>

        <?php

        /*//include "db.php";
        //show error if connection failed. otherwise show connection info
        if ($mysqli->connect_errno){
            echo "Failed to connect to MySQL";
        }
        echo $mysqli->host_info ."<br>";

        //include "search_all_jokes.php";

        //close the connection: we're done here
        //$mysqli->close();
        */
        ?>

        <form action="search_keyword.php">
            Please enter a keyword to search for:<br>
            <input type="text" name="keyword" value="Chicken"><br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>