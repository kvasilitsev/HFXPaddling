<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/support.css">  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
  <script src="menu.js"></script> 
</head> 
<html>
<body>
  <div>
  <?php include 'header.php'; ?>
  </div>
  <div id='logout'>
    <?php include 'logout.php'; ?>
  </div>
  <div class='form-wrap'>
    <form action="/options.php" class="form">
      <label class="label"> Welcome to IT suppport system</label>
      <div>
        <div>     
          <select class="title">
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
          <select class="role">
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
</body>
</html>