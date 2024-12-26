7. Create a function that takes voltage and current and returns the calculated power. 
 <?php
      function powerCalculation($voltage, $current) {
            return $voltage * $current;
      }

      $result = powerCalculation(10, 5);
      echo "The power is:$result";

?>