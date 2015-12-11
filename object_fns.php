<?php
/* This file contains all the functions related to learning objects operation. */

require_once('db_fns.php');

function add_object($title, $author, $discipline, $language, $keyword, $structure, $aggrelvl, $interacttype, $resourcetype, $interactlvl, $enduserrole, $learningtime, $cost, $copyright, $format, $size, $location, $version, $status) {

$conn=db_connect();

$query_obj="insert into object values
  (NULL, '".$title."', '".$author."', '".$discipline."', '".$language."', '".$keyword."', '".$structure."', '".$aggrelvl."', '".$interacttype."', '".$resourcetype."', '".$interactlvl."', '".$enduserrole."', '".$learningtime."')";

$result_obj=$conn->query($query_obj);

$query_objid="SELECT objid FROM object ORDER BY objid DESC LIMIT 0,1";

$result_objid=$conn->query($query_objid);

if(!$result_objid) {
  return false;
}

$row=$result_objid->fetch_object();

$obj_id=$row->objid;

$query_rights="insert into obj_rights values
  (NULL, '".$obj_id."', '".$cost."', '".$copyright."')";
  
$result_rights=$conn->query($query_rights);

$query_tech="insert into obj_tech values
  (NULL, '".$obj_id."', '".$format."', '".$size."', '".$location."')";
  
$result_tech=$conn->query($query_tech);

$query_lc="insert into obj_lifecycle values
  (NULL, '".$obj_id."', '".$version."', '".$status."')";
  
$result_lc=$conn->query($query_lc);

if((!$result_obj)||(!$result_rights)||(!$result_tech)||(!$result_lc)){
  return false;
} else {
  return true;
}
}

function update_metadata($objid, $title, $author, $discipline, $language, $keyword, $structure, $aggrelvl, $interacttype, $resourcetype, $interactlvl, $enduserrole, $learningtime, $cost, $copyright, $version, $status) {

$conn=db_connect();

$query_obj="update object
            set title='".$title."',
            author='".$author."',
            discipline='".$discipline."',
            language='".$language."',
            keyword='".$keyword."',
            structure='".$structure."',
            aggregation_level='".$aggrelvl."',
            interactivity_type='".$interacttype."',
            learning_res_type='".$resourcetype."',
            interactivity_level='".$interactlvl."',
            intended_end_user_role='".$enduserrole."',
            typical_learning_time='".$learningtime."'
            where objid='".$objid."'";

$result_obj=$conn->query($query_obj);

$query_rights="update obj_rights
               set cost='".$cost."',
               copyrights_and_other_res='".$copyright."'
               where objid='".$objid."'";

$result_rights=$conn->query($query_rights);

$query_lc="update obj_lifecycle
           set version='".$version."',
           status='".$status."'
           where objid='".$objid."'";

$result_lc=$conn->query($query_lc);

if((!$result_obj)||(!$result_rights)||(!$result_lc)){
  return false;
} else {
  return true;
}
}

function update_object_file($objid, $format, $size, $old_location, $new_location){

$conn=db_connect();

$query_deltech="delete from obj_tech
               where location='".$old_location."'";
               
$result_deltech=$conn->query($query_deltech); 

$query_tech="insert into obj_tech values
  (NULL, '".$objid."', '".$format."', '".$size."', '".$new_location."')";
  
$result_tech=$conn->query($query_tech);         
             
if((!$result_deltech)||(!$result_tech)){
  return false;
} else {
  return true;
}

}

function add_related_file($objid, $format, $size, $location){

$conn=db_connect();

$query_tech="insert into obj_tech values
  (NULL, '".$objid."', '".$format."', '".$size."', '".$location."')";
  
$result_tech=$conn->query($query_tech);

if(!$result_tech){
  return false;
} else {
  return true;
}
}

function delete_object_file($location){

$conn=db_connect();

unlink($location);

$query_deltech="delete from obj_tech
               where location='".$location."'";
$result_deltech=$conn->query($query_deltech); 

if(!$result_deltech){
  return false;
} else {
  return true;
}
}

function delete_object($objid){

$conn=db_connect();

$result_array=get_multiple_locations($objid);

foreach($result_array as $row) {
  unlink($row['location']);
}
  
$query_delobj="delete from object
               where objid='".$objid."'";
$result_obj=$conn->query($query_delobj);
      
$query_delrights="delete from obj_rights
               where objid='".$objid."'";
$result_rights=$conn->query($query_delrights);    

$query_dellc="delete from obj_lifecycle
              where objid='".$objid."'";
              
$result_lc=$conn->query($query_dellc); 

$query_deltech="delete from obj_tech
               where objid='".$objid."'";
$result_tech=$conn->query($query_deltech);   

if((!$result_obj)||(!$result_rights)||(!$result_lc)||(!$result_tech)){
  return false;
} else {
  return true;
}
}

function get_obj_general($objid) {

if((!$objid)||($objid=='')) {
  return false;
}

$conn=db_connect();

$query="select * from object where objid='".$objid."'";

$result=@$conn->query($query);

if(!$result) {
  return false;
}

$result=@$result->fetch_assoc();
return $result;

}

function get_obj_rights($objid) {

if((!$objid)||($objid=='')) {
  return false;
}

$conn=db_connect();

$query="select * from obj_rights where objid='".$objid."'";

$result=@$conn->query($query);

if(!$result) {
  return false;
}

$result=@$result->fetch_assoc();
return $result;
}

function get_obj_lifecycle($objid) {

if((!$objid)||($objid=='')) {
  return false;
}

$conn=db_connect();

$query="select * from obj_lifecycle where objid='".$objid."'";

$result=@$conn->query($query);

if(!$result) {
  return false;
}

$result=@$result->fetch_assoc();
return $result;
}

function get_obj_tech($objid) {

if((!$objid)||($objid=='')) {
  return false;
}

$conn=db_connect();

$query="select * from obj_tech where objid='".$objid."'";

$result=@$conn->query($query);

if(!$result) {
  return false;
}

$result=@$result->fetch_assoc();
return $result;
}

function get_multiple_locations($objid){
if((!$objid)||($objid=='')) {
  return false;
}
$conn=db_connect();
$query="select * from obj_tech where objid = '".$objid."'";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_objects=@$result->num_rows;
if($num_objects==0){
return false;
}

$result=db_result_to_array($result);
return $result;
}

function get_discipline(){
$conn=db_connect();
$query="select discid, discname from discipline";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_disc=@$result->num_rows;
if($num_disc==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_language(){
$conn=db_connect();
$query="select langid, langname from language";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_lang=@$result->num_rows;
if($num_lang==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_structure(){
$conn=db_connect();
$query="select structid, structname from structure";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_struct=@$result->num_rows;
if($num_struct==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_aggrelvl(){
$conn=db_connect();
$query="select aggrelvlid, aggrelvlname from aggrelvl";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_aggrelvl=@$result->num_rows;
if($num_aggrelvl==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_status(){
$conn=db_connect();
$query="select statusid, statusname from status";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_status=@$result->num_rows;
if($num_status==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_intertype(){
$conn=db_connect();
$query="select intertypeid, intertypename from intertype";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_intertype=@$result->num_rows;
if($num_intertype==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_resourcetype(){
$conn=db_connect();
$query="select resourcetypeid, resourcetypename from resourcetype";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_resourcetype=@$result->num_rows;
if($num_resourcetype==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_interactlvl(){
$conn=db_connect();
$query="select interactlvlid, interactlvlname from interactlvl";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_interactlvl=@$result->num_rows;
if($num_interactlvl==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_enduserrole(){
$conn=db_connect();
$query="select enduserroleid, enduserrolename from enduserrole";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_enduserrole=@$result->num_rows;
if($num_enduserrole==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_cost(){
$conn=db_connect();
$query="select costid, costname from cost";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_cost=@$result->num_rows;
if($num_cost==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}

function get_copyright(){
$conn=db_connect();
$query="select copyrightid, copyrightname from copyright";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_copyright=@$result->num_rows;
if($num_copyright==0){
return false;
}
$result=db_result_to_array($result);
return $result;
}


function get_objects($discname){

if((!$discname)||($discname=='')){
return false;
}

$conn=db_connect();
$query="select * from object where discipline='".$discname."'";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_objects=@$result->num_rows;
if($num_objects==0){
return false;
}

$result=db_result_to_array($result);
return $result;

}

function get_this_user_objects($user){

if((!$user)||($user=='')){
return false;
}

$conn=db_connect();
$query="select * from object where author='".$user."'";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_objects=@$result->num_rows;
if($num_objects==0){
return false;
}

$result=db_result_to_array($result);
return $result;

}

function getlocation($objid){
$conn=db_connect();
$query="select location from obj_tech where objid='".$objid."'";
$result=@$conn->query($query);
if(!$result) {
return false;
}
$num_result=@$result->num_rows;
if($num_result==0) {
return false;
}
$row=$result->fetch_object();
return $row->location;

}

function get_basic_search_result($title){
if((!$title)||($title=='')) {
  return false;
}
$conn=db_connect();
$query="select * from object where title like '%".$title."%'";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_objects=@$result->num_rows;
if($num_objects==0){
return false;
}

$result=db_result_to_array($result);
return $result;
}

function get_advanced_search_result($title, $author, $discipline, $language, $keyword){

$conn=db_connect();

if($title){
$query="select * from object where title like '%".$title."%'";
}

if($author){
$query="select * from object where author like '%".$author."%'";
}

if($discipline){
$query="select * from object where discipline like '%".$discipline."%'";
}

if($language){
$query="select * from object where language like '%".$language."%'";
}

if($keyword){
$query="select * from object where keyword like '%".$keyword."%'";
}

if($title&&$author){
$query="select * from object where title like '%".$title."%' AND author like '%".$author."%'";
}

if($title&&$discipline){
$query="select * from object where title like '%".$title."%' AND discipline like '%".$discipline."%'";
}

if($title&&$language){
$query="select * from object where title like '%".$title."%' AND language like '%".$language."%'";
}

if($title&&$keyword){
$query="select * from object where title like '%".$title."%' AND keyword like '%".$keyword."%'";
}

if($author&&$discipline){
$query="select * from object where author like '%".$author."%' AND discipline like '%".$discipline."%'";
}

if($author&&$language){
$query="select * from object where author like '%".$author."%' AND language like '%".$language."%'";
}

if($author&&$keyword){
$query="select * from object where author like '%".$author."%' AND keyword like '%".$keyword."%'";
}

if($discipline&&$language){
$query="select * from object where discipline like '%".$discipline."%' AND language like '%".$language."%'";
}

if($discipline&&$keyword){
$query="select * from object where discipline like '%".$discipline."%' AND keyword like '%".$keyword."%'";
}

if($language&&$keyword){
$query="select * from object where language like '%".$language."%' AND keyword like '%".$keyword."%'";
}

if($title&&$author&&$discipline){
$query="select * from object where title like '%".$title."%' AND author like '%".$author."%' AND discipline like '%".$discipline."%'";
}

if($title&&$author&&$language){
$query="select * from object where title like '%".$title."%' AND author like '%".$author."%' AND language like '%".$language."%'";
}

if($title&&$author&&$keyword){
$query="select * from object where title like '%".$title."%' AND author like '%".$author."%' AND keyword like '%".$keyword."%'";
}

if($title&&$discipline&&$language){
$query="select * from object where title like '%".$title."%' AND discipline like '%".$discipline."%' AND language like '%".$language."%'";
}

if($title&&$discipline&&$keyword){
$query="select * from object where title like '%".$title."%' AND discipline like '%".$discipline."%' AND keyword like '%".$keyword."%'";
}

if($title&&$language&&$keyword){
$query="select * from object where title like '%".$title."%' AND language like '%".$language."%' AND keyword like '%".$keyword."%'";
}

if($author&&$discipline&&$language){
$query="select * from object where author like '%".$author."%' AND discipline like '%".$discipline."%' AND language like '%".$language."%'";
}

if($author&&$discipline&&$keyword){
$query="select * from object where author like '%".$author."%' AND discipline like '%".$discipline."%' AND keyword like '%".$keyword."%'";
}

if($author&&$language&&$keyword){
$query="select * from object where author like '%".$author."%' AND language like '%".$language."%' AND keyword like '%".$keyword."%'";
}

if($discipline&&$language&&$keyword){
$query="select * from object where discipline like '%".$discipline."%' AND language like '%".$language."%' AND keyword like '%".$keyword."%'";
}

if($title&&$author&&$discipline&&$language){
$query="select * from object where title like '%".$title."%' AND author like '%".$author."%' AND discipline like '%".$discipline."%' AND language like '%".$language."%'";
}

if($title&&$author&&$discipline&&$keyword){
$query="select * from object where title like '%".$title."%' AND author like '%".$author."%' AND discipline like '%".$discipline."%' AND keyword like '%".$keyword."%'";
}

if($title&&$author&&$language&&$keyword){
$query="select * from object where title like '%".$title."%' AND author like '%".$author."%' AND language like '%".$language."%' AND keyword like '%".$keyword."%'";
}

if($title&&$discipline&&$language&&$keyword){
$query="select * from object where title like '%".$title."%' AND discipline like '%".$discipline."%' AND language like '%".$language."%' AND keyword like '%".$keyword."%'";
}

if($author&&$discipline&&$language&&$keyword){
$query="select * from object where author like '%".$author."%' AND discipline like '%".$discipline."%' AND language like '%".$language."%' AND keyword like '%".$keyword."%'";
}

if($title&&$author&&$discipline&&$language&&$keyword){
$query="select * from object where title like '%".$title."%' AND author like '%".$author."%' AND discipline like '%".$discipline."%' AND language like '%".$language."%' AND keyword like '%".$keyword."%'";
}

$result=@$conn->query($query);
if(!$result){
return false;
}
$num_objects=@$result->num_rows;
if($num_objects==0){
return false;
}

$result=db_result_to_array($result);
return $result;
}

function get_objid_from_location($filename) {
$conn=db_connect();
$query="select objid from obj_tech where location='".$filename."'";
$result=@$conn->query($query);
if(!$result) {
return false;
}
$num_result=@$result->num_rows;
if($num_result==0) {
return false;
}
$row=$result->fetch_object();
return $row->objid;
}

function get_file_content_search_result($filename) {
if((!$filename)||($filename=='')) {
  return false;
}
$conn=db_connect();
$objid=get_objid_from_location($filename);
$query="select * from object where objid='".$objid."'";
$result=@$conn->query($query);
if(!$result){
return false;
}
$num_objects=@$result->num_rows;
if($num_objects==0){
return false;
}

$result=db_result_to_array($result);
return $result;
}

function get_first_id(){

$conn=db_connect();

$query_objid="SELECT objid FROM object ORDER BY objid DESC LIMIT 0,1";

$result_objid=$conn->query($query_objid);

if(!$result_objid) {
  return false;
}

$row=$result_objid->fetch_object();

$obj_id=$row->objid;

return $obj_id;

}

function get_second_id(){

$conn=db_connect();

$query_objid="SELECT objid FROM object ORDER BY objid DESC LIMIT 1,1";

$result_objid=$conn->query($query_objid);

if(!$result_objid) {
  return false;
}

$row=$result_objid->fetch_object();

$obj_id=$row->objid;

return $obj_id;

}

function get_third_id(){

$conn=db_connect();

$query_objid="SELECT objid FROM object ORDER BY objid DESC LIMIT 2,1";

$result_objid=$conn->query($query_objid);

if(!$result_objid) {
  return false;
}

$row=$result_objid->fetch_object();

$obj_id=$row->objid;

return $obj_id;

}

function get_this_title($objid){
if((!$objid)||($objid=='')) {
  return false;
}

$conn=db_connect();

$query="select title from object where objid='".$objid."'";

$result_title=@$conn->query($query);

if(!$result_title) {
  return false;
}

$row=@$result_title->fetch_object();

$title=$row->title;

return $title;
}

function get_this_discipline($objid){
if((!$objid)||($objid=='')) {
  return false;
}

$conn=db_connect();

$query="select discipline from object where objid='".$objid."'";

$result_discipline=@$conn->query($query);

if(!$result_discipline) {
  return false;
}

$row=@$result_discipline->fetch_object();

$discipline=$row->discipline;

return $discipline;
}

function get_this_language($objid){
if((!$objid)||($objid=='')) {
  return false;
}

$conn=db_connect();

$query="select language from object where objid='".$objid."'";

$result_language=@$conn->query($query);

if(!$result_language) {
  return false;
}

$row=@$result_language->fetch_object();

$language=$row->language;

return $language;
}


?>
