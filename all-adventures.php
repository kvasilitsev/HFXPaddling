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
</head>
<body>
  <!--- Header --->
  <div>
    <?php include './includes/header.php'; ?>
  </div>  
  <!-- Main section -->
  <main>
    <div class="motto">
      <img src="./images/canoe.jpg"/>
      <h1>Come Experience <br> Canada</h1>
    </div>
  <!-- Main section/Content -->
    <div class="content">
      <h1>Upcoming Adventures</h1>
      <hr>
      <div>  
      <?php
        try {
            error_log("Connecting to DB\n", 0); 
            $dbConnection = getenv('CLEARDB_SILVER_URL');
            
            $cleardb_url = parse_url($dbConnection);
            $cleardb_server = $cleardb_url["host"];
            $cleardb_username = $cleardb_url["user"];
            $cleardb_password = $cleardb_url["pass"];
            $cleardb_db = substr($cleardb_url["path"],1);
            $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);                      

            $sql = "SELECT heading, tripDate, duration, summary FROM adventures";
            $result = $conn->query($sql);           
            $row = $result -> fetch_assoc();
            foreach($result as $row) {
              ?>
              <div>
                <h3><u><?php echo $row["heading"]?></u></h3>
                <p>Date: <strong><?php echo $row["tripDate"]?></strong></p>
                <p>Duration: <strong><?php echo $row["duration"]?> day</strong></p>
                <br>
                <h4>Summary</h4>        
                <p><?php echo $row["summary"]?></p>        
              </div>
              <?php              
            }            
            ?>                                  
            <?php
          } catch (Exception $e) {
              echo "Error : " . $e->getMessage() . "<br/>";
              error_log("Cannot connect to DB\n", 0);
            ?>
              <div>
                             
              </div>          
              <?php
          }
      ?>      
    </div>
  </main>
  <!-- Footer -->  
  <div>
    <?php include './includes/footer.php'; ?>
  </div> 
</body>
</html>