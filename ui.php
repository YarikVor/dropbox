<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <?php
    $file = fopen ("somefile.txt", "r+");
    fwrite ($file, "pig" . "\n");
    echo fgets ($file);
    ?>
  
  </body>
</html>

