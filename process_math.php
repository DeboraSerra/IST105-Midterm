<?php

  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operation = $_POST['operation'];

  $command = escapeshellcmd("python3 math_operations.py $num1 $num2 $operation");
  $output = shell_exec($command);
  echo $output;

?>