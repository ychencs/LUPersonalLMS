<?php
/* This file handles the content of search page. */

  require_once('repository_fns.php');
  session_start();
  
  do_html_header_search();
  do_page_content_search();
  do_html_footer();
?>
