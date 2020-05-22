<?php
     $timediff = '00:00:05';

       

      $pieces = explode(":", $timediff);
      $min = $pieces[0]*60 + $pieces[1];
      
      echo $min
?>