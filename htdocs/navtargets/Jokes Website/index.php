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

        <form class="form-horizontal" action="search_keyword.php">
            <fieldset>

                <!-- Form Name -->
                <legend>Search for a joke</legend>

                <!-- Search input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="keyword">Search Input</label>
                    <div class="col-md-5">
                        <input id="keyword" name="keyword" type="search" placeholder="e.g. Chicken" class="form-control input-md" required="">
                        <p class="help-block">Enter a word to search for in the Jokes table</p>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>

            </fieldset>
        </form>

        <hr>

        <form action="add_joke.php">
            Please enter a new joke here:<br>
            <input type="text" name="joke_question" value=""><br>

            Please enter the answer to the new joke here:<br>
            <input type="text" name="joke_answer" value=""><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>