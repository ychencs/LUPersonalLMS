<?php
/* This file displays the disciplines of the learning objects. */

  require_once('repository_fns.php');
  session_start();
  
  $discname=$_GET['discname'];
  
  $object_array=get_objects($discname);
  
  do_html_header_browse();
  
  do_page_content_show_disc($object_array);
  
  do_html_footer();
?>
