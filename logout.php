<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/logout.css">  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
  <script src="./js/menu.js"></script> 
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
        <button name='confirm' onclick="redirectMain()">Confirm</button>
        <button name='back' onclick="redirectSupport()">Return to support page</button>
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