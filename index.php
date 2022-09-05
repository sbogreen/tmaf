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


$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

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
  
  <button id="btnform" onclick="document.getElementById('id01').style.display='block'" style="width:30%;float:left;background-color:darkred;font-size:22px">Doctor's Login</button>
	  
	  
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate"  method="post" >
  
    <div class="container">
      <label><b>User Name</b><span>*</span></label>
      <input type="text" placeholder="Type your registered User Name" name="uname" required>
	  
	  <label><b>Password</b><span>*</span></label>
      <input type="password" placeholder="Type your correct password here" name="pwd" required>
	  
	  
      <div class="clearfix">
	  <button id="btnform" type="submit" style="width:50%;float:left;" class="signupbtn" name="submit" value="submit" onclick="hello();" value="Click to Release">submit</button>
	  <button id="btnform" type="button" style="width:50%;float:right;background-color:red;"onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
       
        
      </div>
    </div>
  </form>
</div>


            
</body>
</html>

</section>

	  <button id="btnform" type="submit" style="width:30%;float:Right;background-color:indigo;font-size:22px;" onclick="#">Patient's Login</button>
       
        
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
  <h3>Doctor</h3>
  <section >
Open File / Write to Patient <font id="fs">
<article >
<h3>Browse text file in to your computer that is send by the Patient for Your Help / Write to your Doctor</h3><hr>
<table id="grad2" style="width:95%;height: 200px;color:white;font-weight:bold;">
  
  <col width=55%>
  <col width=45%>
  
  <tr style="font-size: 16px" valign="top">
      
      <td >
        
      		
  <table>
	
	
	<tr>
		<td>Select a File to Load:</td>
		<td><input type="file" id="fileToLoad" ></td>
		<td><button onclick="loadFileAsText()" style="background-color:skyblue;font-weight:bold">Load Selected File</button><td>
	</tr>
	<tr valign="top">
		<td colspan="3" valign="top">
			<textarea id="inputTextToSave" style="width:650px;height:410px;" cols="250" rows="180" valign="top"></textarea>
		</td>
	</tr>
	
</table>

<script type="text/javascript">

function saveTextAsFile()
{
	

	var downloadLink = document.createElement("a");
	downloadLink.download = fileNameToSaveAs;
	downloadLink.innerHTML = "Download File";
	downloadLink.href = textToSaveAsURL;
	downloadLink.onclick = destroyClickedElement;
	downloadLink.style.display = "none";
	document.body.appendChild(downloadLink);

	downloadLink.click();
}

function destroyClickedElement(event)
{
	document.body.removeChild(event.target);
}

function loadFileAsText()
{
	var fileToLoad = document.getElementById("fileToLoad").files[0];

	var fileReader = new FileReader();
	fileReader.onload = function(fileLoadedEvent) 
	{
		var textFromFileLoaded = fileLoadedEvent.target.result;
		document.getElementById("inputTextToSave").value = textFromFileLoaded;
	};
	fileReader.readAsText(fileToLoad, "UTF-8");
}

</script>
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
<p style="text-align:center;">AOCITM (All India Communication & Information Technology Meet) Electronic Project 2017-18 (SMART BOP) </p>
</footer>

</body>
</html>