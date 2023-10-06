<html>
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Create new contact</h1>
        <a href="index.php">Return to menu</a>

        <form action="db_new_contact.php" method="post">
            <legend>Contact details</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="forename">Forename</label>  
                <div class="col-md-5">
                    <input required maxlength="30" id="forename" name="forename" type="text" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the name of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="surname">Surname</label>  
                <div class="col-md-5">
                    <input required maxlength="30" id="surname" name="surname" type="text" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the surname of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="telephone">Telephone number</label>  
                <div class="col-md-5">
                    <input maxlength="15" id="telephone" name="telephone" type="tel" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the telephone number of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="mobile">Mobile phone number</label>  
                <div class="col-md-5">
                    <input maxlength="15" id="mobile" name="mobile" type="tel" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the mobile phone number of the contact here</span>  
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email</label>  
                <div class="col-md-5">
                    <input required maxlength="50" id="email" name="email" type="email" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the email address of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="address">Address</label>  
                <div class="col-md-5">
                    <textarea class="form-control input-md" required maxlength="50" id="address" name="address" type="text" placeholder=""></textarea>
                    <span class="help-block">Enter the postal address of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="postcode">Postcode</label>  
                <div class="col-md-5">
                    <input required maxlength="8" id="postcode" name="postcode" type="text" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the postcode of the contact here</span>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="department">Department name</label>  
                <div class="col-md-5">
                    <input required maxlength="40" id="department" name="department" type="text" placeholder="" class="form-control input-md">
                    <span class="help-block">Enter the department name of the contact here</span>  
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
                    <button id="submit" name="submit" class="btn btn-primary">Create contact</button>
                </div>
            </div>
        </form>
    </body>
</html>