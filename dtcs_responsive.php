<?php
include("assets/dbfunction.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PTs-FtrBsfGuj</title>
<link rel="stylesheet" href="assets/style.css" />

<style>
/*css for horizon tab fade*/
/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;

</style>


</head>
<?php
if(isset($_POST['submit']))
{ 





$fname = $_POST['fname'];
$filename="PT-". $fname.".txt";
$f=$fname;
$date = $_POST['date'];
$name = $_POST['name'];
$dfnname = $_POST['dfnname'];
$askypt = $_POST['askypt'];
$diag = $_POST['diag'];
$advftest = $_POST['advftest'];
$pres = $_POST['pres'];
$advice = $_POST['advice'];



//variable declaration for lable printing in text file

$rfn="Registered FileName :     ";
$dat1="DATE                :     ";
$nm= "Name of Patient     :     ";
$dfn= "Name of Doctor/P-cist:     ";
$askyp= "Ask Your Patient    :     ";
$dg= "Diagnosis          :     ";
$advft= "Advice for Tests     :     ";
$prs = "Prescription        :     ";
$adv = "Advice              :     ";


$sss="------------------------------------";
$sss2="**************************************************************";
$error="";

//Coding for creat a text file    

    $file = fopen('./files/'.$filename,"a+");

    
	
	
    fwrite($file,$rfn);
     fwrite($file,$f." \r\n");
	
	
	
    fwrite($file,$dat1);
     fwrite($file,$date." \r\n");

  
  
  fwrite($file,$nm);
    fwrite($file,$name." \r\n");

  
  

     fwrite($file,$dfn);
     fwrite($file,$dfnname." \r\n");

	fwrite($file,$sss." \r\n");
     fwrite($file,$askyp);
    fwrite($file,$askypt." \r\n");

	fwrite($file,$sss." \r\n");
    fwrite($file,$dg);
    fwrite($file,$diag." \r\n");

	fwrite($file,$sss." \r\n");
    fwrite($file,$advft);
    fwrite($file,$advftest." \r\n");
	
	fwrite($file,$sss." \r\n");
    fwrite($file,$prs);
    fwrite($file,$pres." \r\n");
	
	fwrite($file,$sss." \r\n");
    fwrite($file,$adv);
    fwrite($file,$advice." \r\n");


    
    fwrite($file,$sss2." \r\n");
        
    fclose($file); 
    
  }
  
  
?>



<body id="grad1">

<header id="headertop">
<h1 style="text-align:left;color: white;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">PTS-Prahari Telemedicine System</h1>
<h2 style="text-align:Right;">Frontier Gujarat, Border Security Force</h2>
</header>

<nav>
<ul style="font-size: 18px">
  <li><a href="index.php"><font style="color:black;">Home</font></a></li>|
  <li><a href="dtcs.php"><font style="color:white;">Doctor</font></a></li>|
  <li><a href="#"><font style="color:black;">Case Study</font></a></li>|
  <li><a href="ptrg.php"><font style="color:white;">Patient Registration</font></a></li>|
  <li><a href="ha.php"><font style="color:black;">Health Awareness</font></a></li>|
  <li><a href="#"><font style="color:white;">About</font></a></li>|
    
</ul>
</nav>
 
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<footer>
<p style="text-align:center;">Created By - Frontier Gujarat, Border Security Force under the project <font style="font-size:20px;"> SMART BOP</font></p>
<p style="text-align:center;">AOCITM (All India Communicatio & Information Technology Meet) Electronic Project 2017-18 (SMART BOP) </p>
</footer>

</body>
</html>