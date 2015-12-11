<?php
/* This file handles the content of the main page. */

require_once('repository_fns.php');

$first_id=get_first_id();
$first_title=get_this_title($first_id);
$first_discipline=get_this_discipline($first_id);
$first_language=get_this_language($first_id);

$second_id=get_second_id();
$second_title=get_this_title($second_id);
$second_discipline=get_this_discipline($second_id);
$second_language=get_this_language($second_id);

$third_id=get_third_id();
$third_title=get_this_title($third_id);
$third_discipline=get_this_discipline($third_id);
$third_language=get_this_language($third_id);

do_html_header_index();
  
do_page_content_index($first_id, $first_title, $first_discipline, $first_language, $second_id, 
$second_title, $second_discipline, $second_language, $third_id, $third_title, $third_discipline, $third_language);

do_html_footer();

?>
