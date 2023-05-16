<?php
    function getDBConnection() {
        $dbConnection = getenv('CLEARDB_SILVER_URL');
            
        $cleardb_url = parse_url($dbConnection);
        $cleardb_server = $cleardb_url["host"];
        $cleardb_username = $cleardb_url["user"];
        $cleardb_password = $cleardb_url["pass"];
        $cleardb_db = substr($cleardb_url["path"],1);
        $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);                      
        return $conn;
    }

    function closeDBConnection($conn) {
        $conn->close();
    }
?>