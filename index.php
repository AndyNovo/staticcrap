<?php
  $file = $_GET['file'];
  include($file);
  print_r("<h1>Usage: staticcrap/?file=yourfile.txt</h1>");
?>
