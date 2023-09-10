<html style="margin-left: 20px; margin-right: 20px">
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
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

        <form class="form-horizontal" action="add_joke.php">
            <fieldset>

                <!-- Form Name -->
                <legend>Form Name</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="joke_question">Joke</label>  
                    <div class="col-md-6">
                        <input id="joke_question" name="joke_question" type="text" placeholder="" class="form-control input-md">
                        <span class="help-block">Enter the first half of your joke here</span>  
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="joke_answer">Answer</label>  
                    <div class="col-md-5">
                        <input id="joke_answer" name="joke_answer" type="text" placeholder="" class="form-control input-md">
                        <span class="help-block">Enter the answer or punchline to your joke here</span>  
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-primary">Add a new joke</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </body>
</html>