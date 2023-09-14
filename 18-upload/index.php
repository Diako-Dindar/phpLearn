<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload File</title>
    <link rel="stylesheet" href="asset/style.css" />
  </head>
  <body>
    <div class="container">
      <?php
      if(isset($_SESSION['msg']) && $_SESSION['msg']) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
      }
?>
      <form method="POST" action="upload.php" enctype="multipart/form-data">
        <div class="upload-wrapper">
          <span class="file-name">Choose a file...</span>
          <label for="file-upload"
            >Browse
            <input type="file" id="file-upload" name="uplodedFile" />
          </label>
        </div>
        <input type="submit" name="uploadBtn" value="Upload" />
      </form>
    </div>
  </body>
</html>
