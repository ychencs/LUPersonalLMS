<?php
/* This file handles the feature of content display. */

  require_once('repository_fns.php');
  require 'lib/box-view-api.php';
  require 'lib/box-view-document.php';
  
  session_start();
  $location=$_GET['location'];
  
  do_html_header_view_file_content();
  
  $api_key = 'gux8ggyijyquqnc5d9i32qimie2vo4g8';
  $box = new Box_View_API($api_key);
  
  $doc = new Box_View_Document(array(
  'name' => 'tempfile',
  'file_path' => $location,
  ));

  $box->upload($doc);
  sleep(10);
  
  $box->view($doc);
  $html = '<iframe src="' . $doc->session->url . '"></iframe>';
  echo $html;
  
  
  do_html_footer();
?>
