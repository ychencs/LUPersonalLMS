<?php
/* This file handles the content of add_related_file page. */
  
  require_once('repository_fns.php');
  
  session_start();
  
  $objid=$_GET['objid'];
  
  do_html_header_member();
  do_page_content_add_related_file($objid);
  
  do_html_footer();
  
?>
