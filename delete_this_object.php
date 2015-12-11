<?php
/* This file handles the function of learning object deletion. */

  require_once('repository_fns.php');
  session_start();
  
  $objid=$_GET['objid'];
  
  do_html_header_member();
   
  if(delete_object($objid)) {
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      echo '<p>Object was deleted.</p>'; 
      echo '</div>';
      echo '</div>';
    } else {
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      echo '<p>Object could not be deleted.</p>'; 
      echo '</div>';
      echo '</div>';
    } 
     
     
     
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      do_html_url("member.php", "Go back to member page");
      echo '</div>';
      echo '</div>';
     

  
  do_html_footer();
  
?>
