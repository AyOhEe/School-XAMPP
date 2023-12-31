<html>
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>

    <body>
        <?php

            //connect to the database
            include "db.php";

            //get form data
            $uuid = $_GET["uuid"];

            //run the query to find the contact with the given UUID
            //using prepared queries prevents SQL injection attacks
            $sql = mysqli_prepare($mysqli, "SELECT * FROM contact WHERE UUID = ?");
            mysqli_stmt_bind_param($sql, "s", $uuid);
            mysqli_stmt_execute($sql);
            $result = mysqli_stmt_get_result($sql);
            $row = mysqli_fetch_assoc($result);

            //display the contact's UUID, surname and forename as the page header
            echo "<h1> ID ".$row["UUID"].": ".$row["Surname"].", ".$row["Forename"]."</h1>";
        ?>

        <p>
            <a href="search_contacts.php">Search again<br></a>
            <a href="index.php">Return to menu<br></a>
        </p>

        <p>
            <?php

                //display the rest of the contact details
                echo "Telephone number: ".$row["Telephone_number"]."<br>";
                echo "Mobile number: ".$row["Mobile_number"]."<br>";
                echo "Email: ".$row["Email"]."<br>";
                echo "Address: ".$row["Address"]."<br>";
                echo "Postcode: ".$row["Postcode"]."<br>";
                echo "Department: ".$row["Department"]."<br>";

                //close db connection
                $mysqli->close();

            ?>
        </p>
    </body>
</html>