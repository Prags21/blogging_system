<html>
<head>
        <link rel="stylesheet" type="text/css" href="../blog\signin.css"/>

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
</style>
<style>
align{
        position: below;     
	 }
</style>
<style>
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
  <li class="menu"><a class="active" href="blog.php">START HERE</a></li>
  <li class="menu"><a href="#news">NEWS</a></li>
  <li class="menu"><a href="login.html">LOGIN</a></li>
   <li class="menu"><a href="crud_page.php">CRUD OPERATIONS</a></li>

  <li class="dropdown"><a href="#" class="dropbtn">SORT</a>
        <div class="dropdown-content">
           <a href="../blog/sort_author.php">AUTHOR</a>
      <a href="../blog/sort_category.php">DATE</a>
    </div>
  </li>
  <li class="menu"><a href="admin_login.php">ADMIN</a></li>
  </ul>
<div id="card1">
    <h2>Sign-in </h2><form action="login.php" method="post">
  <input type="email" name="un" placeholder="Mail.." />
  <input type="password" name="pwd" placeholder="Password.."/>

  <!--  // // // // // // // // // //  -->
  <input type="submit" value="Sign-in" onclick="p(this.form)"/>
 
</div>
</form>
<script language="javascript">
    function p(form){
if(form.email_id.value=="")
{
alert("enter E-mail")
}
else{
if(form.password.value=="")
{
alert("enter Password!")
}
else{
alert("logged in!")
}
}
</script>






<div id="card2">
  <h2>Sign-up  </h2><form action="logon.php" method="post">
  <input type="email" name="un" placeholder="Mail.." />
  <input type="text"  name="name" placeholder="Name.."/>
  <input type="password" name="pwd"  placeholder="Password.." />

  <input type="checkbox" id="news" name="news">
  <label for="news">Subscribe to our newsltetter !</label>

  <!--  // // // // // // // // // //  -->
  <input type="submit" value="Signup" onclick="Logon(this.form)"/>
</div></form>
 <script language="javascript">
function Logon(form){
if(form.email_id.value=="" || form.password.value=="" || form.name.value=="")
{
alert("enter all Details")
}
else
{
alert("successfully created account!")
alert("Sign-in now!")
}
}
</script>

</body>
</html>