<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/add-adventure.css">
</head> 
<html>
<body>  
  <div>
    <?php include './includes/header.php'; ?>
  </div>  
  <div class='add-wrap'>
    <div class='adventure'>
      <p>Admin - Add Adventure<p>
      <hr>           
        <form method="post">
          <label>Input details about the trip</label>
          <div class='adventure-content'>
            <div>
              <label>Heading</label>             
              <input type="text" id="heading" name="heading" required minlength="2" placeholder="Heading">
            </div> 
            <div>
              <label>Trip Date</label>             
              <input type="date" id="date" name="date"
                value=""
              >
            </div>
            <div>
              <label>Duration</label>             
              <input type="number" min=0 max=365 id="duration" name="duration" placeholder="Days">
            </div>
            <div>
              <label>Summary</label>             
              <textarea type="text" id="summary" name="summary" placeholder="Write summary here"  rows="5" cols="16"></textarea>
            </div> 
          </div>
          <div class='add-button'>
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