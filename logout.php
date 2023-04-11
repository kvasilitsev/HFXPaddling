<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/logout.css">
</head> 
<html>
<body>  
  <div>
    <?php include './includes/header.php'; ?>
  </div>  
  <div class='logout-wrap'>
    <div class='logout'>
      <p>Please confirm logout<p>
      <hr>           
        <form method="post" class='logout-content'>
        <button name='confirm'>Confirm</button>
        <button name='back'>Return to support page</button>
        </form>
        <?php
          if(isset($_POST['confirm'])){
            session_start(); 
            session_destroy();  
            header('Location: ./index.php');
            exit;
          } elseif(isset($_POST['back'])){
            header('Location: ./support.php');
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