<html>
    <head>

    </head>

    <body>
        <h1>Jokes page</h1>
        <a href="/">Back to navigation</a>

        <?php

        
        include "db.php";
        /*//show error if connection failed. otherwise show connection info
        if ($mysqli->connect_errno){
            echo "Failed to connect to MySQL";
        }
        echo $mysqli->host_info ."<br>";*/


        include "search_all_jokes.php";
        include "search_keyword.php";

        //close the connection: we're done here
        $mysqli->close();
        
        ?>
    </body>
</html>