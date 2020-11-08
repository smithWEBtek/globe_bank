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
  
  // if ($_GET['name'] == 0 ) {
    // $name = 'Name not specified';
  // } else if (isset($_GET['name'])) {
    // $name = $_GET['name'];
  // }

  // function nameSet(arg) {
    // $name = isset($_GET[arg]) ? $_GET[arg] : 'Not specfied';
  // }

  // $name = ( (null != $_GET['name']) && ($_GET['name'] != '0') ) ? $_GET['name'] : 'Name not specified')


  // $name = $_GET['name'] == '0' ? 'Name not specified' 
  // $name = isset($_GET['name']) ? $_GET['name'] : 'Name not specified';


  $name = $_GET['name']; 


  
  ?>
<h1>Subject: Show page for ID: <?php echo $id ?></h1>
<p>Name variable from URL:
<h3><?php echo $name ?></h3>