<?php
  // echo phpinfo();
  
  // echo 'example of super global variable, page attribute as string'
  // $page = $_GET['page'];
  // echo gettype($page);
  // echo $_GET['page'];
  // echo $_GET;
  
  // echo 'example of super global variable, page attribute cast as integer'
  // $page_as_int = (int) $_GET['page'];
  // echo gettype($page_as_int);
  $id = $_GET['id'];
  $name = $_GET['name'];
?>
<h1>Subject: Show page for ID: <?php echo $id ?></h1>
<p>Name variable from URL:
<h3><?php echo $name ?></h3>