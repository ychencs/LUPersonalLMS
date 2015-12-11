<?php
/* This file handles the content of the browse page. */

  require_once('repository_fns.php');
  session_start();
  
  $disc_array=get_discipline();
  
  do_html_header_browse();
  
  do_page_content_browse($disc_array);
  
  do_html_footer();
?>
