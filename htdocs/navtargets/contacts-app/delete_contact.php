<html>
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>

    <body>
        <h1>Remove contact</h1>
        <a href="index.php">Return to menu</a>
        
        <form action="db_delete_contact.php" method="post">
            <legend>Contact details</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="contact_id">Contact ID</label>  
                <div class="col-md-5">
                    <input required id="contact_id" name="contact_id" type="number" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the ID of the contact here</span>  
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="security_code">Security Code</label>  
                <div class="col-md-5">
                    <input required id="security_code" name="security_code" type="password" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the 6-Digit security code here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-danger">Delete contact</button>
                </div>
            </div>
        </form>
    </body>
</html>