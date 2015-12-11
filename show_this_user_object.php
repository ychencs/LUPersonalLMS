<?php
/* This file displays the metadata and lists the files related to a learning object. */

  require_once('repository_fns.php');
  
  session_start();
  
  $objid=$_GET['objid'];
  
  $object_general=get_obj_general($objid);
  $object_rights=get_obj_rights($objid);
  $object_lifecycle=get_obj_lifecycle($objid);
  $object_tech=get_obj_tech($objid);
  
  $url1="edit_metadata.php?objid=".$objid;
  $url2="add_related_file.php?objid=".$objid;
  $url3="delete_object.php?objid=".$objid;
  
  $result_array=get_multiple_locations($objid);
  
  do_html_header_member();
  do_page_content_show_this_user_object($object_general, $object_rights, $object_lifecycle, $object_tech, $url1, $url2, $url3, $result_array);
  
  do_html_footer();
?>
