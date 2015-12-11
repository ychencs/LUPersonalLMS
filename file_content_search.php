<?php
/* This file handles the page content of file content search. */

  require_once('repository_fns.php');
  
  session_start();
  do_html_header_search();
  do_page_content_file_content_search();
  
  do_html_footer();

?>
