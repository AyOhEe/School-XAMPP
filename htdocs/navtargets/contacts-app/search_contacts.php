<html>
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Search for contacts</h1>
        <a href="index.php">Return to menu</a>

        <form action="db_search_results.php" method="post">
            <legend>Contact details</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="forename">Forename</label>  
                <div class="col-md-5">
                    <input id="forename" name="forename" type="text" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the name of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="surname">Surname</label>  
                <div class="col-md-5">
                    <input id="surname" name="surname" type="text" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the surname of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="department">Department name</label>  
                <div class="col-md-5">
                    <input id="department" name="department" type="text" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the department name of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </body>
</html>