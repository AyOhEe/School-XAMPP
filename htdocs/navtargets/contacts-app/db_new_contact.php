<html>
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>

    <body>
        <?php
            
            //make sure the pin is valid
            include "check_pin.php";
            $pin_valid = checkPin($_POST["security_code"]);
            if (!$pin_valid){
                echo "<h1>Invalid PIN!</h1>";
            }
            else{
                echo "<h1>Contact Added</h1>";
            }
        ?>

        <a href="new_contact.php">Add another contact<br></a>
        <a href="index.php">Return to menu</a>

        <?php

            if(!$pin_valid){
                exit();
            }

        
            //connect to the database
            include "db.php";

            //get form data
            $forename = $_POST["forename"];
            $surname = $_POST["surname"];
            $telephone = $_POST["telephone"];
            $mobile = $_POST["mobile"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $postcode = $_POST["postcode"];
            $department = $_POST["department"];

            //run the query to create the new contact
            //using prepared queries prevents SQL injection attacks
            $sql = mysqli_prepare($mysqli, "INSERT INTO contact
            (Forename, Surname, Telephone_number, Mobile_number, Email, Address, Postcode, Department)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            mysqli_stmt_bind_param($sql, "ssssssss", $forename, $surname, $telephone, $mobile, $email, $address, $postcode, $department);
            mysqli_stmt_execute($sql);
            
            //close db connection
            $mysqli->close();

        ?>
    </body>
</html>