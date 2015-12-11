<?php
/* This file retrieves and displays the result of advanced search. */

require_once('repository_fns.php');
session_start();

$title=$_POST['title'];
$author=$_POST['author'];
$discipline=$_POST['discipline'];
$language=$_POST['language'];
$keyword=$_POST['keyword'];
    
$advanced_result_array=get_advanced_search_result($title, $author, $discipline, $language, $keyword);

do_html_header_search();
do_page_content_search_result($advanced_result_array);


do_html_footer();

?>
