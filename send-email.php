<?php
    session_start();

    $_SESSION["userTitle"] = $_POST["userTitle"];
    $_SESSION["userFirstName"] = $_POST["userFirstName"];
    $_SESSION["userLastName"] = $_POST["userLastName"];
    $_SESSION["userRole"] = $_POST["userRole"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["email"] = $_POST["email"];

    $userRole = $_SESSION["userRole"];
    $userFirstName = $_SESSION["userFirstName"];
    $userLastName = $_SESSION["userLastName"];
    $userTitle = $_SESSION["userTitle"];
    $password = $_SESSION["password"]; 
    $email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/send-email.css">  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
  <script src="menu.js"></script> 
</head> 
<html>
<body>  
  <div>
    <?php include 'header.php'; ?>
  </div>
  <div id='logout'>
    <a href="logout.php">Log Out</a>
  </div>
  <div class='email'>    
    <?php if ($userRole) {?>
      <div class='email-message'>
        <p>You created New Account</p>
        <hr>
        <div class='email-data'>
          <p>Title -  
            <?php
              echo $userTitle; 
            ?>
          </p>
          <p>First name -
            <?php
              echo $userFirstName; 
            ?>
          </p>
          <p>Last name -
            <?php
              echo $userLastName; 
            ?>
          </p>
          <p>Role -
            <?php
              echo $userRole; 
            ?>
          </p>
          <p>Password -
            <?php
              echo $password; 
            ?>
          </p>
        </div>                   
      </div>
    <?php } elseif ($email) { ?>
      <div class='email-message'>
        <p>Password reset</p>
        <hr>
        <div class='email-data-pwd'>
          <p>New password has been sent in email   
            <?php
              echo $email; 
            ?>
          </p>          
        </div>                   
      </div>
    <?php } ?>       
  </div>
  <div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
