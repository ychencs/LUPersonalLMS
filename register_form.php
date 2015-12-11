<?php
/* This file handles the content of user registeration page. */

  require_once('repository_fns.php');
  do_html_header_login();
  do_page_content_register_form();
  
  do_html_footer();
?>
