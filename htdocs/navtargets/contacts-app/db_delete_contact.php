<html>
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <?php

            //make sure the pin is valid
            include "check_pin.php";
            $pin_valid = checkPin($_POST["security_code"]);
            if($pin_valid){

                //connect to the database
                include "db.php";
                
                //get form data
                $contact_id = $_POST["contact_id"];

                $sql = mysqli_prepare($mysqli, "DELETE FROM contact WHERE UUID = ?");
                mysqli_stmt_bind_param($sql, "s", $contact_id);
                mysqli_stmt_execute($sql);
                $rows_affected = mysqli_stmt_affected_rows($sql);
                $query_success = $rows_affected != 0;

                //display success/failure
                if($query_success){
                    echo "<h1>Contact Deleted</h1>";
                } else{
                    echo "<h1>Contact not found!</h1>";
                }

                //close db connection
                $mysqli->close();
                
            } else{
                echo "<h1>Invalid PIN!</h1>";
            }

        ?>
        
        <a href="delete_contact.php">Delete another contact<br></a>
        <a href="index.php">Return to menu</a>
    </body>
</html>