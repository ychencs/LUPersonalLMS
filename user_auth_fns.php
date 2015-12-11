<?php
/* This file contains the functions related to user authentication. */

require_once('db_fns.php');

function register($username, $firstname, $lastname, $password, $email, $institute) {

$conn = db_connect();


$result = $conn->query("select * from user where username='".$username."'");
if (!$result) {
return false;
}

if ($result->num_rows>0) {
  echo '<div class="container theme-showcase">';
  echo '<div class="page-header">';
  echo '<p>This username is already taken.</p>'; 
  echo '</div>';
  echo '</div>';
  exit;
}


$result = $conn->query("insert into user values
(null, '".$username."', '".$firstname."', '".$lastname."', sha1('".$password."'), '".$email."','".$institute."')");
if (!$result) {
  echo '<div class="container theme-showcase">';
  echo '<div class="page-header">';
  echo '<p>Could not register you in database - please try again
later.</p>'; 
  echo '</div>';
  echo '</div>';
}
return true;
}

function login($username, $password) {
 $conn = db_connect();
 $result = $conn->query("select * from user
 where username='".$username."'
 and password = sha1('".$password."')");
 if (!$result) {
 return false;
 }

if ($result->num_rows>0) {
return true;
} else {
return false;
}
}

function check_logged_in() {
if (isset($_SESSION['valid_user'])) {
return true;
} 
else {
return false;
}
}

function check_valid_user() {
if (isset($_SESSION['valid_user'])) {
echo "Logged in as ".$_SESSION['valid_user'].".<br />";
} else {

do_html_heading('Problem:');
echo 'You are not logged in.<br />';
do_html_url('login.php', 'Login');
do_html_footer();
exit;
}
}

function get_password($current_user){

$conn = db_connect();

$result = $conn->query("select password from user where username = '".$current_user."'");

if(!$result) {
  return false;
}

$row=$result->fetch_object();

$password=$row->password;

return $password;

}

function change_password($username, $old_password, $new_password) {

login($username, $old_password);
$conn = db_connect();
$result = $conn->query("update user
set password = sha1('".$new_password."')
where username = '".$username."'");
if (!$result) {
return false;
} else {
return true; 
}
}

function reset_password($username) {

$new_password = get_random_word(6, 13);
if($new_password == false) {
throw new Exception('Could not generate new password.');
}

$rand_number = rand(0, 999);
$new_password .= $rand_number;

$conn = db_connect();
$result = $conn->query("update user
set passwd = sha1('".$new_password."')
where username = '".$username."'");
if (!$result) {
throw new Exception('Could not change password.'); 
} else {
return $new_password; 
}
}

?>
