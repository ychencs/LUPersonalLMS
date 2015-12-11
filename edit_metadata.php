<?php
/* This file handles the page content of metadata edit. */

  require_once('repository_fns.php');
  
  session_start();
  
  $objid=$_GET['objid'];
  
  $object_general=get_obj_general($objid);
  $object_rights=get_obj_rights($objid);
  $object_lifecycle=get_obj_lifecycle($objid);
  $object_tech=get_obj_tech($objid);
  
  do_html_header_member();
  do_page_content_edit_metadata($objid, $object_general, $object_rights, $object_lifecycle, $object_tech);
  
  do_html_footer();
  
?>
