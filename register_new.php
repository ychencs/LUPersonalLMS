<?php
/* This file handles the function of user registration. */

  require_once('repository_fns.php');
  
  $username=$_POST['username'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $password=$_POST['password'];
  $password2=$_POST['password2'];
  $email=$_POST['email'];
  $institute=$_POST['institute'];
  
  session_start();

  if ($password != $password2) {
  echo '<div class="container theme-showcase">';
  echo '<div class="page-header">';
  echo '<p>Password not match.</p>'; 
  echo '</div>';
  echo '</div>';
  }

  else if ((strlen($password) < 6) || (strlen($password) > 16)) {
  echo '<div class="container theme-showcase">';
  echo '<div class="page-header">';
  echo '<p>New password must be between 6 and 16 characters. Try again.</p>'; 
  echo '</div>';
  echo '</div>';
  }

  register($username, $firstname, $lastname, $password, $email, $institute);
  
  $_SESSION['valid_user'] = $username;
  
  do_html_header_login();
  echo '<div class="container theme-showcase">';
  echo '<div class="page-header">';
  echo '<p>Your registration was successful. Go to the members page.</p>'; 
  echo '</div>';
  echo '</div>';
  
  echo '<div class="container theme-showcase">';
  echo '<div class="page-header">';
  do_html_url('member.php', 'Go to members page');
  echo '</div>';
  echo '</div>';
  
  do_html_footer();


?>
