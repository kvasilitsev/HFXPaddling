<?php
/** 
 *  This file will only successfully get included on localhost because in GitHub it is set to 
 */

    // This approach is used to allow running the application on localhost and Heroku.
    // Heroku uses environment variables and expects the code to fetch them via getenv().
    // Put config variables here, such as DB connections and API endpoint connections
    // Usernames and passwords.
    putenv("CLEARDB_SILVER_URL=INSERT_MY_DB_CONNECTION_STRING");
?>
