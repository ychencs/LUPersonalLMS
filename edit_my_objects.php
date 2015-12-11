<?php
/* This file displays all of the learning objects that the logged in user created for him/her to edit. */

  require_once('repository_fns.php');
  
  session_start();
  
  $user=$_SESSION['valid_user'];
  $object_array=get_this_user_objects($user);
  
  do_html_header_member();
  do_page_content_edit_my_objects($object_array);
  
  do_html_footer();
?>
