<?php
/* This file performs the basic search and displays the result. */

require_once('repository_fns.php');
session_start();

$title = $_POST['title'];

$result_array=get_basic_search_result($title);

do_html_header_search();
do_page_content_search_result($result_array);

do_html_footer();

?>
