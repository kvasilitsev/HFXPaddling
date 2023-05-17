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
<?php 
include('config.php'); 
include('helperFunctions.php');
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
        $conn = getDBConnection();
        $sql = "INSERT INTO adventures (heading, tripDate, duration, summary) VALUES (?, ?, ?, ?)";        
        $stmt= $conn->prepare($sql);        
        $stmt->bind_param("ssss", $heading, $date, $duration, $summary);
        $stmt->execute();
        closeDBConnection($conn);
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