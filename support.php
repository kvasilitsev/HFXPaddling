<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/support.css">  
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
    <form action="./problem.php" class="form" method="post">
      <label class="label"> Welcome to IT suppport system</label>
      <div>
        <div>     
          <select class="title" name='title'>
            <option value='Mr'>Mr</option>
            <option value='Ms'>Ms</option>
            <option value='Mx'>Mx</option>        
          </select>        
          <input type="text"  id="firstName" placeholder="First name" name="firstName" class="firstName">
        </div>   
        <div>         
          <input type="text"  id="lastName" placeholder="Last name" name="lastName" class="lastName">
        </div>
        <div>
          <select class="role" name='role'>
            <option value='admin'>Admin</option>
            <option value='manager'>Manager</option>
            <option value='ceo'>CEO</option>        
          </select>
        </div>
        <div>
          <button type="submit" class="submit">Submit</button> 
        </div>
      </div>     
    </form>   
  </div>
  <div>
    <?php include './includes/footer.php'; ?>
  </div> 
</body>
</html>