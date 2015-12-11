<?php
/* This file handles the function of password change. */

require_once('repository_fns.php');
session_start();

$current_user=$_SESSION['valid_user'];

do_html_header_login();

$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$new_password2 = $_POST['new_password2'];

$user_password=get_password($current_user);

if(sha1($old_password) != $user_password) {
echo '<div class="container theme-showcase">';
echo '<div class="page-header">';
echo '<p>Password incorrect. Try again.</p>'; 
echo '</div>';
echo '</div>';
}

else if ($new_password != $new_password2) {
echo '<div class="container theme-showcase">';
echo '<div class="page-header">';
echo '<p>Password not match.</p>'; 
echo '</div>';
echo '</div>';
}

else if ((strlen($new_password) > 16) || (strlen($new_password) < 6)) {
echo '<div class="container theme-showcase">';
echo '<div class="page-header">';
echo '<p>New password must be between 6 and 16 characters. Try again.</p>'; 
echo '</div>';
echo '</div>';
}

else {
  if(change_password($_SESSION['valid_user'], $old_password, $new_password)) {
       echo '<div class="container theme-showcase">';
       echo '<div class="page-header">';
       echo '<p>Password changed.</p>'; 
       echo '</div>';
       echo '</div>';
       
     }
  else 
      {
         echo '<div class="container theme-showcase">';
         echo '<div class="page-header">';
         echo '<p>Password could not be changed.</p>'; 
         echo '</div>';
         echo '</div>';
         
      }
}

do_page_content_member($current_user);

do_html_footer();
?>
