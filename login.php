<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/login.css">
</head> 
<html>
<body>  
  <div>
    <?php include './includes/header.php'; ?>
  </div>  
  <div class='login-wrap'>
    <div class='login'>
      <p>Please login<p>
      <hr>           
        <form method="post">
          <div class='login-content'>
            <div>              
              <input type="text" id="name" name="name" required minlength="2" placeholder="name" disabled>
            </div> 
            <div>              
              <input type="password" id="pwd" name="pwd" required minlength="6" placeholder="Password" disabled>
            </div>
          </div>
          <div class='login-button'>
            <button name='confirm'>Confirm</button>  
            <button name='back'>Back</button> 
          </div>          
        </form>
        <?php
          if(isset($_POST['confirm'])){
            session_start(); 
            session_destroy();  
            header('Location: ./index.php'); //temp
            exit;
          } elseif(isset($_POST['back'])){
            header('Location: ./index.php');
            exit;
          }
        ?>          
    </div>
  </div>
  <div>
    <?php include './includes/footer.php'; ?>
  </div>
</body>
</html>