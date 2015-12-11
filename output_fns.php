<?php
/* This file contains all the functions which formats the output as HTML. */

function do_html_header($title, $cssfile) {
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="My Personal Learning Objects Repository">
    <title><?php echo $title;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/<?php echo $cssfile; ?>">
    </head>
  
<body>
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">lupersonallms.com</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="browse.php">Browse</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  
    <div class="jumbotron">
      <div class="container">
        <h1>My Learning Objects Repository</h1>
        <p>Welcome! Lupersonallms.com is a online learning platform which enables users to share, manage and use educational resources. Do not hesitate to share with the community!</p>   
      </div>
    </div>
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

<hr>

</div>  
<?php
}

function do_html_header_index(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
}

function do_page_content_index($first_id, $first_title, $first_discipline, $first_language, $second_id, $second_title, $second_discipline, $second_language, $third_id, $third_title, $third_discipline, $third_language){
?>
<div class="container theme-showcase" role="main">
  <div class="jumbotron">
    
      <h2>My Learning Objects Repository</h2>
      <p>Welcome! Lupersonallms.com is a online learning platform which enables users to share, manage and use educational resources. Do not hesitate to share with the community!</p>   
   
  </div>
  
  <div class="page-header">
  <h2>Recently Added Learning Objects</h2>
  </div>
 <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2><?php echo $first_title; ?></h2>
        <p>title: <?php echo $first_title; ?></p>
        <p>discipline: <?php echo $first_discipline; ?></p>
        <p>language: <?php echo $first_language; ?></p>
        <p><a class="btn btn-default" href="show_object.php?objid=<?php echo $first_id; ?>" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><?php echo $second_title; ?></h2>
        <p>title: <?php echo $second_title; ?></p>
        <p>discipline: <?php echo $second_discipline; ?></p>
        <p>language: <?php echo $second_language; ?></p>
        <p><a class="btn btn-default" href="show_object.php?objid=<?php echo $second_id; ?>" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><?php echo $third_title; ?></h2>
        <p>title: <?php echo $third_title; ?></p>
        <p>discipline: <?php echo $third_discipline; ?></p>
        <p>language: <?php echo $third_language; ?></p>
        <p><a class="btn btn-default" href="show_object.php?objid=<?php echo $third_id; ?>" role="button">View details &raquo;</a></p>
      </div>
    </div>
  </div>
</div>  

<?php
}

function do_html_header_browse(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li class="active"><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
<?php
}

function do_page_content_browse($disc_array){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Disciplines</h2>
  <p>Here are the currently available academic disciplines in my LOR. Please select one to continue.</p>
</div>
  
<?php 
  display_discipline($disc_array); 
?>
     
</div>
<?php
}

function do_page_content_show_disc($object_array){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Learning Objects Under Your selected Discipline</h2>
</div>

<?php 
  display_objects($object_array); 
?>

</div>

<?php
}

function do_page_content_show_object($object_general, $object_rights, $object_lifecycle, $object_tech, $result_array){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Learning Object Metadata</h2>
</div>

<?php 
  display_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech);
?>

<div class="page-header">
  <h2>Files Related To This Learning Object</h2>
</div> 

<?php 
  display_locations($result_array); 
?>

</div>

<?php
}

function do_html_header_view_file_content(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/view_file_content.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li class="active"><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<?php
}

function do_html_header_login(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li class="active"><a href="login.php">Login</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<?php
}

function do_page_content_login(){
?>
<div class="container theme-showcase" role="main">

      <form class="form-signin" method="post" action="member.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p></p>
        <p><a href="register_form.php">Not a member?</a></p>

      </form>

    </div> 
<?php
}

function do_html_header_member(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li  class="active"><a href="login.php">Login</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
}

function do_page_content_member($current_user){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Member Page</h2>
  <p>You are logged in as <?php echo $current_user; ?>.</p>
  <p>On this page you can upload a new learning object, modify your learning objects, or change your password.</p>
</div>
  
<?php 
  display_user_menu();
?>
     
</div>
<?php
}

function do_html_header_error_page(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
}

function do_error_message_cannot_login(){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>You could not be logged in.</h2>
  <p>You must be logged in to view this page</p>
</div>
<?php
  do_html_url('login.php', 'Retry');
  
 ?>
</div>
<?php
}

function do_page_content_add_object(){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Add a New Learning Object</h2>
  <p>Please fill in the metadata and upload a file related to this learning object.</p>
</div>
  
<?php 
  display_addobj_form(); 
?>
     
</div>
<?php
}


function do_html_footer(){
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
<?php
}

function do_html_heading($heading){
?>
  <h2><?php echo $heading; ?></h2>
<?php
}

function do_html_url($url, $name){
?>
 <br /><a href="<?php echo $url; ?>"><?php echo $name;?></a><br />
<?php
}

function display_registration_form(){
?>
<form method="post" action="register_new.php">
 <table bgcolor="#cccccc">
  <tr>
     <td>Preferred username <br />(max 16 chars):</td>
     <td valign="top"><input type="text" name="username"
         size="16" maxlength="16"/></td></tr>   
  <tr>
     <td>Your firstname <br />(max 16 chars):</td>
     <td valign="top"><input type="text" name="firstname"
         size="16" maxlength="16"/></td></tr>   
  <tr>
     <td>Your lastname <br />(max 16 chars):</td>
     <td valign="top"><input type="text" name="lastname"
         size="16" maxlength="16"/></td></tr>   
  <tr>
     <td>Password <br />(between 6 and 16 chars):</td>
     <td valign="top"><input type="password" name="passwd"
         size="16" maxlength="16"/></td></tr>
  <tr>
     <td>Confirm password:</td>
     <td><input type="password" name="passwd2" size="16" maxlength="16"/></td></tr>
   <tr>
     <td>Email address:</td>
     <td><input type="text" name="email" size="30" maxlength="100"/></td></tr>
   <tr>
     <td>Your institute <br />(max 16 chars):</td>
     <td valign="top"><input type="text" name="institute"
         size="16" maxlength="16"/></td></tr>   
   <tr>
     <td colspan=2 align="center">
     <input type="submit" value="Register"></td></tr>
 </table></form>
<?php
}

function display_user_menu() {
?>
<hr />
<a href="member.php">Home</a> &nbsp;|&nbsp;
<a href="add_obj_form.php">Add new object</a> &nbsp;|&nbsp;
<a href="change_password_form.php">Change password</a>
<br />
<a href="edit_my_objects.php">Edit my objects</a> &nbsp;|&nbsp;
<a href="logout.php">Logout</a>
<hr />

<?php
}

function display_admin_menu() {
?>
<hr />
<a href="admin.php">Home</a> &nbsp;|&nbsp;
<a href="add_obj_form.php">Add new object</a> &nbsp;|&nbsp;
<a href="change_password_form.php">Change password</a>
<br />
<a href="editobjects.php">Edit objects</a> &nbsp;|&nbsp;

<a href="logout.php">Logout</a>
<hr />

<?php
}

function display_password_form() {
  // display html change password form
?>
   <br />
   <form action="change_password.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Old password:</td>
       <td><input type="password" name="old_passwd"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td>New password:</td>
       <td><input type="password" name="new_passwd"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td>Repeat new password:</td>
       <td><input type="password" name="new_passwd2"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan="2" align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_forgot_form() {
  // display HTML form to reset and email password
?>
   <br />
   <form action="forgot_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Enter your username</td>
       <td><input type="text" name="username" size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan=2 align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_addobj_form() {

?>
    
    <form method="post" action="add_new_obj.php" enctype="multipart/form-data">
      <div id="general">
      <h2>General</h2>
      <table>
        <colgroup>
          <col span="1" style="width: 30%;">
          <col span="1" style="width: 70%;">
        </colgroup>
        <tr>
          <td>Title</td>
          <td valign="top"><input type="text" name="title" size="85" maxlength="100"/></td></tr>
         <tr>
              <td>Discipline</td>
              <td valign="top">
                <select name="discipline" size="1">
                  <option value="biology">Biology</option>
                  <option value="business">Business</option>
                  <option value="chemistry">Chemistry</option>
                  <option value="computerscience">Computer Science</option>
                  <option value="economics">Economics</option>
                  <option value="education">Education</option>
                  <option value="engineering">Engineering</option>
                  <option value="geology">Geology</option>
                  <option value="history">History</option>
                  <option value="mathematics">Mathematics</option>
                  <option value="physics">Physics</option>
                  <option value="phychology">Phychology</option>
                  <option value="sociology">Sociology</option>
                  </select>
              </td></tr>
        <tr>
          <td>Language</td>
          <td valign="top">
            <select name="language" size="1">
            <option value="English">English</option>
            <option value="Chinese">Chinese</option>
            <option value="French">French</option>
            <option value="German">German</option>
            </select>
          </td></tr>
        <tr>
          <td>Keyword</td>
          <td valign="top"><input type="text" name="keyword" size="85" maxlength="100"/></td></tr>
        <tr>
          <td>Structure</td>
          <td valign="top">
            <select name="structure" size="1">
            <option value="atomic">atomic</option>
            <option value="collection">collection</option>
            <option value="networked">networked</option>
            <option value="hierarchical">hierarchical</option>
            <option value="linear">linear</option>
            </select>
          </td></tr>
        <tr>
          <td>Aggregation Level</td>
          <td valign="top">
            <select name="aggrelvl" size="1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select>
          </td></tr>
        <tr>
          <td>Description</td>
          <td valign="top">
              <textarea cols="20" name="rightdescription" rows="5" style="margin: 2px; height: 88px; width:              535px;"></textarea>
          </td></tr>
      </table>
      </div>
      
      <div id="lifecycle">
      <h2>Life Cycle</h2>
      <table>
        <colgroup>
          <col span="1" style="width: 30%;">
          <col span="1" style="width: 70%;">
        </colgroup>
        <tr>
          <td>Version</td>
          <td valign="top"><input type="text" name="version" size="85" maxlength="100"/></td></tr>
        <tr>
          <td>Status</td>
          <td valign="top">
          <select name="status" size="1">
            <option value="draft">draft</option>
            <option value="final">final</option>
            <option value="revised">revised</option>
            <option value="unavailable">unavailable</option>
            </select>
          </td></tr>
      </table>
      </div>
      
      <div id="educational">
      <h2>Educational</h2>
      <table>
        <colgroup>
          <col span="1" style="width: 30%;">
          <col span="1" style="width: 70%;">
        </colgroup>
        <tr>
          <td>Interactivity Type</td>
          <td valign="top">
          <select name="interacttype" size="1">
            <option value="active">active</option>
            <option value="expositive">expositive</option>
            <option value="mixed">mixed</option>
            </select>
          </td></tr>
        <tr>
          <td>Learning Resource Type</td>
          <td valign="top">
          <select name="resourcetype" size="1">
            <option value="exercise">exercise</option>
            <option value="simulation">simulation</option>
            <option value="questionnaire">questionnaire</option>
            <option value="diagram">diagram</option>
            <option value="figure">figure</option>
            <option value="graph">graph</option>
            <option value="index">index</option>
            <option value="slide">slide</option>
            <option value="table">table</option>
            <option value="narrative text">narrative text</option>
            <option value="exam">exam</option>
            <option value="experiment">experiment</option>
            <option value="problem statement">problem statement</option>
            <option value="self assessment">self assessment</option>
            <option value="lecture">lecture</option></select>
         </td></tr>
         <tr>
           <td>Interactivity Level</td>
           <td valign="top">
           <select name="interactlvl" size="1">
             <option value="very low">very low</option>
             <option value="low">low</option>
             <option value="medium">medium</option>
             <option value="high">high</option>
             <option value="very high">very high</option></select>
           </td></tr>  
         <tr>
           <td>Intended End User Role</td>
           <td valign="top">
           <select name="enduserrole" size="1">
             <option value="teacher">teacher</option>
             <option value="author">author</option>
             <option value="learner">learner</option>
             <option value="manager">manager</option></select>
           </td></tr> 
          <tr>
            <td>Typical Learning Time</td>
            <td valign="top">
            <input maxlength="100" name="learningtime" size="85" type="text" />
          </td></tr> 
          </table>
          </div>
          
          <div id="rights">
          <h2>Rights</h2>
          <table>
           <colgroup>
              <col span="1" style="width: 33.5%;">
              <col span="1" style="width: 70%;">
           </colgroup>
           <tr>
              <td>Cost</td>
              <td valign="top">
              <select name="cost" size="1">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
              </td></tr>
            <tr>
              <td>Copyrights</td>
              <td valign="top">
              <select name="copyright" size="1">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
              </td></tr>
            <tr>
              <td>Description</td>
              <td valign="top">
              <textarea cols="20" name="rightdescription" rows="5" style="margin: 2px; height: 88px; width:              535px;"></textarea>
              </td></tr>
          </table>
          </div>
          
          
          <div>
          <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
          <label for="userfile">Attach a file:</lable>
          <input type="file" name="userfile" id="userfile"/>
          
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Add Object</button>
         
          </form>
          
          
<?php
}

function display_discipline($disc_array){
if(!is_array($disc_array)){
echo "<p>No discipline currently available</p>";
return;
}
echo "<ul>";
foreach($disc_array as $row) {
$url="show_disc.php?discid=".($row['discid']);
$title=$row['discname'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

function display_edit_discipline($disc_array){
if(!is_array($disc_array)){
echo "<p>No discipline currently available</p>";
return;
}
echo "<ul>";
foreach($disc_array as $row) {
$url="show_edit_disc.php?discid=".($row['discid']);
$title=$row['discname'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

function display_objects($object_array) {
if(!is_array($object_array)){
echo "<p>No objects currently available under this discipline</p>";
return;
}
echo "<ul>";
foreach($object_array as $row) {
$url="show_object.php?objid=".($row['objid']);
$title=$row['title'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

function display_locations($object_array) {
if(!is_array($object_array)){
echo "<p>No objects currently available under this discipline</p>";
return;
}
echo "<ul>";
foreach($object_array as $row) {
$url="view_file_content.php?location=".($row['location']);
$title=$row['location'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

function display_this_user_objects($object_array){

if(!is_array($object_array)){
echo "<p>You have not uploaded anything.</p>";
return;
}
echo "<ul>";
foreach($object_array as $row) {
$url="show_this_user_object.php?objid=".($row['objid']);
$title=$row['title'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";

}

function display_edit_objects($object_array) {
if(!is_array($object_array)){
echo "<p>No objects currently available under this discipline</p>";
return;
}
echo "<ul>";
foreach($object_array as $row) {
$url="show_edit_object.php?objid=".($row['objid']);
$title=$row['title'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

function display_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech){
if((is_array($object_general))&&(is_array($object_rights))&&(is_array($object_lifecycle))){
echo "<table><tr>";
echo "<td><ul>";
echo "<li><strong>Title:</strong>";
echo $object_general['title'];
echo "</li><li><strong>Author:</strong> ";
echo $object_general['author'];
echo "</li><li><strong>Discipline:</strong> ";
echo $object_general['discipline'];
echo "</li><li><strong>Language:</strong> ";
echo $object_general['language'];
echo "</li><li><strong>Keyword:</strong> ";
echo $object_general['keyword'];
echo "</li><li><strong>Structure:</strong> ";
echo $object_general['structure'];
echo "</li><li><strong>Aggregation Level:</strong> ";
echo $object_general['aggregation_level'];
echo "</li><li><strong>Version:</strong> ";
echo $object_lifecycle['version'];
echo "</li><li><strong>Status:</strong> ";
echo $object_lifecycle['status'];
echo "</li><li><strong>Interactivity Type:</strong> ";
echo $object_general['interactivity_type'];
echo "</li><li><strong>Learning Resource Type:</strong> ";
echo $object_general['learning_res_type'];
echo "</li><li><strong>Interactivity Level:</strong> ";
echo $object_general['interactivity_level'];
echo "</li><li><strong>Intended End User Role:</strong> ";
echo $object_general['intended_end_user_role'];
echo "</li><li><strong>Typical Learning Time:</strong> ";
echo $object_general['typical_learning_time'];
echo "</li><li><strong>Cost:</strong> ";
echo $object_rights['cost'];
echo "</li><li><strong>Copyrights and Other Restrictions:</strong> ";
echo $object_rights['copyrights_and_other_res'];
echo "</li></ul></td></tr></table>";

}else{
echo "<p>The details of this object cannot be displayed at this time.</p>";
}
echo "<hr />";
}

function display_edit_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech){
if((is_array($object_general))&&(is_array($object_rights))&&(is_array($object_lifecycle))){
echo "<table><tr>";
echo "<td><ul>";
echo "<li><strong>Title:</strong>";
echo $object_general['title'];
echo "</li><li><strong>Author:</strong> ";
echo $object_general['author'];
echo "</li><li><strong>Discipline:</strong> ";
echo $object_general['discipline'];
echo "</li><li><strong>Language:</strong> ";
echo $object_general['language'];
echo "</li><li><strong>Keyword:</strong> ";
echo $object_general['keyword'];
echo "</li><li><strong>Structure:</strong> ";
echo $object_general['structure'];
echo "</li><li><strong>Aggregation Level:</strong> ";
echo $object_general['aggregation_level'];
echo "</li><li><strong>Version:</strong> ";
echo $object_lifecycle['version'];
echo "</li><li><strong>Status:</strong> ";
echo $object_lifecycle['status'];
echo "</li><li><strong>Interactivity Type:</strong> ";
echo $object_general['interactivity_type'];
echo "</li><li><strong>Learning Resource Type:</strong> ";
echo $object_general['learning_res_type'];
echo "</li><li><strong>Interactivity Level:</strong> ";
echo $object_general['interactivity_level'];
echo "</li><li><strong>Intended End User Role:</strong> ";
echo $object_general['intended_end_user_role'];
echo "</li><li><strong>Typical Learning Time:</strong> ";
echo $object_general['typical_learning_time'];
echo "</li><li><strong>Cost:</strong> ";
echo $object_rights['cost'];
echo "</li><li><strong>Copyrights and Other Restrictions:</strong> ";
echo $object_rights['copyrights_and_other_res'];
echo "</li></ul></td></tr></table>";
}else{
echo "<p>The details of this object cannot be displayed at this time.</p>";
}
echo "<hr />";
}

function display_user_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech){
if((is_array($object_general))&&(is_array($object_rights))&&(is_array($object_lifecycle))){
echo "<table><tr>";
echo "<td><ul>";
echo "<li><strong>Title:</strong>";
echo $object_general['title'];
echo "</li><li><strong>Author:</strong> ";
echo $object_general['author'];
echo "</li><li><strong>Discipline:</strong> ";
echo $object_general['discipline'];
echo "</li><li><strong>Language:</strong> ";
echo $object_general['language'];
echo "</li><li><strong>Keyword:</strong> ";
echo $object_general['keyword'];
echo "</li><li><strong>Structure:</strong> ";
echo $object_general['structure'];
echo "</li><li><strong>Aggregation Level:</strong> ";
echo $object_general['aggregation_level'];
echo "</li><li><strong>Version:</strong> ";
echo $object_lifecycle['version'];
echo "</li><li><strong>Status:</strong> ";
echo $object_lifecycle['status'];
echo "</li><li><strong>Interactivity Type:</strong> ";
echo $object_general['interactivity_type'];
echo "</li><li><strong>Learning Resource Type:</strong> ";
echo $object_general['learning_res_type'];
echo "</li><li><strong>Interactivity Level:</strong> ";
echo $object_general['interactivity_level'];
echo "</li><li><strong>Intended End User Role:</strong> ";
echo $object_general['intended_end_user_role'];
echo "</li><li><strong>Typical Learning Time:</strong> ";
echo $object_general['typical_learning_time'];
echo "</li><li><strong>Cost:</strong> ";
echo $object_rights['cost'];
echo "</li><li><strong>Copyrights and Other Restrictions:</strong> ";
echo $object_rights['copyrights_and_other_res'];
echo "</li></ul></td></tr></table>";

}else{
echo "<p>The details of this object cannot be displayed at this time.</p>";
}
echo "<hr />";
}

function display_edit_form($objid, $object_general, $object_rights, $object_lifecycle, $object_tech){
echo $object_general['title'];
?>
  <form method="post" action="edit_this_object.php">
  <table>
    <tr>
      <td>Hidden:</td>
      <td><input type="hidden" name="objid" value="<?php echo $objid ?>" /></td></tr>
    <tr>
      <td>Title:</td>
      <td><input type="text" name="newtitle" value="<?php echo $object_general['title'] ?>" /></td></tr>
    <tr>
      <td>Author:</td>
      <td><input type="text" name="newauthor" value="<?php echo $object_general['author'] ?>"/></td></tr>
     <tr>
              <td>Discipline</td>
              <td valign="top">
                <select name="newdiscipline" size="1">
                  <?php
                      $disc_array=get_discipline();
                      foreach($disc_array as $thisdisc){
                          echo "<option value=\"".$thisdisc['discname']."\"";
                          if($thisdisc['discname']==$object_general['discipline']){
                          echo "selected";
                          }
                          echo ">".$thisdisc['discname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
         <tr>
              <td>Language</td>
              <td valign="top">
                <select name="newlanguage" size="1">
                  <?php
                      $lang_array=get_language();
                      foreach($lang_array as $thislang){
                          echo "<option value=\"".$thislang['langname']."\"";
                          if($thislang['langname']==$object_general['language']){
                          echo "selected";
                          }
                          echo ">".$thislang['langname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
    <tr>
      <td>Keyword:</td>
      <td><input type="text" name="newkeyword" value="<?php echo $object_general['keyword'] ?>" /></td></tr> 
    <tr>
              <td>Structure</td>
              <td valign="top">
                <select name="newstructure" size="1">
                  <?php
                      $struct_array=get_structure();
                      foreach($struct_array as $thisstruct){
                          echo "<option value=\"".$thisstruct['structname']."\"";
                          if($thisstruct['structname']==$object_general['structure']){
                          echo "selected";
                          }
                          echo ">".$thisstruct['structname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
     <tr>
              <td>Aggregation Level</td>
              <td valign="top">
                <select name="newaggrelvl" size="1">
                  <?php
                      $aggrelvl_array=get_aggrelvl();
                      foreach($aggrelvl_array as $thisaggrelvl){
                          echo "<option value=\"".$thisaggrelvl['aggrelvlname']."\"";
                          if($thisaggrelvl['aggrelvlname']==$object_general['aggregation_level']){
                          echo "selected";
                          }
                          echo ">".$thisaggrelvl['aggrelvlname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
    <tr>
      <td>Version:</td>
      <td><input type="text" name="newversion" value="<?php echo $object_lifecycle['version'] ?>" /></td></tr>
     <tr>
              <td>Status</td>
              <td valign="top">
                <select name="newstatus" size="1">
                  <?php
                      $status_array=get_status();
                      foreach($status_array as $thisstatus){
                          echo "<option value=\"".$thisstatus['statusname']."\"";
                          if($thisstatus['statusname']==$object_lifecycle['status']){
                          echo "selected";
                          }
                          echo ">".$thisstatus['statusname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr> 
    <tr>
              <td>Interactivity Type</td>
              <td valign="top">
                <select name="newinteracttype" size="1">
                  <?php
                      $intertype_array=get_intertype();
                      foreach($intertype_array as $thisintertype){
                          echo "<option value=\"".$thisintertype['intertypename']."\"";
                          if($thisintertype['intertypename']==$object_general['interactivity_type']){
                          echo "selected";
                          }
                          echo ">".$thisintertype['intertypename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>            
    <tr>
              <td>Learning Resource Type</td>
              <td valign="top">
                <select name="newresourcetype" size="1">
                  <?php
                      $resourcetype_array=get_resourcetype();
                      foreach($resourcetype_array as $thisresourcetype){
                          echo "<option value=\"".$thisresourcetype['resourcetypename']."\"";
                          if($thisresourcetype['resourcetypename']==$object_general['learning_res_type']){
                          echo "selected";
                          }
                          echo ">".$thisresourcetype['resourcetypename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>    
   <tr>
              <td>Interactivity Level</td>
              <td valign="top">
                <select name="newinteractlvl" size="1">
                  <?php
                      $interactlvl_array=get_interactlvl();
                      foreach($interactlvl_array as $thisinteractlvl){
                          echo "<option value=\"".$thisinteractlvl['interactlvlname']."\"";
                          if($thisinteractlvl['interactlvlname']==$object_general['interactivity_level']){
                          echo "selected";
                          }
                          echo ">".$thisinteractlvl['interactlvlname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>    
   <tr>
              <td>Intended End User Role</td>
              <td valign="top">
                <select name="newenduserrole" size="1">
                  <?php
                      $enduserrole_array=get_enduserrole();
                      foreach($enduserrole_array as $thisenduserrole){
                          echo "<option value=\"".$thisenduserrole['enduserrolename']."\"";
                          if($thisenduserrole['enduserrolename']==$object_general['intended_end_user_role']){
                          echo "selected";
                          }
                          echo ">".$thisenduserrole['enduserrolename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
   <tr>
      <td>Typical Learning Time:</td>
      <td><input type="text" name="newlearningtime" value="<?php echo $object_general['typical_learning_time'] ?>" /></td></tr>        
   <tr>
              <td>Cost</td>
              <td valign="top">
                <select name="newcost" size="1">
                  <?php
                      $cost_array=get_cost();
                      foreach($cost_array as $thiscost){
                          echo "<option value=\"".$thiscost['costname']."\"";
                          if($thiscost['costname']==$object_rights['cost']){
                          echo "selected";
                          }
                          echo ">".$thiscost['costname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>  
   <tr>
              <td>Copyrights and Other Restrictions</td>
              <td valign="top">
                <select name="newcopyright" size="1">
                  <?php
                      $copyright_array=get_copyright();
                      foreach($copyright_array as $thiscopyright){
                          echo "<option value=\"".$thiscopyright['copyrightname']."\"";
                          if($thiscopyright['copyrightname']==$object_rights['copyrights_and_other_res']){
                          echo "selected";
                          }
                          echo ">".$thiscopyright['copyrightname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr> 
                                             
   </table>
   
   <input type="submit" value="Update Object">    
  
   </form>
   <p>
   <form method="post" action="delete_object.php">
   <input type="hidden" name="objid" value="<?php echo $objid ?>" />
   <input type="submit" value="Delete object" />
   </form></p>
 <?php
}

function display_edit_file_form($objid, $object_general, $object_rights, $object_lifecycle, $object_tech){
echo $object_general['title'];
?>
  <form method="post" action="edit_this_object_file.php" enctype="multipart/form-data">
  <table>
    <tr>
      <td>Hidden:</td>
      <td><input type="hidden" name="objid" value="<?php echo $objid ?>" /></td></tr>
    <tr>
      <td>Title:</td>
      <td><input type="text" name="newtitle" value="<?php echo $object_general['title'] ?>" /></td></tr>
    <tr>
      <td>Author:</td>
      <td><input type="text" name="newauthor" value="<?php echo $object_general['author'] ?>"/></td></tr>
     <tr>
              <td>Discipline</td>
              <td valign="top">
                <select name="newdiscipline" size="1">
                  <?php
                      $disc_array=get_discipline();
                      foreach($disc_array as $thisdisc){
                          echo "<option value=\"".$thisdisc['discname']."\"";
                          if($thisdisc['discname']==$object_general['discipline']){
                          echo "selected";
                          }
                          echo ">".$thisdisc['discname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
         <tr>
              <td>Language</td>
              <td valign="top">
                <select name="newlanguage" size="1">
                  <?php
                      $lang_array=get_language();
                      foreach($lang_array as $thislang){
                          echo "<option value=\"".$thislang['langname']."\"";
                          if($thislang['langname']==$object_general['language']){
                          echo "selected";
                          }
                          echo ">".$thislang['langname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
    <tr>
      <td>Keyword:</td>
      <td><input type="text" name="newkeyword" value="<?php echo $object_general['keyword'] ?>" /></td></tr> 
    <tr>
              <td>Structure</td>
              <td valign="top">
                <select name="newstructure" size="1">
                  <?php
                      $struct_array=get_structure();
                      foreach($struct_array as $thisstruct){
                          echo "<option value=\"".$thisstruct['structname']."\"";
                          if($thisstruct['structname']==$object_general['structure']){
                          echo "selected";
                          }
                          echo ">".$thisstruct['structname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
     <tr>
              <td>Aggregation Level</td>
              <td valign="top">
                <select name="newaggrelvl" size="1">
                  <?php
                      $aggrelvl_array=get_aggrelvl();
                      foreach($aggrelvl_array as $thisaggrelvl){
                          echo "<option value=\"".$thisaggrelvl['aggrelvlname']."\"";
                          if($thisaggrelvl['aggrelvlname']==$object_general['aggregation_level']){
                          echo "selected";
                          }
                          echo ">".$thisaggrelvl['aggrelvlname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
    <tr>
      <td>Version:</td>
      <td><input type="text" name="newversion" value="<?php echo $object_lifecycle['version'] ?>" /></td></tr>
     <tr>
              <td>Status</td>
              <td valign="top">
                <select name="newstatus" size="1">
                  <?php
                      $status_array=get_status();
                      foreach($status_array as $thisstatus){
                          echo "<option value=\"".$thisstatus['statusname']."\"";
                          if($thisstatus['statusname']==$object_lifecycle['status']){
                          echo "selected";
                          }
                          echo ">".$thisstatus['statusname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr> 
    <tr>
              <td>Interactivity Type</td>
              <td valign="top">
                <select name="newinteracttype" size="1">
                  <?php
                      $intertype_array=get_intertype();
                      foreach($intertype_array as $thisintertype){
                          echo "<option value=\"".$thisintertype['intertypename']."\"";
                          if($thisintertype['intertypename']==$object_general['interactivity_type']){
                          echo "selected";
                          }
                          echo ">".$thisintertype['intertypename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>            
    <tr>
              <td>Learning Resource Type</td>
              <td valign="top">
                <select name="newresourcetype" size="1">
                  <?php
                      $resourcetype_array=get_resourcetype();
                      foreach($resourcetype_array as $thisresourcetype){
                          echo "<option value=\"".$thisresourcetype['resourcetypename']."\"";
                          if($thisresourcetype['resourcetypename']==$object_general['learning_res_type']){
                          echo "selected";
                          }
                          echo ">".$thisresourcetype['resourcetypename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>    
   <tr>
              <td>Interactivity Level</td>
              <td valign="top">
                <select name="newinteractlvl" size="1">
                  <?php
                      $interactlvl_array=get_interactlvl();
                      foreach($interactlvl_array as $thisinteractlvl){
                          echo "<option value=\"".$thisinteractlvl['interactlvlname']."\"";
                          if($thisinteractlvl['interactlvlname']==$object_general['interactivity_level']){
                          echo "selected";
                          }
                          echo ">".$thisinteractlvl['interactlvlname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>    
   <tr>
              <td>Intended End User Role</td>
              <td valign="top">
                <select name="newenduserrole" size="1">
                  <?php
                      $enduserrole_array=get_enduserrole();
                      foreach($enduserrole_array as $thisenduserrole){
                          echo "<option value=\"".$thisenduserrole['enduserrolename']."\"";
                          if($thisenduserrole['enduserrolename']==$object_general['intended_end_user_role']){
                          echo "selected";
                          }
                          echo ">".$thisenduserrole['enduserrolename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
   <tr>
      <td>Typical Learning Time:</td>
      <td><input type="text" name="newlearningtime" value="<?php echo $object_general['typical_learning_time'] ?>" /></td></tr>        
   <tr>
              <td>Cost</td>
              <td valign="top">
                <select name="newcost" size="1">
                  <?php
                      $cost_array=get_cost();
                      foreach($cost_array as $thiscost){
                          echo "<option value=\"".$thiscost['costname']."\"";
                          if($thiscost['costname']==$object_rights['cost']){
                          echo "selected";
                          }
                          echo ">".$thiscost['costname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>  
   <tr>
              <td>Copyrights and Other Restrictions</td>
              <td valign="top">
                <select name="newcopyright" size="1">
                  <?php
                      $copyright_array=get_copyright();
                      foreach($copyright_array as $thiscopyright){
                          echo "<option value=\"".$thiscopyright['copyrightname']."\"";
                          if($thiscopyright['copyrightname']==$object_rights['copyrights_and_other_res']){
                          echo "selected";
                          }
                          echo ">".$thiscopyright['copyrightname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr> 
                                             
   </table>
   <div>
   <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
   <label for="userfile">Attach a file:</lable>
   <input type="file" name="userfile" id="userfile"/>
   </div>
   <input type="submit" value="Update Object">   
   </form>
   
   <p>
   <form method="post" action="delete_object.php">
   <input type="hidden" name="objid" value="<?php echo $objid ?>" />
   <input type="submit" value="Delete object" />
   </form>
   </p>
   
<?php
}

function display_edit_and_add_related_file_form($objid, $object_general, $object_rights, $object_lifecycle, $object_tech){
echo $object_general['title'];
?>
  <form method="post" action="edit_this_and_add_related_file.php" enctype="multipart/form-data">
  <table>
    <tr>
      <td>Hidden:</td>
      <td><input type="hidden" name="objid" value="<?php echo $objid ?>" /></td></tr>
    <tr>
      <td>Title:</td>
      <td><input type="text" name="newtitle" value="<?php echo $object_general['title'] ?>" /></td></tr>
    <tr>
      <td>Author:</td>
      <td><input type="text" name="newauthor" value="<?php echo $object_general['author'] ?>"/></td></tr>
     <tr>
              <td>Discipline</td>
              <td valign="top">
                <select name="newdiscipline" size="1">
                  <?php
                      $disc_array=get_discipline();
                      foreach($disc_array as $thisdisc){
                          echo "<option value=\"".$thisdisc['discname']."\"";
                          if($thisdisc['discname']==$object_general['discipline']){
                          echo "selected";
                          }
                          echo ">".$thisdisc['discname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
         <tr>
              <td>Language</td>
              <td valign="top">
                <select name="newlanguage" size="1">
                  <?php
                      $lang_array=get_language();
                      foreach($lang_array as $thislang){
                          echo "<option value=\"".$thislang['langname']."\"";
                          if($thislang['langname']==$object_general['language']){
                          echo "selected";
                          }
                          echo ">".$thislang['langname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
    <tr>
      <td>Keyword:</td>
      <td><input type="text" name="newkeyword" value="<?php echo $object_general['keyword'] ?>" /></td></tr> 
    <tr>
              <td>Structure</td>
              <td valign="top">
                <select name="newstructure" size="1">
                  <?php
                      $struct_array=get_structure();
                      foreach($struct_array as $thisstruct){
                          echo "<option value=\"".$thisstruct['structname']."\"";
                          if($thisstruct['structname']==$object_general['structure']){
                          echo "selected";
                          }
                          echo ">".$thisstruct['structname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
     <tr>
              <td>Aggregation Level</td>
              <td valign="top">
                <select name="newaggrelvl" size="1">
                  <?php
                      $aggrelvl_array=get_aggrelvl();
                      foreach($aggrelvl_array as $thisaggrelvl){
                          echo "<option value=\"".$thisaggrelvl['aggrelvlname']."\"";
                          if($thisaggrelvl['aggrelvlname']==$object_general['aggregation_level']){
                          echo "selected";
                          }
                          echo ">".$thisaggrelvl['aggrelvlname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
    <tr>
      <td>Version:</td>
      <td><input type="text" name="newversion" value="<?php echo $object_lifecycle['version'] ?>" /></td></tr>
     <tr>
              <td>Status</td>
              <td valign="top">
                <select name="newstatus" size="1">
                  <?php
                      $status_array=get_status();
                      foreach($status_array as $thisstatus){
                          echo "<option value=\"".$thisstatus['statusname']."\"";
                          if($thisstatus['statusname']==$object_lifecycle['status']){
                          echo "selected";
                          }
                          echo ">".$thisstatus['statusname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr> 
    <tr>
              <td>Interactivity Type</td>
              <td valign="top">
                <select name="newinteracttype" size="1">
                  <?php
                      $intertype_array=get_intertype();
                      foreach($intertype_array as $thisintertype){
                          echo "<option value=\"".$thisintertype['intertypename']."\"";
                          if($thisintertype['intertypename']==$object_general['interactivity_type']){
                          echo "selected";
                          }
                          echo ">".$thisintertype['intertypename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>            
    <tr>
              <td>Learning Resource Type</td>
              <td valign="top">
                <select name="newresourcetype" size="1">
                  <?php
                      $resourcetype_array=get_resourcetype();
                      foreach($resourcetype_array as $thisresourcetype){
                          echo "<option value=\"".$thisresourcetype['resourcetypename']."\"";
                          if($thisresourcetype['resourcetypename']==$object_general['learning_res_type']){
                          echo "selected";
                          }
                          echo ">".$thisresourcetype['resourcetypename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>    
   <tr>
              <td>Interactivity Level</td>
              <td valign="top">
                <select name="newinteractlvl" size="1">
                  <?php
                      $interactlvl_array=get_interactlvl();
                      foreach($interactlvl_array as $thisinteractlvl){
                          echo "<option value=\"".$thisinteractlvl['interactlvlname']."\"";
                          if($thisinteractlvl['interactlvlname']==$object_general['interactivity_level']){
                          echo "selected";
                          }
                          echo ">".$thisinteractlvl['interactlvlname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>    
   <tr>
              <td>Intended End User Role</td>
              <td valign="top">
                <select name="newenduserrole" size="1">
                  <?php
                      $enduserrole_array=get_enduserrole();
                      foreach($enduserrole_array as $thisenduserrole){
                          echo "<option value=\"".$thisenduserrole['enduserrolename']."\"";
                          if($thisenduserrole['enduserrolename']==$object_general['intended_end_user_role']){
                          echo "selected";
                          }
                          echo ">".$thisenduserrole['enduserrolename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
   <tr>
      <td>Typical Learning Time:</td>
      <td><input type="text" name="newlearningtime" value="<?php echo $object_general['typical_learning_time'] ?>" /></td></tr>        
   <tr>
              <td>Cost</td>
              <td valign="top">
                <select name="newcost" size="1">
                  <?php
                      $cost_array=get_cost();
                      foreach($cost_array as $thiscost){
                          echo "<option value=\"".$thiscost['costname']."\"";
                          if($thiscost['costname']==$object_rights['cost']){
                          echo "selected";
                          }
                          echo ">".$thiscost['costname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>  
   <tr>
              <td>Copyrights and Other Restrictions</td>
              <td valign="top">
                <select name="newcopyright" size="1">
                  <?php
                      $copyright_array=get_copyright();
                      foreach($copyright_array as $thiscopyright){
                          echo "<option value=\"".$thiscopyright['copyrightname']."\"";
                          if($thiscopyright['copyrightname']==$object_rights['copyrights_and_other_res']){
                          echo "selected";
                          }
                          echo ">".$thiscopyright['copyrightname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr> 
                                             
   </table>
   <div>
   <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
   <label for="userfile">Attach a file:</lable>
   <input type="file" name="userfile" id="userfile"/>
   </div>
   <input type="submit" value="Update Object">   
   </form>
   
   <p>
   <form method="post" action="delete_object.php">
   <input type="hidden" name="objid" value="<?php echo $objid ?>" />
   <input type="submit" value="Delete object" />
   </form>
   </p>
   
<?php
}


function display_search_form(){
?>
<form  method="post" action="search_result.php"> 
<input  type="text" name="title"> 
<input  type="submit" name="submit" value="Search"> 
</form> 
<p><a href="advanced_search.php">Advanced Search</a></p>
<p><a href="file_content_search.php">Content Search</a></p>
<?php
}

function display_advanced_search_form(){
?>
  <form method="post" action="advanced_search_result.php">
  <table>
    <tr>
      <td colspan="2">Type in your search conditions:</td>
    <tr>
      <td>Title:</td>
      <td><input type="text" name="title"/></td></tr>
    <tr>
      <td>Author:</td>
      <td><input type="text" name="author"/></td></tr>
    <tr>
      <td>Discipline:</td>
      <td><input type="text" name="discipline"/></td></tr>
    <tr>
      <td>Language:</td>
      <td><input type="text" name="language"/></td></tr>
    <tr>
      <td>Keyword:</td>
      <td><input type="text" name="keyword"/></td></tr> 
    
    <tr>
      <td colspan="2" align="center">
      <input type="submit" name="submit" value="Search"/></td></tr>
   </table></form>
  
<?php
}

function display_content_search_form(){
?>
<h1>Search files for a word:</h1>
<form method="post" action="file_content_search_result.php">
    <input type="text" name="content">
    <input type="submit" name="submit" value="Search">
</form>
<?php
}

function display_file_page($objid){

$url="view_file_content.php?objid=".$objid;
$title='View this learning object';
do_html_url($url, $title);

}

function display_content_search_result(){

echo "the file exists";
}

?>

<?php

require_once('repository_fns.php');

function do_html_header($title, $cssfile) {
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="My Personal Learning Objects Repository">
    <title><?php echo $title;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/<?php echo $cssfile; ?>">
    </head>
  
<body>
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">lupersonallms.com</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="browse.php">Browse</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  
    <div class="jumbotron">
      <div class="container">
        <h1>My Learning Objects Repository</h1>
        <p>Welcome! Lupersonallms.com is a online learning platform which enables users to share, manage and use educational resources. Do not hesitate to share with the community!</p>   
      </div>
    </div>
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

<hr>

</div>  
<?php
}

function do_html_header_index(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
}

function do_page_content_index($first_id, $first_title, $first_discipline, $first_language, $second_id, $second_title, $second_discipline, $second_language, $third_id, $third_title, $third_discipline, $third_language){
?>
<div class="container theme-showcase" role="main">
  <div class="jumbotron">
    
      <h2>My Learning Objects Repository</h2>
      <p>Welcome! Lupersonallms.com is a online learning platform which enables users to share, manage and use educational resources. Do not hesitate to share with the community!</p>   
   
  </div>
  
  <div class="page-header">
  <h2>Recently Added Learning Objects</h2>
  </div>
 <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2><?php echo $first_title; ?></h2>
        <p>title: <?php echo $first_title; ?></p>
        <p>discipline: <?php echo $first_discipline; ?></p>
        <p>language: <?php echo $first_language; ?></p>
        <p><a class="btn btn-default" href="show_object.php?objid=<?php echo $first_id; ?>" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><?php echo $second_title; ?></h2>
        <p>title: <?php echo $second_title; ?></p>
        <p>discipline: <?php echo $second_discipline; ?></p>
        <p>language: <?php echo $second_language; ?></p>
        <p><a class="btn btn-default" href="show_object.php?objid=<?php echo $second_id; ?>" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2><?php echo $third_title; ?></h2>
        <p>title: <?php echo $third_title; ?></p>
        <p>discipline: <?php echo $third_discipline; ?></p>
        <p>language: <?php echo $third_language; ?></p>
        <p><a class="btn btn-default" href="show_object.php?objid=<?php echo $third_id; ?>" role="button">View details &raquo;</a></p>
      </div>
    </div>
  </div>
</div>  

<?php
}

function do_html_header_browse(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li class="active"><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
<?php
}

function do_page_content_browse($disc_array){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Disciplines</h2>
  <p>Here are the currently available academic disciplines in my LOR. Please select one to continue.</p>
</div>
  
<?php 
  if(!is_array($disc_array)){
    echo "<p>No discipline currently available</p>";
  return;
  }
  echo "<ul>";
  foreach($disc_array as $row) {
    $url="show_disc.php?discname=".($row['discname']);
    $title=$row['discname'];
    echo "<li>";
    do_html_url($url, $title);
    echo "</li>";
  }  
  echo"</ul>";
  echo"<hr />";
?>
     
</div>
<?php
}

function do_page_content_show_disc($object_array){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Learning Objects Under Your selected Discipline</h2>
</div>

<?php 
  if(!is_array($object_array)) {
    echo "<p>No objects currently available under this discipline</p>";
  return;
  }
  echo "<ul>";
  foreach($object_array as $row) {
  $url="show_object.php?objid=".($row['objid']);
  $title=$row['title'];
  echo "<li>";
  do_html_url($url, $title);
  echo "</li>";
  }
  echo"</ul>";
  echo"<hr />";

?>

</div>

<?php
}

function do_page_content_show_object($object_general, $object_rights, $object_lifecycle, $object_tech, $result_array){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Learning Object Metadata</h2>
</div>

<?php 
  display_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech);
?>

<div class="page-header">
  <h2>Files Related To This Learning Object</h2>
</div> 

<?php 
  display_locations($result_array); 
?>

</div>

<?php
}

function do_html_header_view_file_content(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/view_file_content.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li class="active"><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<?php
}

?>

<?php

require_once('repository_fns.php');

function do_html_header_login(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li class="active"><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<?php
}

function do_page_content_login(){
?>
<div class="container theme-showcase" role="main">

      <form class="form-signin" method="post" action="member.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required autofocus>
        <p></p>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p></p>
        <p><a href="#">Not a member?</a></p>

      </form>

    </div> 
<?php
}

function do_html_header_member(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li  class="active"><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
}

function do_page_content_member($current_user){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Member Page</h2>
  <p>You are logged in as <?php echo $current_user; ?>.</p>
  <p>On this page you can upload a new learning object, modify your learning objects, or change your password.</p>
</div>
  
<?php 
  display_user_menu();
?>
     
</div>
<?php
}

function do_html_header_error_page(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
}

function do_error_message_cannot_login(){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>You could not be logged in.</h2>
  <p>You must be logged in to view this page.</p>
</div>
<?php
  do_html_url('login.php', 'Retry');
  
 ?>
</div>
<?php
}

function do_page_content_add_object(){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <h2>Add a New Learning Object</h2>
  <p>Please fill in the metadata and upload a file related to this learning object.</p>
</div>
  
<?php 
  display_addobj_form(); 
?>
     
</div>
<?php
}

function do_html_header_contact(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
}

function do_page_content_contact() {
?>

<div class="page-header">
  <h2></h2>
</div>
  
<div class="container theme-showcase" role="main">
  <div class="jumbotron">
    
  <p>My email address is ... Feel free to contact me!</p>   
   
  </div>
  
</div>
<?php
}

function do_html_footer(){
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
<?php
}

function do_html_heading($heading){
?>
  <h2><?php echo $heading; ?></h2>
<?php
}

function do_html_url($url, $name){
?>
 <br /><a href="<?php echo $url; ?>"><?php echo $name;?></a><br />
<?php
}

function display_user_menu() {
?>
<hr />
<a href="member.php">Home</a> &nbsp;|&nbsp;
<a href="add_obj_form.php">Add new object</a> &nbsp;|&nbsp;
<a href="change_password_form.php">Change password</a>
<br />
<a href="edit_my_objects.php">Edit my objects</a> &nbsp;|&nbsp;
<a href="logout.php">Logout</a>
<hr />

<?php
}

function display_forgot_form() {
  
?>
   <br />
   <form action="forgot_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Enter your username</td>
       <td><input type="text" name="username" size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan=2 align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}
?>

<?php

require_once('repository_fns.php');

function display_addobj_form() {
?>
    <form method="post" action="add_new_obj.php" enctype="multipart/form-data">
      <div id="general">
      <h2>General</h2>
      <table>
        <colgroup>
          <col span="1" style="width: 30%;">
          <col span="1" style="width: 70%;">
        </colgroup>
        <tr>
          <td>Title</td>
          <td valign="top"><input type="text" name="title" size="85" maxlength="100"/ required></td></tr>
        <tr>
              <td>Discipline</td>
              <td valign="top">
                <select name="discipline" size="1">
                  <option value="biology">Biology</option>
                  <option value="business">Business</option>
                  <option value="chemistry">Chemistry</option>
                  <option value="computerscience">Computer Science</option>
                  <option value="economics">Economics</option>
                  <option value="education">Education</option>
                  <option value="engineering">Engineering</option>
                  <option value="geology">Geology</option>
                  <option value="history">History</option>
                  <option value="mathematics">Mathematics</option>
                  <option value="physics">Physics</option>
                  <option value="phychology">Phychology</option>
                  <option value="sociology">Sociology</option>
                  </select>
              </td></tr>
        <tr>
          <td>Language</td>
          <td valign="top">
            <select name="language" size="1">
            <option value="English">English</option>
            <option value="Chinese">Chinese</option>
            <option value="French">French</option>
            <option value="German">German</option>
            </select>
          </td></tr>
        <tr>
          <td>Keyword</td>
          <td valign="top"><input type="text" name="keyword" size="85" maxlength="100"/ required></td></tr>
        <tr>
          <td>Structure</td>
          <td valign="top">
            <select name="structure" size="1">
            <option value="atomic">atomic</option>
            <option value="collection">collection</option>
            <option value="networked">networked</option>
            <option value="hierarchical">hierarchical</option>
            <option value="linear">linear</option>
            </select>
          </td></tr>
        <tr>
          <td>Aggregation Level</td>
          <td valign="top">
            <select name="aggrelvl" size="1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select>
          </td></tr>
        <tr>
          <td>Description</td>
          <td valign="top">
              <textarea cols="20" name="rightdescription" rows="5" style="margin: 2px; height: 88px; width:              535px;"></textarea>
          </td></tr>
      </table>
      </div>
      
      <div id="lifecycle">
      <h2>Life Cycle</h2>
      <table>
        <colgroup>
          <col span="1" style="width: 30%;">
          <col span="1" style="width: 70%;">
        </colgroup>
        <tr>
          <td>Version</td>
          <td valign="top"><input type="text" name="version" size="85" maxlength="100"/ required></td></tr>
        <tr>
          <td>Status</td>
          <td valign="top">
          <select name="status" size="1">
            <option value="draft">draft</option>
            <option value="final">final</option>
            <option value="revised">revised</option>
            <option value="unavailable">unavailable</option>
            </select>
          </td></tr>
      </table>
      </div>
      
      <div id="educational">
      <h2>Educational</h2>
      <table>
        <colgroup>
          <col span="1" style="width: 30%;">
          <col span="1" style="width: 70%;">
        </colgroup>
        <tr>
          <td>Interactivity Type</td>
          <td valign="top">
          <select name="interacttype" size="1">
            <option value="active">active</option>
            <option value="expositive">expositive</option>
            <option value="mixed">mixed</option>
            </select>
          </td></tr>
        <tr>
          <td>Learning Resource Type</td>
          <td valign="top">
          <select name="resourcetype" size="1">
            <option value="exercise">exercise</option>
            <option value="simulation">simulation</option>
            <option value="questionnaire">questionnaire</option>
            <option value="diagram">diagram</option>
            <option value="figure">figure</option>
            <option value="graph">graph</option>
            <option value="index">index</option>
            <option value="slide">slide</option>
            <option value="table">table</option>
            <option value="narrative text">narrative text</option>
            <option value="exam">exam</option>
            <option value="experiment">experiment</option>
            <option value="problem statement">problem statement</option>
            <option value="self assessment">self assessment</option>
            <option value="lecture">lecture</option></select>
         </td></tr>
         <tr>
           <td>Interactivity Level</td>
           <td valign="top">
           <select name="interactlvl" size="1">
             <option value="very low">very low</option>
             <option value="low">low</option>
             <option value="medium">medium</option>
             <option value="high">high</option>
             <option value="very high">very high</option></select>
           </td></tr>  
         <tr>
           <td>Intended End User Role</td>
           <td valign="top">
           <select name="enduserrole" size="1">
             <option value="teacher">teacher</option>
             <option value="author">author</option>
             <option value="learner">learner</option>
             <option value="manager">manager</option></select>
           </td></tr> 
          <tr>
            <td>Typical Learning Time</td>
            <td valign="top">
            <input maxlength="100" name="learningtime" size="85" type="text"/ required>
          </td></tr> 
          </table>
          </div>
          
          <div id="rights">
          <h2>Rights</h2>
          <table>
           <colgroup>
              <col span="1" style="width: 33.5%;">
              <col span="1" style="width: 70%;">
           </colgroup>
           <tr>
              <td>Cost</td>
              <td valign="top">
              <select name="cost" size="1">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
              </td></tr>
            <tr>
              <td>Copyrights</td>
              <td valign="top">
              <select name="copyright" size="1">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
              </td></tr>
            <tr>
              <td>Description</td>
              <td valign="top">
              <textarea cols="20" name="rightdescription" rows="5" style="margin: 2px; height: 88px; width: 535px;"></textarea>
              </td></tr>
          </table>
          </div>
          
          
          <div>
          <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
          <label for="userfile">Attach a file:</lable>
          <input type="file" name="userfile" id="userfile"/>
          
          </div>
          <div class="page-header">
          <p></p>
          </div>
          <button class="btn btn-primary" type="submit">Add Object</button>
         
          </form>
          
          
<?php
}

function display_edit_discipline($disc_array){
if(!is_array($disc_array)){
echo "<p>No discipline currently available</p>";
return;
}
echo "<ul>";
foreach($disc_array as $row) {
$url="show_edit_disc.php?discid=".($row['discid']);
$title=$row['discname'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

function display_objects($object_array) {
if(!is_array($object_array)){
echo "<p>No objects currently available under this discipline</p>";
return;
}
echo "<ul>";
foreach($object_array as $row) {
$url="show_object.php?objid=".($row['objid']);
$title=$row['title'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

function display_locations($result_array) {
if(!is_array($result_array)){
echo "<p>No objects currently available under this discipline</p>";
return;
}
echo "<ul>";
foreach($result_array as $row) {
$url="view_file_content.php?location=".($row['location']);
$title=$row['location'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

function display_this_user_objects($object_array){

if(!is_array($object_array)){
echo "<p>You have not uploaded anything.</p>";
return;
}
echo "<ul>";
foreach($object_array as $row) {
$url="show_this_user_object.php?objid=".($row['objid']);
$title=$row['title'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";

}

function display_edit_objects($object_array) {
if(!is_array($object_array)){
echo "<p>No objects currently available under this discipline</p>";
return;
}
echo "<ul>";
foreach($object_array as $row) {
$url="show_edit_object.php?objid=".($row['objid']);
$title=$row['title'];
echo "<li>";
do_html_url($url, $title);
echo "</li>";
}
echo"</ul>";
echo"<hr />";
}

?>

<?php

require_once('repository_fns.php');

function display_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech){
if((is_array($object_general))&&(is_array($object_rights))&&(is_array($object_lifecycle))){
echo "<table><tr>";
echo "<td><ul>";
echo "<li><strong>Title:</strong>";
echo $object_general['title'];
echo "</li><li><strong>Author:</strong> ";
echo $object_general['author'];
echo "</li><li><strong>Discipline:</strong> ";
echo $object_general['discipline'];
echo "</li><li><strong>Language:</strong> ";
echo $object_general['language'];
echo "</li><li><strong>Keyword:</strong> ";
echo $object_general['keyword'];
echo "</li><li><strong>Structure:</strong> ";
echo $object_general['structure'];
echo "</li><li><strong>Aggregation Level:</strong> ";
echo $object_general['aggregation_level'];
echo "</li><li><strong>Version:</strong> ";
echo $object_lifecycle['version'];
echo "</li><li><strong>Status:</strong> ";
echo $object_lifecycle['status'];
echo "</li><li><strong>Interactivity Type:</strong> ";
echo $object_general['interactivity_type'];
echo "</li><li><strong>Learning Resource Type:</strong> ";
echo $object_general['learning_res_type'];
echo "</li><li><strong>Interactivity Level:</strong> ";
echo $object_general['interactivity_level'];
echo "</li><li><strong>Intended End User Role:</strong> ";
echo $object_general['intended_end_user_role'];
echo "</li><li><strong>Typical Learning Time:</strong> ";
echo $object_general['typical_learning_time'];
echo "</li><li><strong>Cost:</strong> ";
echo $object_rights['cost'];
echo "</li><li><strong>Copyrights and Other Restrictions:</strong> ";
echo $object_rights['copyrights_and_other_res'];
echo "</li></ul></td></tr></table>";

}else{
echo "<p>The details of this object cannot be displayed at this time.</p>";
}
echo "<hr />";
}

function display_edit_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech){
if((is_array($object_general))&&(is_array($object_rights))&&(is_array($object_lifecycle))){
echo "<table><tr>";
echo "<td><ul>";
echo "<li><strong>Title:</strong>";
echo $object_general['title'];
echo "</li><li><strong>Author:</strong> ";
echo $object_general['author'];
echo "</li><li><strong>Discipline:</strong> ";
echo $object_general['discipline'];
echo "</li><li><strong>Language:</strong> ";
echo $object_general['language'];
echo "</li><li><strong>Keyword:</strong> ";
echo $object_general['keyword'];
echo "</li><li><strong>Structure:</strong> ";
echo $object_general['structure'];
echo "</li><li><strong>Aggregation Level:</strong> ";
echo $object_general['aggregation_level'];
echo "</li><li><strong>Version:</strong> ";
echo $object_lifecycle['version'];
echo "</li><li><strong>Status:</strong> ";
echo $object_lifecycle['status'];
echo "</li><li><strong>Interactivity Type:</strong> ";
echo $object_general['interactivity_type'];
echo "</li><li><strong>Learning Resource Type:</strong> ";
echo $object_general['learning_res_type'];
echo "</li><li><strong>Interactivity Level:</strong> ";
echo $object_general['interactivity_level'];
echo "</li><li><strong>Intended End User Role:</strong> ";
echo $object_general['intended_end_user_role'];
echo "</li><li><strong>Typical Learning Time:</strong> ";
echo $object_general['typical_learning_time'];
echo "</li><li><strong>Cost:</strong> ";
echo $object_rights['cost'];
echo "</li><li><strong>Copyrights and Other Restrictions:</strong> ";
echo $object_rights['copyrights_and_other_res'];
echo "</li></ul></td></tr></table>";
}else{
echo "<p>The details of this object cannot be displayed at this time.</p>";
}
echo "<hr />";
}

function display_user_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech){
if((is_array($object_general))&&(is_array($object_rights))&&(is_array($object_lifecycle))){
echo "<table><tr>";
echo "<td><ul>";
echo "<li><strong>Title:</strong>";
echo $object_general['title'];
echo "</li><li><strong>Author:</strong> ";
echo $object_general['author'];
echo "</li><li><strong>Discipline:</strong> ";
echo $object_general['discipline'];
echo "</li><li><strong>Language:</strong> ";
echo $object_general['language'];
echo "</li><li><strong>Keyword:</strong> ";
echo $object_general['keyword'];
echo "</li><li><strong>Structure:</strong> ";
echo $object_general['structure'];
echo "</li><li><strong>Aggregation Level:</strong> ";
echo $object_general['aggregation_level'];
echo "</li><li><strong>Version:</strong> ";
echo $object_lifecycle['version'];
echo "</li><li><strong>Status:</strong> ";
echo $object_lifecycle['status'];
echo "</li><li><strong>Interactivity Type:</strong> ";
echo $object_general['interactivity_type'];
echo "</li><li><strong>Learning Resource Type:</strong> ";
echo $object_general['learning_res_type'];
echo "</li><li><strong>Interactivity Level:</strong> ";
echo $object_general['interactivity_level'];
echo "</li><li><strong>Intended End User Role:</strong> ";
echo $object_general['intended_end_user_role'];
echo "</li><li><strong>Typical Learning Time:</strong> ";
echo $object_general['typical_learning_time'];
echo "</li><li><strong>Cost:</strong> ";
echo $object_rights['cost'];
echo "</li><li><strong>Copyrights and Other Restrictions:</strong> ";
echo $object_rights['copyrights_and_other_res'];
echo "</li></ul></td></tr></table>";

}else{
echo "<p>The details of this object cannot be displayed at this time.</p>";
}
echo "<hr />";
}

function display_edit_form($objid, $object_general, $object_rights, $object_lifecycle, $object_tech){
echo $object_general['title'];
?>
  <form method="post" action="edit_this_metadata.php">
  <table>
    <tr>
      <td>Hidden:</td>
      <td><input type="hidden" name="objid" value="<?php echo $objid ?>" /></td></tr>
    <tr>
      <td>Title:</td>
      <td><input type="text" name="newtitle" value="<?php echo $object_general['title'] ?>" /></td></tr>
    <tr>
      <td>Author:</td>
      <td><input type="text" name="newauthor" value="<?php echo $object_general['author'] ?>"/></td></tr>
     <tr>
              <td>Discipline</td>
              <td valign="top">
                <select name="newdiscipline" size="1">
                  <?php
                      $disc_array=get_discipline();
                      foreach($disc_array as $thisdisc){
                          echo "<option value=\"".$thisdisc['discname']."\"";
                          if($thisdisc['discname']==$object_general['discipline']){
                          echo "selected";
                          }
                          echo ">".$thisdisc['discname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
         <tr>
              <td>Language</td>
              <td valign="top">
                <select name="newlanguage" size="1">
                  <?php
                      $lang_array=get_language();
                      foreach($lang_array as $thislang){
                          echo "<option value=\"".$thislang['langname']."\"";
                          if($thislang['langname']==$object_general['language']){
                          echo "selected";
                          }
                          echo ">".$thislang['langname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
    <tr>
      <td>Keyword:</td>
      <td><input type="text" name="newkeyword" value="<?php echo $object_general['keyword'] ?>" /></td></tr> 
    <tr>
              <td>Structure</td>
              <td valign="top">
                <select name="newstructure" size="1">
                  <?php
                      $struct_array=get_structure();
                      foreach($struct_array as $thisstruct){
                          echo "<option value=\"".$thisstruct['structname']."\"";
                          if($thisstruct['structname']==$object_general['structure']){
                          echo "selected";
                          }
                          echo ">".$thisstruct['structname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
     <tr>
              <td>Aggregation Level</td>
              <td valign="top">
                <select name="newaggrelvl" size="1">
                  <?php
                      $aggrelvl_array=get_aggrelvl();
                      foreach($aggrelvl_array as $thisaggrelvl){
                          echo "<option value=\"".$thisaggrelvl['aggrelvlname']."\"";
                          if($thisaggrelvl['aggrelvlname']==$object_general['aggregation_level']){
                          echo "selected";
                          }
                          echo ">".$thisaggrelvl['aggrelvlname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
    <tr>
      <td>Version:</td>
      <td><input type="text" name="newversion" value="<?php echo $object_lifecycle['version'] ?>" /></td></tr>
     <tr>
              <td>Status</td>
              <td valign="top">
                <select name="newstatus" size="1">
                  <?php
                      $status_array=get_status();
                      foreach($status_array as $thisstatus){
                          echo "<option value=\"".$thisstatus['statusname']."\"";
                          if($thisstatus['statusname']==$object_lifecycle['status']){
                          echo "selected";
                          }
                          echo ">".$thisstatus['statusname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr> 
    <tr>
              <td>Interactivity Type</td>
              <td valign="top">
                <select name="newinteracttype" size="1">
                  <?php
                      $intertype_array=get_intertype();
                      foreach($intertype_array as $thisintertype){
                          echo "<option value=\"".$thisintertype['intertypename']."\"";
                          if($thisintertype['intertypename']==$object_general['interactivity_type']){
                          echo "selected";
                          }
                          echo ">".$thisintertype['intertypename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>            
    <tr>
              <td>Learning Resource Type</td>
              <td valign="top">
                <select name="newresourcetype" size="1">
                  <?php
                      $resourcetype_array=get_resourcetype();
                      foreach($resourcetype_array as $thisresourcetype){
                          echo "<option value=\"".$thisresourcetype['resourcetypename']."\"";
                          if($thisresourcetype['resourcetypename']==$object_general['learning_res_type']){
                          echo "selected";
                          }
                          echo ">".$thisresourcetype['resourcetypename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>    
   <tr>
              <td>Interactivity Level</td>
              <td valign="top">
                <select name="newinteractlvl" size="1">
                  <?php
                      $interactlvl_array=get_interactlvl();
                      foreach($interactlvl_array as $thisinteractlvl){
                          echo "<option value=\"".$thisinteractlvl['interactlvlname']."\"";
                          if($thisinteractlvl['interactlvlname']==$object_general['interactivity_level']){
                          echo "selected";
                          }
                          echo ">".$thisinteractlvl['interactlvlname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>    
   <tr>
              <td>Intended End User Role</td>
              <td valign="top">
                <select name="newenduserrole" size="1">
                  <?php
                      $enduserrole_array=get_enduserrole();
                      foreach($enduserrole_array as $thisenduserrole){
                          echo "<option value=\"".$thisenduserrole['enduserrolename']."\"";
                          if($thisenduserrole['enduserrolename']==$object_general['intended_end_user_role']){
                          echo "selected";
                          }
                          echo ">".$thisenduserrole['enduserrolename']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>
   <tr>
      <td>Typical Learning Time:</td>
      <td><input type="text" name="newlearningtime" value="<?php echo $object_general['typical_learning_time'] ?>" /></td></tr>        
   <tr>
              <td>Cost</td>
              <td valign="top">
                <select name="newcost" size="1">
                  <?php
                      $cost_array=get_cost();
                      foreach($cost_array as $thiscost){
                          echo "<option value=\"".$thiscost['costname']."\"";
                          if($thiscost['costname']==$object_rights['cost']){
                          echo "selected";
                          }
                          echo ">".$thiscost['costname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr>  
   <tr>
              <td>Copyrights and Other Restrictions</td>
              <td valign="top">
                <select name="newcopyright" size="1">
                  <?php
                      $copyright_array=get_copyright();
                      foreach($copyright_array as $thiscopyright){
                          echo "<option value=\"".$thiscopyright['copyrightname']."\"";
                          if($thiscopyright['copyrightname']==$object_rights['copyrights_and_other_res']){
                          echo "selected";
                          }
                          echo ">".$thiscopyright['copyrightname']."</option>";
                      }
                      ?>
                  </select>
              </td></tr> 
                                             
   </table>
   <div class="page-header">
   <p></p>
   </div>
   <button class="btn btn-primary" type="submit">Update Object</button>
   </form>
   
   
 <?php
}
?>

<?php

require_once('repository_fns.php');

function display_edit_file_form($objid, $object_general, $object_rights, $object_lifecycle, $object_tech){
echo $object_general['title'];
?>
  <form method="post" action="edit_this_object_file.php" enctype="multipart/form-data">
  
  <div>
   <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
   <label for="userfile">Attach a file:</lable>
   <input type="file" name="userfile" id="userfile"/>
   </div>
  <div class="page-header">
   <p></p>
   </div>
   <button class="btn btn-lg btn-primary btn-block" type="submit">Update Object</button>
   
   </form>
   
   <p>
   <form method="post" action="delete_object.php">
   <input type="hidden" name="objid" value="<?php echo $objid ?>" />
   <p></p>
   <button class="btn btn-lg btn-primary btn-block" type="submit">Delete Object</button>
   
   </form>
   </p>
   
<?php
}

function display_edit_and_add_related_file_form($objid, $object_general, $object_rights, $object_lifecycle, $object_tech){
echo $object_general['title'];
?>
  <form method="post" action="edit_this_and_add_related_file.php" enctype="multipart/form-data">
  
   <div>
   <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
   <label for="userfile">Attach a file:</lable>
   <input type="file" name="userfile" id="userfile"/>
   </div>
   
   <div class="page-header">
   <p></p>
   </div>
   <button class="btn btn-lg btn-primary btn-block" type="submit">Update Object</button>
   </form>
   
   <p>
   <form method="post" action="delete_object.php">
   <input type="hidden" name="objid" value="<?php echo $objid ?>" />
   <p></p>
   <button class="btn btn-lg btn-primary btn-block" type="submit">Delete Object</button>
   </form>
   </p>
   
<?php
}
?>

<?php

require_once('repository_fns.php');

function do_page_content_edit_my_objects($object_array){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <p>Here are the learning objects you uploaded. Feel free to edit them.</p>
</div>
  
<?php 
  display_this_user_objects($object_array);
?>
     
</div>
<?php
}

function do_page_content_show_this_user_object($object_general, $object_rights, $object_lifecycle, $object_tech, $url1, $url2, $url3, $result_array){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <p>Select from the following options. You may edit the metadata, replace a file, add another related file, delete a file or delete this learning object.</p>
</div>
  
<?php 
  display_user_object_metadata($object_general, $object_rights, $object_lifecycle, $object_tech);
?>
  <p><a class="btn btn-primary" href="<?php echo $url1; ?>" >Edit Metadata &raquo;</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <a class="btn btn-primary" href="<?php echo $url2; ?>" >Add a Related File &raquo;</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <a class="btn btn-primary" href="<?php echo $url3; ?>" >Delete This Object &raquo;</a></p>
     
  <div class="page-header">
  <p>Files Related to This Learning Object:</p>
  </div>
<?php
  if(!is_array($result_array)){
  echo "<p>No objects currently available</p>";
  return;
  }
  echo "<ul>";
  
  foreach($result_array as $row) {
  $url="view_file_content.php?location=".($row['location']);
  $title=$row['location'];
  $url_update="update_object_file.php?location=".($row['location']);
  $url_delete="delete_object_file.php?location=".($row['location']);
?>
  <li>
  <p>
  <a href="<?php echo $url; ?>"><?php echo $title; ?></a>&nbsp&nbsp&nbsp&nbsp
  <a class="btn btn-default" href="<?php echo $url_update; ?>" >Update</a>&nbsp&nbsp&nbsp&nbsp
  <a class="btn btn-default" href="<?php echo $url_delete; ?>" >Delete</a>
  </p>
  
<?php
  echo "</li>";
  }
  echo"</ul>";
  echo"<hr />";
?>
     
</div>
<?php
}

function do_page_content_edit_metadata($objid, $object_general, $object_rights, $object_lifecycle, $object_tech){
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <p>Fill in your new metadata.</p>
</div>
  
<?php 
  display_edit_form($objid, $object_general, $object_rights, $object_lifecycle, $object_tech);
?>
     
</div>
<?php
}

function do_page_content_update_object_file($location){
$url="update_this_object_file.php?location=".$location;
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <p>Select a new file to replace the previous one.</p>
</div>

<form method="post" action="<?php echo $url; ?>" enctype="multipart/form-data">
  
  <div>
   <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
   <label for="userfile">Attach a file:</lable>
   <input type="file" name="userfile" id="userfile"/>
   </div>
  <div class="page-header">
   <p></p>
   </div>
   <button class="btn btn-primary" type="submit">Update Object</button>
   
</form>

</div>
<?php
}

function do_page_content_add_related_file($objid){
$url="add_this_related_file.php?objid=".$objid;
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <p>Select a file to upload.</p>
</div>
  
<form method="post" action=<?php echo $url; ?> enctype="multipart/form-data">
  
   <div>
   <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
   <label for="userfile">Attach a file:</lable>
   <input type="file" name="userfile" id="userfile"/>
   </div>
   
   <div class="page-header">
   <p></p>
   </div>
   <button class="btn btn-primary" type="submit">Add a Related File</button>
   
   </form>
   
</div>
<?php
}

function do_page_content_delete_object_file($location){
$url="delete_this_object_file.php?location=".$location;
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <p>Are you sure you want to delete this file?</p>
</div>
  
<a class="btn btn-default" href="<?php echo $url; ?>" >Yes</a>&nbsp&nbsp&nbsp&nbsp
<a class="btn btn-default" href="member.php">No</a>
   
</div>
<?php
}

function do_page_content_delete_object($objid){
$url="delete_this_object.php?objid=".$objid;
?>
<div class="container theme-showcase" role="main">

<div class="page-header">
  <p>Are you sure you want to delete this learning object?</p>
</div>
  
<a class="btn btn-default" href="<?php echo $url; ?>" >Yes</a>&nbsp&nbsp&nbsp&nbsp
<a class="btn btn-default" href="member.php">No</a>
   
</div>
<?php
}

function do_page_content_change_password_form(){
?>
<div class="container theme-showcase" role="main">

      <form class="form-signin" method="post" action="change_password.php">
        <h2 class="form-signin-heading"></h2>
        <label for="oldPassword" class="sr-only">Old Password</label>
        <input type="password" id="oldPassword" class="form-control" name="old_password" placeholder="Old Password" required autofocus>
        <label for="newPassword" class="sr-only">New Password</label>
        <input type="password" id="newPassword" class="form-control" name="new_password" placeholder="New Password" required>
        <label for="confirmnewPassword" class="sr-only">Confirm New Password</label>
        <input type="password" id="confirmnewPassword" class="form-control" name="new_password2" placeholder="Confirm New Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
      </form>

    </div> 
<?php
}

function do_html_header_search(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Learning Objects Repository">
    
    <title>Personal Learning Objects Repository</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    
  </head>
  
  <body role="document">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">lupersonallms.com</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="search.php">Search</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<?php
}

function do_page_content_search(){
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
  <p>Three types of search are provided in my LOR, you may search with a title. Advanced Search is a metadata search. Or, you can search the content of files with Content Search.</p>
  </div>
  
  <form class="form-signin" method="post" action="search_result.php">
        <h2 class="form-signin-heading">Please enter a title:</h2>
        <label for="inputTitle" class="sr-only">Title</label>
        <input type="text" id="inputTitle" class="form-control" name="title" placeholder="Title" required autofocus>
        <p></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Search</button>
        <p></p>
        <p></p>
        <p><a href="advanced_search.php">Advanced Search</a></p>
        <p></p>
        <p><a href="file_content_search.php">Content Search</a></p>
   </form>

    </div> 
<?php
}

function do_page_content_search_result($result_array) {
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
    <p></p>
  </div>
<?php 
   display_objects($result_array);
?>

</div> 

<?php
}

function do_page_content_advanced_search() {
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
  <p>Three types of search are provided in my LOR, you may search with a title. Advanced Search is a metadata search. Or, you can search the content of files with Content Search.</p>
  </div>
  
  <form class="form-signin" method="post" action="advanced_search_result.php">
        <h2 class="form-signin-heading">Type in your serach conditions:</h2>
        <label for="inputTitle" class="sr-only">Title</label>
        <input type="text" id="inputTitle" class="form-control" name="title" placeholder="Title" autofocus>
        <p></p>
        <label for="inputAuthor" class="sr-only">Author</label>
        <input type="text" id="inputAuthor" class="form-control" name="author" placeholder="Author" autofocus>
        <p></p>
        <label for="inputDiscipline" class="sr-only">Discipline</label>
        <input type="text" id="inputDiscipline" class="form-control" name="discipline" placeholder="Discipline" autofocus>
        <p></p>
        <label for="inputLanguage" class="sr-only">Language</label>
        <input type="text" id="inputLanguage" class="form-control" name="language" placeholder="Language" autofocus>
        <p></p>
        <label for="inputKeyword" class="sr-only">Keyword</label>
        <input type="text" id="inputTitle" class="form-control" name="keyword" placeholder="Keyword" autofocus>
        <p></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Search</button>
        <p></p>
        <p></p>
        <p><a href="search.php">Basic Search</a></p>
        <p></p>
        <p><a href="file_content_search.php">Content Search</a></p>
   </form>

    </div> 
<?php
}

function do_page_content_file_content_search() {
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
  <p>Three types of search are provided in my LOR, you may search with a title. Advanced Search is a metadata search. Or, you can search the content of files with Content Search.</p>
  </div>
  
  <form class="form-signin" method="post" action="file_content_search_result.php">
        <h2 class="form-signin-heading">Please enter a word:</h2>
        <label for="inputContent" class="sr-only">Content</label>
        <input type="text" id="inputContent" class="form-control" name="content" placeholder="Enter a word" required autofocus>
        <p></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Search</button>
        <p></p>
        <p></p>
        <p><a href="search.php">Basic Search</a></p>
        <p></p>
        <p><a href="advanced_search.php">Advanced Search</a></p>
   </form>

    </div> 
<?php
}

function do_page_content_register_form() {
?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
  
  </div>
  
  <form class="form-signin" method="post" action="register_new.php">
        <h2 class="form-signin-heading">New User Registration</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Your Username" required autofocus>
        <p></p>
        <label for="inputFirstname" class="sr-only">Firstname</label>
        <input type="text" id="inputFirstname" class="form-control" name="firstname" placeholder="Your First Name" required autofocus>
        <p></p>
        <label for="inputLastname" class="sr-only">Lastname</label>
        <input type="text" id="inputLastname" class="form-control" name="lastname" placeholder="Your Last Name" required autofocus>
        <p></p>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required autofocus>
        <p></p>
        <label for="inputConfirmpassword" class="sr-only">ConfirmPassword</label>
        <input type="password" id="inputConfirmpassword" class="form-control" name="password2" placeholder="Confirm Password" required autofocus>
        <p></p>
        <label for="inputEmailaddress" class="sr-only">EmailAddress</label>
        <input type="email" id="inputEmailaddress" class="form-control" name="email" placeholder="Your Email Address" required autofocus>
        <p></p>
        <label for="inputInstitute" class="sr-only">Institute</label>
        <input type="text" id="inputInstitute" class="form-control" name="institute" placeholder="Your Institute" required autofocus>
        <p></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        
      
        
        
   </form>

    </div> 

<?php
}

?>
