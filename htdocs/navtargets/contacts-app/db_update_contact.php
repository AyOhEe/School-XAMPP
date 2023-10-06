<html>
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <?php

            function nullIfEmpty($str){
                return $str === "" ? NULL : $str;
            }

            //make sure the pin is valid
            include "check_pin.php";
            $pin_valid = checkPin($_POST["security_code"]);
            if ($pin_valid){

                //connect to the database
                include "db.php";
                
                //get form data
                $contact_id = nullIfEmpty($_POST["contact_id"]);
                $forename = nullIfEmpty($_POST["forename"]);
                $surname = nullIfEmpty($_POST["surname"]);
                $telephone = nullIfEmpty($_POST["telephone"]);
                $mobile = nullIfEmpty($_POST["mobile"]);
                $email = nullIfEmpty($_POST["email"]);
                $address = nullIfEmpty($_POST["address"]);
                $postcode = nullIfEmpty($_POST["postcode"]);
                $department = nullIfEmpty($_POST["department"]);

                $sql = mysqli_prepare($mysqli, "UPDATE contact
                SET Forename = COALESCE(?, Forename),
                    Surname = COALESCE(?, Surname),
                    Telephone_number = COALESCE(?, Telephone_number),
                    Mobile_number = COALESCE(?, Mobile_number),
                    Email = COALESCE(?, Email),
                    Address = COALESCE(?, Address),
                    Postcode = COALESCE(?, Postcode),
                    Department = COALESCE(?, Department)
                WHERE UUID = ?");
                mysqli_stmt_bind_param($sql, "sssssssss", $forename, $surname, $telephone, $mobile, $email, $address, $postcode, $department, $contact_id);
                mysqli_stmt_execute($sql);
                $rows_affected = mysqli_stmt_affected_rows($sql);
                $query_success = $rows_affected != 0;

                //display success/failure
                if($query_success){
                    echo "<h1>Contact Updated</h1>";
                } else{
                    echo "<h1>Contact not found!</h1>";
                }

                //close db connection
                $mysqli->close();

            } else{
                echo "<h1>Invalid PIN!</h1>";
            }
        ?>
        
        <a href="update_contact.php">Update another contact<br></a>
        <a href="index.php">Return to menu</a>
    </body>
</html>