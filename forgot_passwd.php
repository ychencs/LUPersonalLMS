<?php
/* This file handles the function of reset password. */

require_once("repository_fns.php");
do_html_header("Resetting password");

$username = $_POST['username'];

try {
$password = reset_password($username);
notify_password($username, $password);
echo 'Your new password has been emailed to you.<br />';
}
catch (Exception $e) {
echo 'Your password could not be reset - please try again later.';
}
do_html_url('login.php', 'Login');
do_html_footer();
?>
