<?php
/* This file handles the page content of learning object deletion. */

  require_once('repository_fns.php');
  session_start();
  
  do_html_header_member();
  
  $objid=$_GET['objid'];
    
  do_page_content_delete_object($objid);
  
  do_html_footer();
  
?>
