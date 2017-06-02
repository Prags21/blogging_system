<?php
$client = new MongoClient();
$db = $client->blog;
 	
 session_start();
		$username = $_POST['un'];
		$password =$_POST['pwd'];
		$db->user_details->findOne(array("un"=>$username,"pwd"=>$password));

        $username = $_POST['un'];
		$password =$_POST['pwd'];
		$row = $db->user_details->findOne(array("un"=>$username,"pwd"=>$password));
		$_SESSION['un']=$username;
		if(isset($_SESSION['un']))
		{
			echo "User : ".$_SESSION['un'];
		}
	
		 
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
		
			echo "<td>".$row['email']."</td>";
				echo "<a href='logout.php'>Logout</a>";

	


?>
<?php
$client = new MongoClient();
$db = $client->blog;
 $collection = $db->post->find();

 ?>

<head>
<title>AIB</title>

<style>

div.comment_message {
	padding:10px !important;
	color:red !important;
	font-weight:bold !important;	
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
div.popular_post {
	border:2px #452575;
	right:0px;
	width:150px;
	height:300px;
	position:absolute;
	padding:10px !important;
	color:red !important;
	font-weight:bold !important;	
}
</style>
<style>
.k{margin: 1em 0 0.5em 0;
	font-weight: 600;
	font-family: 'Titillium Web', sans-serif;
	position: relative;  
	font-size: 32px;
	line-height: 36px;
	padding: 15px 15px 15px 15%;
	color: #355681;
	
}


.pj{
		margin: 1em 0 0.5em 0;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 28px;
	line-height: 40px;
	background: #35f684;
	background: rgba(53,86,129, 0.8);
	border: 1px solid #fff;
	padding: 5px 15px;
	color: white;
	border-radius: 0 10px 0 10px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
	font-family: 'Muli', sans-serif;
}</style>
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


	 .content{
box-shadow: 1px 1px 3px #222;
   
    border: 1px solid black;
    opacity: 0.9;
    filter: alpha(opacity=9); /* For IE8 and earlier */


  position: relative;
    top: 80px;
	left:0px;
		 width:700px;
      padding: 16px;
      background-color:white;
	
    }

#card{

width: 350px;
border: 1px solid gray;
box-shadow: 1px 1px 3px #888;
border-top: 10px solid blue;
min-height: 250px;
padding-: 10px;
margin: 20px;
}


</style>
 <style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
 
            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }
 
            .rating { 
                border: none;
                float: left;
            }
 
            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }
 
            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }
 
            .rating > label { 
                color: #ddd; 
                float: right; 
            }
 
            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }
 
            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     
 
 
            /* Downloaded from http://devzone.co.in/ */
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


<div id="card" style=" position:fixed;bottom:40px;right:0;">
</div>
<div id="card" style=" position:fixed;top:80px;right:0;">
</div>
<div class="content">
 
	  <?php

	  foreach($collection as $row)
		
			{
				
	  ?>
	  <div class="post">
	  <li>
                <p><?php echo($row['category'])?></p>
		<p><?php echo($row['title']) ?></p>
		<p><?php echo ($row['date']) ?></p>
		<p><?php
	
		$string = strip_tags($row['content']);
        if (strlen($string) > 50) {
    $stringCut = substr($string, 0, 50);
        $string = substr($stringCut, 0, strrpos($stringCut, ' '));

		}
echo $string;
		
		if(isset($_SESSION['un']))
		{?>
		...<a href="../blog/admin_story.php?id=<?php echo ($row['_id']); ?>">Read More</a>
		</p><?php }
		else{?>
			...<a href="../blog/story.php?id=<?php echo ($row['_id']); ?>">Read More</a>
		</p>
			<?php
		}
		?>
		<p><?php echo("<b>name:</b>".$row['name']) ?></p>
			
			
			
   
    </li>      
  
</div>
		<?php		
			}
?>

	
    
        
    
        <!-- navigation at the bottom "Older Post", "Home", "Newer Post" -->    
    <table class="bottom_navigator">
      <tr>
      	        <td class="older_post">
        	        		<a class="nav_active" href="/blog/preview.php?pid=731&amp;p=&amp;cat_id=&amp;search=#blt">Older Post</a>
			        </td>
        
        <td class="home_post"><a class="nav_active" href="/blog/preview.php?p=&amp;cat_id=&amp;search=#blt">Home</a></td>
        
                <td class="newer_post">
                    		<a class="nav_active" href="/blog/preview.php?pid=750&amp;p=&amp;cat_id=&amp;search=#blt">Newer Post</a>
			        </td>
        
      </tr>
    </table>
    


<a href="#myAnchor" class="cd-top">Top</a></div>

</div>
<div style=" position:fixed;bottom:0;right:20px;">
      <p>Copyright &copy; 2016</br>
	  Developed By Pragati Singh & Shweta Chilka</p>
    </div>
	

	
<script type="text/javascript">

//$('.front_end_wrapper').prepend('<a href="#0" class="cd-top">Top</a>');

jQuery(document).ready(function($)){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
	//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
	offset_opacity = 1200,
	//duration of the top scrolling animation (in ms)
	scroll_top_duration = 700,
	//grab the "back to top" link
	$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

</script>
</body>
</html>
