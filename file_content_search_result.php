<?php
/* This file handles the function of file content search. It utilises Gourav Mehta's library 'doc2txt' 
that converts a doc/docx file to plain text and performed the search on the text converted. */
  
  require_once('repository_fns.php');
  require 'lib/doc2txt.class.php';
 
  session_start();
  
  $string=$_POST['content'];
  
  do_html_header_search();
  
  $dir='/home/ychenlucs15/public_html/uploads';
  $count=0;
  $file_content_search_result_array=array();
  foreach (glob("$dir/*") as $file) {
    $docObj=new Doc2Txt($file);
    $content=$docObj->convertToText();
    
       if (strpos($content, $string) !== false) {
        $count=$count+1;
        $filename="$file";
        $array2=get_file_content_search_result($filename);
        $file_content_search_result_array=array_merge($file_content_search_result_array, $array2);;
    }
    
    }
    
    do_page_content_search_result($file_content_search_result_array);
    
    
    if ($count==0)
    {
    echo 'File not found';
    }
    
    
  
   do_html_footer();
 
?>
