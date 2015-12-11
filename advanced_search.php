<?php
/* This file handles the content of advanced search page. */

  require_once('repository_fns.php');
  session_start();
  do_html_header_search();
  do_page_content_advanced_search();
  
  do_html_footer();
?>
