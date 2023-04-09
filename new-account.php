<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/new-account.css">  
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
  <div class='form-wrap'>
    <form action="./send-email.php" class="form" method="post">
      <label class="label">Fill the Form to Create New Account</label>
      <div>
        <div>     
          <select class="title" name='userTitle'>
            <option value='Mr'>Mr</option>
            <option value='Ms'>Ms</option>
            <option value='Mx'>Mx</option>        
          </select>        
          <input type="text"  id="userFirstName" placeholder="First name" name="userFirstName" class="firstName">
        </div>   
        <div>         
          <input type="text"  id="userLastName" placeholder="Last name" name="userLastName" class="lastName">
        </div>
        <div>
          <select class="role" name='userRole'>
            <option value='admin'>Admin</option>
            <option value='manager'>Manager</option>
            <option value='ceo'>CEO</option>        
          </select>
        </div>
        <div>         
          <input type="text"  id="password" placeholder="Password" name="password" class="password">
        </div>
        <div>
          <button type="submit" class="submit">Create New Account</button> 
        </div>
      </div>     
    </form>   
  </div>
  <div>
    <?php include 'footer.php'; ?>
  </div> 
</body>
</html>