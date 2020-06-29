<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <?php
    $file = fopen ("somefile.txt", "r+");
    echo fgets ($file);
    ?>
  
  </body>
</html>

