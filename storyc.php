
<?php

$id=$_GET['id'];
$client = new MongoClient();

$db = $client->blog;
$id= new MongoId($id);
 $row = $db->post->findOne(array("_id"=>$id));

?>

<head>
<style>

/* style for word "Comments" above the list of comments */
div.word_Comments {
	padding-bottom:10px !important;
	font-family:Arial,Helvetica Neue,Helvetica,sans-serif !important;
	color:#333333 !important;
	font-size:18px !important;
	font-style:normal !important;
	font-weight:normal !important;	
}

/* comment listing and comments form style */
.comments_wrapper {
	background-color: !important;
	padding:1 % !important;		
		border-top:solid 1px #dddddd !important;
		
	 
	border-bottom: 0 !important;
		
	 
	border-left: 0 !important;
		
	 
	border-right: 0 !important;
	}
	table{
		marginn-left:100px;
		marginn-right:50px;
		position: absolute;
	}
	
table.comments_wrapper {
	width: 100% !important;
}
table.comments_wrapper tr {
	background: none !important;
}
table.comments_wrapper td {
	padding: 8px 6px;
	margin:0 !important;
	border: 0 !important;
}
/* "Leave a Comment" style */
table.comments_wrapper td.leave_comment {
	color:#000000 !important; 
	font-size:15px !important; 
	font-weight:bold !important; 
	font-style:normal !important;
}
/* comments form labels style */
table.comments_wrapper td.comment_labels {
	text-align: left !important;
	padding:6px;
	color:#000000 !important; 
	font-size:12px !important; 
	font-weight:normal !important; 
	font-style:normal !important;
}
/* comments form fields style */
table.comments_wrapper td.comment_fields {
	text-align: left !important;
}
/* comments form label required field style */
table.comments_wrapper td.comment_required {
	padding-left:1 !important;
	color:#b39999 !important;
	font-size:11px !important;
	padding-top:0 !important;
	padding-bottom:0 !important;
}
/* comment form fields style */
.form_fields {
	color: #000000 !important;
	background-color: #FFFFFF !important;
	font-family: Helvetica !important;
	font-size: 16px !important;		
	font-weight: normal !important; 
	font-style: normal !important; 
	padding:1.5% !important;	
	border: solid 1px #dadada !important;
	border-radius: 0px !important;
	-webkit-border-radius: 0px !important;
	-moz-border-radius: 0px !important;
	margin: 0 !important;
	width: 96%;
}


.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #276873;
	-webkit-box-shadow: 0px 10px 14px -7px #276873;
	box-shadow: 0px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
	background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
	background-color:#599bb3;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #408c99), color-stop(1, #599bb3));
	background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
}

td.comment_button {
	padding-top: 30px !important;
}
.mySlides {display:none;}

</style>
<style>
body{
	background-image: url('back.gif');
 background-size:cover;
    background-repeat: no-repeat;
	background-attachment : fixed;

   }
.post{
   
      background-color:white;
	opacity: 1;
    filter: alpha(opacity=100);
    }

	 .menu_bar{
		       padding: 16px;
    height:50px;
      background-color: #505050;
	  position:fixed;
	  width:100%;
	     z-index:1;
		 
    opacity: 0.9;
    filter: alpha(opacity=9);
    }
	 .content{
box-shadow: 1px 1px 3px #222;
   
    border: 1px solid black;
    opacity: 0.9;
    filter: alpha(opacity=9); /* For IE8 and earlier */

 margin: auto;
  position: relative;
    top: 80px;
		 width:700px;
      padding: 16px;
      background-color:transparent;
	
    }
	
	
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    
    background-color: #333;
    position: fixed;
	width:100%;
	z-index:1;
	}

.menu {
    float: left;
}

.menu a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.menu a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.menu.dropdown {
    display: inline-block;
}
 
.dropdown-content {
    display: none;
	left:710px;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

	
</style>

</head>

<body>

<ul>
  <li class="menu"><a class="active" href="blog.php">START HERE</a></li>
  <li class="menu"><a href="#news">NEWS</a></li>
  <li class="menu"><a href="logif.php">LOGIN</a></li>
  
   <li class="menu"><a href="crud_page.php">CRUD OPERATIONS</a></li>

  
   <li class="menu"><a href="admin_login.php">AUTHOR LOGIN</a></li>
  <li class="menu"><a href="search.html">SEARCH</a></li>
  <li class="dropdown"><a href="#" class="dropbtn">SORT</a>
        <div class="dropdown-content">
      <a href="../blog/sort_author.php">AUTHOR</a>
      <a href="../blog/sort_category.php">DATE</a>
    </div>
  </li>
  </ul>

<div style="top:100px; left:200px; right:200px; position:absolute;">
Category:<?php echo($row['category'])?></br>
Title:<?php echo($row['title']) ?></br>
<?php echo($row['content']) ?></br>
<input name="id" type="hidden" value="<?php echo($row['_id']) ?>" />



<!-- comments form -->
    <form action="../blog/add_comment.php?id=<?php echo ($row['_id']); ?>" name="formComment" method="post" style="margin:0;padding:0;position:relative;">
    <input type="hidden" name="pid" value="741" />
    <input type="hidden" name="act" value="post_comment" />
    <table class="comments_wrapper">
      <tr>
        <td class="leave_comment">Leave a Feedback</td>
      </tr>
      <tr>    
        <td class="comment_fields">
        	<input type="text" name="name" value="" class="form_fields" placeholder="* Name" />
        </td>

      </tr>
      <tr>    
        <td class="comment_fields">
        	<input type="text" name="post_id" placeholder="* post_id" class="form_fields" />
        </td>
      </tr>
	  <tr>    
        <td class="comment_fields">
        	<input type="text" name="comment_id" placeholder="* comment_id" class="form_fields"/>
        </td>
      </tr>
      <tr>    
        <td valign="top" class="comment_fields">
        	<textarea placeholder="* Your comment here..." name="comment" rows="5" class="form_fields"></textarea>
        </td>
      </tr>
              
      <tr>
        <td class="comment_required">* - Required fields</td>
      </tr>
      <tr>
        <td class="comment_button"><input type="submit" name="button" value="COMMENT"  class="mybutton"/></td>
      </tr>
    </table>
    </form>
</div>