<?php
/* This file handles the content of the page each user sees when he/she logs in. */

require_once('repository_fns.php');
session_start();

if (($_POST['username']) && ($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(login($username, $password)) {
  $_SESSION['valid_user'] = $username;
 }
else{
  do_html_header_error_page();
  do_error_message_cannot_login();
  do_html_footer();
  exit;
}
}

$current_user=$_SESSION['valid_user'];

do_html_header_member();
do_page_content_member($current_user);

do_html_footer();

?>
