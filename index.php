<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
</head>
<body>
  <?php
  echo '<h2>This is a test from Vorealis </h2>'.'</br>';
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>
  <form method="POST" action="phpQS.php" enctype="multipart/form-data">
    <div>
      <span>Upload a File:</span>
      <input type="file" name="uploadedFile" />
    </div>
 
    <input type="submit" name="uploadBtn" value="Upload" />
  </form>
</body>
</html>