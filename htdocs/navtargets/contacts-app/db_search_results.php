<html>
    <head>
        <link rel="stylesheet" href="/bootstrap-3-3-6.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Search results</h1>
        <a href="search_contacts.php">Search again<br></a>
        <a href="index.php">Return to menu</a>

        <h3>Results: </h3>
        <?php

            //connect to the database
            include "db.php";

            //get form data
            $forename = "%".$_POST["forename"]."%";
            $surname = "%".$_POST["surname"]."%";
            $department = "%".$_POST["department"]."%";

            $sql = mysqli_prepare($mysqli, "SELECT UUID, Surname, Forename 
            FROM contact 
            WHERE forename LIKE ? AND surname LIKE ? AND department LIKE ?");
            mysqli_stmt_bind_param($sql, "sss", $forename, $surname, $department);
            mysqli_stmt_execute($sql);

            echo "<ul>";
            $result = mysqli_stmt_get_result($sql);
            while ($row = mysqli_fetch_assoc($result)){
                $href = "db_get_contact.php?uuid=".$row["UUID"];
                echo "<li><a href=".$href.">ID ".$row["UUID"].": ".$row["Surname"].", ".$row["Forename"]."</a></li>";
            }
            echo "</ul>";
            
            //close db connection
            $mysqli->close();

        ?>
    </body>
</html>