<?php
  $file = "Output.txt";
  
  // String of data to be written
  $data = "Test output";

  // Write data to the file
  file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file.");
  echo "Data written to the file successfully.";
?>