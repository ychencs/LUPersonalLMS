<?php
/* This file handles the function of deleting one of the files that are related to a certain learning object. */

  require_once('repository_fns.php');
  session_start();
  
  $location=$_GET['location'];
  
  do_html_header_member();
   
  if(delete_object_file($location)) {
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      echo '<p>File was deleted.</p>'; 
      echo '</div>';
      echo '</div>';
    } else {
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      echo '<p>File could not be deleted.</p>'; 
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
