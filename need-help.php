<?php
    session_start();

    $lastName = $_SESSION["lastName"];
    $title = $_SESSION["title"];    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/need-help.css">  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
  <script src="./js/menu.js"></script> 
</head> 
<html>
<body>  
  <div>
    <?php include './includes/header.php'; ?>
  </div>
  <div id='logout'>
    <a href="logout.php">Log Out</a>
  </div>
  <div class='solution-wrap'>
    <div class='solution'>
      <p>
        <strong><?php echo "{$title} {$lastName},"; ?></strong>
        please call on the phone number below
      </p>
      <hr>
        <p><strong>+1 902 555 55 55</strong></p>
    </div>
  </div>
  <div>
    <?php include './includes/footer.php'; ?>
  </div>
</body>
</html>