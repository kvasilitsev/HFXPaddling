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
      <h1>Come Expirence <br> Canada</h1>
    </div>
  <!-- Main section/Content -->
    <div class="content">
      <h1>Upcoming Adventures</h1>
      <hr>
      <div>
      <?php
        try {
            error_log("Connecting to DB\n", 0);
            $dbhost = 'mysql://bb07a50c655cc3:3d25cdda@us-cdbr-east-06.cleardb.net/heroku_6cc85c199472e78?reconnect=true';
            $dbname = 'CLEARDB_SILVER_URL';
            $dbuser = 'bb07a50c655cc3';
            $dbpass = '3d25cdda';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);                       

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