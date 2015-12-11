<?php
/* This file handles the function of metadata edit. */

  require_once('repository_fns.php');
  session_start();
  
  do_html_header_login();
  

    $objid=$_POST['objid'];
    $title=$_POST['newtitle'];
    $author=$_POST['newauthor'];
    $discipline=$_POST['newdiscipline'];
    $language=$_POST['newlanguage'];
    $keyword=$_POST['newkeyword'];
    $structure=$_POST['newstructure'];
    $aggrelvl=$_POST['newaggrelvl'];
  
    $interacttype=$_POST['newinteracttype'];
    $resourcetype=$_POST['newresourcetype'];
    $interactlvl=$_POST['newinteractlvl'];
    $enduserrole=$_POST['newenduserrole'];
    $learningtime=$_POST['newlearningtime'];
    
    $cost=$_POST['newcost'];
    $copyright=$_POST['newcopyright'];
    
    $version=$_POST['newversion'];
    $status=$_POST['newstatus'];
  
    if(update_metadata($objid, $title, $author, $discipline, $language, $keyword, $structure, $aggrelvl, $interacttype, $resourcetype, $interactlvl, $enduserrole, $learningtime, $cost, $copyright, $version, $status)) {
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
