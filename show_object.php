<?php
/* This page displays the metadata and related files of a learning object. */

  require_once('repository_fns.php');
  
  session_start();
  
  $objid=$_GET['objid'];
  
  $object_general=get_obj_general($objid);
  $object_rights=get_obj_rights($objid);
  $object_lifecycle=get_obj_lifecycle($objid);
  $object_tech=get_obj_tech($objid);
  
  $result_array=get_multiple_locations($objid);
  
  do_html_header_browse();
  
  do_page_content_show_object($object_general, $object_rights, $object_lifecycle, $object_tech, $result_array);
  
  do_html_footer();
?>
