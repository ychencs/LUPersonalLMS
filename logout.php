<?php
/* This file handles the logout process. */

require_once('repository_fns.php');
session_start();
$old_user = $_SESSION['valid_user'];

unset($_SESSION['valid_user']);
$result_dest = session_destroy();

do_html_header_login();

if (!empty($old_user)) {
if ($result_dest) {

echo '<div class="container theme-showcase">';
echo '<div class="page-header">';
echo '<p>Logged out.</p>'; 
echo '</div>';
echo '</div>';


} else {

echo '<div class="container theme-showcase">';
echo '<div class="page-header">';
echo '<p>Could not log you out.</p>'; 
echo '</div>';
echo '</div>';
}
} else {
echo '<div class="container theme-showcase">';
echo '<div class="page-header">';
echo '<p>You were not logged in, and so have not been logged out.</p>'; 
echo '</div>';
echo '</div>';
}

do_html_footer();

?>
