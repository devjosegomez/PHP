<?php
    //Example of connection, you should use a complex password and do not upload the connection file to github ;)
    $db_host = "localhost";
    $db_name = "cms";
    $db_user = "cms_www";
    $db_pass = "jose";

    $conn = mysqli_connect ( $db_host, $db_user, $db_pass, $db_name );

    if ( mysqli_connect_error()) {
        echo ( mysqli_connect_error());
        exit;
    }

    echo "Connected successfully";

?>