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
    background-color: #grey;
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

 
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="openCity(event, 'Doctor')">Doctor</button>
  <button class="tablinks" onclick="openCity(event, 'Patient')">Patient</button>
</div>


<div id="Home" class="tabcontent">
  <h3>Home</h3>
  
  <p>PTS-Guja (Prahari Telemedicine System-Gujarat), is a telemedicine system for border security force personals who are making the nation secure on Border of India, doing very tough job in different tough terrain and weather conditins.</p>
  <p>Most of the border deployment of Border security force is out of mobile/telephone network, only Radio communicatin is the reliable communicatin.So Fronter BSF, Gujarat develop a Simple PTS-Guj over the Digital VHF Radio set Motorbo XiR-m 8668. </p>
  <div class="clearfix">
	  <button id="btnform" type="button" style="width:40%;float:right;background-color:darkred;"><a href="#"><span style="color:white;font-size:22px;">Doctor's Login</span></a></button>
	  <button id="btnform" type="submit" style="width:40%;float:left;background-color:indigo;" ><a href="#"><span style="color:white;font-size:22px;">Patient's Login</span></a></button>
       
        
      </div>
<article style="background-color:none">
  <h1 style="text-align: left;"><u>About the PTS-GUJ</u> </h1>
	<p style="color:darkgreen">
	Telemedicine is the use of telecommunication and information technology to provide clinical health care from a distance. It has been used to overcome distance barriers and to improve access to medical services that would often not be consistently available in distant rural communities. It is also used to save lives in critical care and emergency situations.
	</p>
	<p>Although there were distant precursors to telemedicine, it is essentially a product of 20th century telecommunication and information technologies. These technologies permit communications between patient and medical staff with both convenience and fidelity, as well as the transmission of medical, imaging and health informatics data from one site to another.
	</p>
	<p style="font-size:20px">
		Most of places Border security Force is deployed in remote /farflung areas. Where no mean of easy communicatin is available, as like Cell phone, Landline Telephone, internet etc. In most of cases
		HF/VHF/UHF Radio Communication is only mean of communicate to Battalion HQ or Higher HQrs.
	</p>
	<p style="font-size:20px">
		Due to this situation providing the telemedicine facility is very difficut, it may be provided by satellite phone terminals, that is very expensive and difficult to feisable at everyplace of deployment due to limmited satellite terminals.
	</p>
	<p style="font-size:18px;color:magenta;">
		To overcome this situation Ftr HQ BSF Gandhinagar develop a simple and smart Telemedicine system for communication between Coy HQ/ Mini MI ROOm and Hospital at Battalion HQ or nearest BSF Hospital
		<br>This system compraise the following terms-
	
	</p>
	<ol>
		<li>Apache webserver, MySQL and PHP based simple web application</li>
		<li>Travelling of text file for conversation between Computers at MI Room at BN HQ and Mini MI Room at Coy HQ </li>
	</ol>
  
  
</article>
</div>

<div id="Doctor" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Patient" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  <table width="100%"><tr><td>sdfkskfj</td></tr>
  <tr><td>sdfkskfj</td></tr>
  <tr><td>sdfkskfj</td></tr>
  <tr><td>sdfkskfj</td></tr>
  <tr><td>sdfkskfj</td></tr>
  <tr><td>sdfkskfj</td></tr>
  
  </table>
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
<button style="background-color:white;font-size:17px;color:blue;float:left;width:20%;">

<?php $handle = fopen("counter.txt", "r"); if(!$handle)
{ echo "could not open the file" ; } else { $counter = ( int ) fread ($handle,20) ;
 fclose ($handle) ; $counter++ ; echo"  Visitor No = ". $counter . "  " ;
 $handle = fopen("counter.txt", "w" ) ; fwrite($handle,$counter) ; fclose ($handle) ; } ?>
 
</button>

<p style="text-align:center;">Created By - Frontier Gujarat, Border Security Force under the project <font style="font-size:20px;"> SMART BOP</font></p>
<p style="text-align:center;">AOCITM (All India Communicatio & Information Technology Meet) Electronic Project 2017-18 (SMART BOP) </p>
</footer>

</body>
</html>