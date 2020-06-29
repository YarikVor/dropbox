<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <?php
    $file = fopen ("somefile.txt", "w+");
    fwrite ($file, "pig");
    
    echo fgets ($file);
    fclose ($file);
    ?>
  
  </body>
</html>

