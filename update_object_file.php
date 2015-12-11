<?php
/* This file handles the page content of updating a file related to a certain learning object. */

  require_once('repository_fns.php');
  
  session_start();
  
  $location=$_GET['location'];
  
  do_html_header_member();
  do_page_content_update_object_file($location);
  
  do_html_footer();
  
?>
