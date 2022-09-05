<html>
<head><title>unit_hq name entry</title>
<?php
include("dbfunction.php");
?>
<style>
body{
	background-color:skyblue;
}


input[type=text]{
	font-size:20px;
	
	
}

textarea
{
	font-size:20px;
	rows:4;
	cols:50;
	height:80px;width:350px;
}
submit{
	height:80px;
	width:120px;
}
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 260px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>


<div class="container">

<header>
   <h1>Data entry forms for updating data in to database "bsf"</h1>
</header>
  
<nav>
<ul style="font-size:22px;">
	  <li><a href="html5layout_home.php"><img src="imgs/homebtn.png" style="width:60px;height:40px" />Home</a></li>
    <li><a href="dbaseentry.php">Data Entry forms</a></li>
    
  </ul>
</nav>
<article>
<h3>Unit/HQ entery in to database form</h3>
<p>
<form  method="post"  style="padding-top: 10px;padding-bottom: 10px;">
    
    <table border="0" width="100%" align="right" class="demo-table"  style="font-size:22px;">


  <tr>
      <td>Unit/HQ</td>
      <td><input type="text" class="demoInputBox" name="unithq" placeholder="Enter Unit/HQ Name"/></td>
    </tr>
	
	<tr>
<td>
<input type="submit" style="height:50px;width:100px;font-size:28px;color:green;background-color:lightblue;" name="submit" value="submit" onclick="hello();" value="Click to Release" >
</td>
<td><input type="reset" style="height:50px;width:100px;font-size:28px;color:black;background-color:lightblue;" name="reset" value="reset"><br>

</td>
</tr>
	</table>
	
	<?php
	if(isset($_POST["submit"])){
	$obj=new dbdata();  $fld=array("unithq");
    $val=array($_REQUEST["unithq"]);	
	$tbl="unit";$res =$obj->insert($tbl,$fld,$val);
	}
     ?>	
</form>

</article>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>

<footer>Copyright &copy; Frontier HQ BSF, Gandhinagar, GUJARAT</footer>

</div>


</body>
</html>