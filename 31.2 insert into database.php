<?php
    // This starts up the connection to the database using another file
    include("31.1 database.php");

    
    $username = "Patrick";
    $password = "rock3";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    // "INSERT INTO TABLENAME (user, password)
    //  VALUES ('BLAH', 'BLAH')";

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";

    try{
        mysqli_query($conn, $sql);
        echo "User is now registered.";
    }
    catch(mysqli_sql_exception){
        echo "Could not register user";
    }
    mysqli_close($conn); 
    // vscode doesn't detect the variable but it is a part of "31.1 database.php" so it is gonna work.
?>