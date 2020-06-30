<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <?php
    $file = fopen ("somefile.txt", "w+");
    fwrite ($file, "pig".fgets($file));
    
    echo fgets ($file);
    fclose ($file);
    ?>
  
  </body>
</html>

