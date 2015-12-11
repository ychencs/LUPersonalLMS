<?php
/* This file handles the content of user login page. */

  require_once('repository_fns.php');
  session_start();
  
  do_html_header_login();
  
  if(check_logged_in()){
  $current_user=$_SESSION['valid_user'];
  do_page_content_member($current_user);
  }

  else{
  do_page_content_login();
  }
  
  do_html_footer();
?>
