<?php
/* This file handles the page content of password change. */

require_once('repository_fns.php');
session_start();

do_html_header_login();

do_page_content_change_password_form();

do_html_footer();
?>
