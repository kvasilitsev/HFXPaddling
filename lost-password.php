<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/lost-pwd.css">  
</head> 
<html>
<body>
  <div>
  <?php include './includes/header.php'; ?>
  </div>
  <div id='logout'>
    <a href="logout.php">Log Out</a>
  </div>
  <div class='form-wrap'>
    <form action="./send-email.php" class="form" method="post">
      <label class="label">Fill the Form to Reset your Password</label>
      <div>
        <div>         
          <input type="text"  id="email" placeholder="Email" name="email" class="password">
        </div>
        <div>
          <button type="submit" class="submit">Reset Password</button> 
        </div>
      </div>     
    </form>   
  </div>
  <div>
    <?php include './includes/footer.php'; ?>
  </div> 
</body>
</html>