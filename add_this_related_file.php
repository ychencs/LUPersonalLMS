<?php
  /* This file handles file upload and metadata creation functions of the page add_related_file. */
  
  require_once('repository_fns.php');
  session_start();
  
  $objid=$_GET['objid'];
  
  do_html_header_login();
  
  if ($_FILES['userfile']['error'] > 0)
    {
    echo 'Problem: ';
    switch ($_FILES['userfile']['error'])
    {
      case 1: echo 'File exceeded upload_max_filesize';
                 break;
      case 2: echo 'File exceeded max_file_size';
                 break;
      case 3: echo 'File only partially uploaded';
                 break;
      case 4: echo 'No file uploaded';
                 break;
      case 6: echo 'Cannot upload file: No temp directory specified';
                 break;
      case 7: echo 'Upload failed: Cannot write to disk';
                 break;
     }
     exit;
    }
    
    if (($_FILES['userfile']['type'] != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') && 
        ($_FILES['userfile']['type'] != 'application/vnd.openxmlformats-officedocument.presentationml.presentation') &&
        ($_FILES['userfile']['type'] != 'application/msword') &&
        ($_FILES['userfile']['type'] != 'application/vnd.ms-powerpoint') &&
        ($_FILES['userfile']['type'] != 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') &&
        ($_FILES['userfile']['type'] != 'application/vnd.ms-excel') &&
        ($_FILES['userfile']['type'] != 'application/pdf'))
    {
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      echo '<p>Problem: file has to be an office document or a pdf file.</p>'; 
      echo '</div>';
      echo '</div>';
      
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      do_html_url("member.php", "Go back to member page");
      echo '</div>';
      echo '</div>';
      
      exit;
    }

    $upfile = '/home/ychenlucs15/public_html/uploads/'.$_FILES['userfile']['name'] ;
  
    if (is_uploaded_file($_FILES['userfile']['tmp_name']))
    {
       if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
       {
       echo 'Problem: Could not move file to destination directory';
       exit;
       }
    }
    else
    {
       echo 'Problem: Possible file upload attack. Filename: ';
       echo $_FILES['userfile']['name'];
       exit;
    }
    
    
    $format=$_FILES['userfile']['type'];
    $size=$_FILES['userfile']['size'];
    $location='/home/ychenlucs15/public_html/uploads/'.$_FILES['userfile']['name'];
  
    if(add_related_file($objid, $format, $size, $location)) {
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      echo '<p>Object was updated.</p>'; 
      echo '</div>';
      echo '</div>';
    } else {
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      echo '<p>Object could not be updated.</p>'; 
      echo '</div>';
      echo '</div>';
    } 
     
     
     
      echo '<div class="container theme-showcase">';
      echo '<div class="page-header">';
      do_html_url("member.php", "Go back to member page");
      echo '</div>';
      echo '</div>';
     
     do_html_footer();
     
?>
