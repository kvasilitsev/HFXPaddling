<?php
    session_start();

    $_SESSION["title"] = $_POST["title"];
    $_SESSION["firstName"] = $_POST["firstName"];
    $_SESSION["lastName"] = $_POST["lastName"];
    $_SESSION["role"] = $_POST["role"];

    $role = $_SESSION["role"];    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/problem.css">  
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
  <div class='problem'>    
    <?php if ($role === 'admin') {?>
      <div class='options'>
        <h2>Hello Admin!</h2>
        <hr>
        <h4>Here are your options:</h4>
        <div class='optionsBlock'>          
          <div>
            <a class='option' href='./new-account.php'>Create New Account</a>
          </div>
          <div>
            <a class='option' href='./isnt-working.php'>Computer is not working</a>        
          </div>
        </div>              
      </div>
    <?php } elseif ($role === 'manager') { ?>
      <div class='options'>
        <h2>Hello Manager!</h2>
        <hr> 
        <h4>Here are your options:</h4>
        <div class='optionsBlock'>       
          <div>
            <a class='option' href='./lost-password.php'>Lost Password</a>
          </div>
          <div>
            <a class='option' href='./isnt-working.php'>Computer is not working</a>        
          </div>
        </div>                  
      </div>
      <?php } elseif ($role === 'ceo') { ?>
      <div class='options'>
        <h2>Hello CEO!</h2>
        <hr>
        <h4>Here are your options:</h4>
        <div class='optionsBlock'>        
          <div>
            <a class='option' href='./need-help.php'>Need Help</a>
          </div>
          <div>
            <a class='option' href='./isnt-working.php'>Computer is not working</a>        
          </div>
        </div>                      
      </div>
    <?php } ?>
  </div>
  <div>
    <?php include './includes/footer.php'; ?>
  </div>
</body>
</html>
