<?php
    session_start();

    $_SESSION["heading"] = $_POST["heading"];
    $_SESSION["date"] = $_POST["date"];
    $_SESSION["duration"] = $_POST["duration"];
    $_SESSION["summary"] = $_POST["summary"];    

    $heading = $_SESSION["heading"];
    $date = $_SESSION["date"];
    $duration = $_SESSION["duration"];
    $summary = $_SESSION["summary"];     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/confirm.css">
</head> 
<html>
<body>   
  <div>
    <?php include './includes/header.php'; ?>
  </div>
  <?php
    try {
        error_log("Connecting to DB\n", 0);
        $cleardb_url = parse_url('mysql://bb07a50c655cc3:3d25cdda@us-cdbr-east-06.cleardb.net/heroku_6cc85c199472e78?reconnect=true');
        $cleardb_server = $cleardb_url["host"];
        $cleardb_username = $cleardb_url["user"];
        $cleardb_password = $cleardb_url["pass"];
        $cleardb_db = substr($cleardb_url["path"],1);
        $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);                      


        $sql = "INSERT INTO adventures (heading, tripDate, duration, summary) VALUES (?, ?, ?, ?)";        
        $stmt= $conn->prepare($sql);        
        $stmt->bind_param("ssss", $heading, $date, $duration, $summary);
        $stmt->execute();
        ?>
        <div>
          <div class='confirm-wrap'>
            <div class='confirm'>
              <h1>Admin - Confirm<h1>
              <hr>           
              <p>Data has been added successfully</p>                
            </div>
          </div>
          <div class='all'>
            <a href='all-adventures.php'>View all adventures</a>
          </div>          
        </div>                        
        <?php
      } catch (Exception $e) {
          echo "Error : " . $e->getMessage() . "<br/>";
          error_log("Cannot connect to DB\n", 0);
        ?>
          <div>
          <div class='confirm-wrap'>
            <div class='confirm'>
              <h1>Admin - Confirm<h1>
              <hr>           
              <p>Data Submission - Failed</p> 
              <br>
              <p>Encountered technical errors. Please contact system administrator.</p>               
            </div>
          </div>                   
        </div>          
          <?php
      }
  ?>   
  <div>
    <?php include './includes/footer.php'; ?>
  </div>
</body>
</html>