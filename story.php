
<?php

$id=$_GET['id'];
$client = new MongoClient();

$db = $client->blog;
$id= new MongoId($id);
 $row = $db->post->findOne(array("_id"=>$id));

?>

<head>
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
	left:382px;
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
  <li class="menu"><a class="active" href="../blog/blog.php">START HERE</a></li>
  <li class="menu"><a href="#news">NEWS</a></li>
   <li class="menu"><a href="crud_page.php">CRUD OPERATIONS</a></li>

  <li class="dropdown"><a href="#" class="dropbtn">SORT</a>
        <div class="dropdown-content">
           <a href="../blog/sort_author.php">AUTHOR</a>
      <a href="../blog/sort_category.php">DATE</a>
    </div>
  </li>
  </ul>
<div style="top:100px; margin:auto; position:absolute;">
Category:<?php echo($row['category'])?></br>
Title:<?php echo($row['title']) ?></br>
<?php echo($row['content']) ?></br>

			
		

<input name="id" type="hidden" value="<?php echo($row['_id']) ?>" />

</div>
