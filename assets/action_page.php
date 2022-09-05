<?php
include("dbfunction.php");
?>
<?php
if(isset($_POST['submit']))
{ 





$fname = $_POST['fname'];
$filename="PT-". $fname.".txt";
$f=$fname;
$date = $_POST['date'];
$iregtno = $_POST['iregtno'];
$name = $_POST['name'];
$rank = $_POST['rank'];
$coy = $_POST['coy'];
$unithq = $_POST['unithq'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$bloodgroup = $_POST['bloodgroup'];
$pulserate = $_POST['pulserate'];
$bp = $_POST['bp'];
$medicalcategory = $_POST ['medicalcategory'];
$symptoms = $_POST['symptoms'];
$medhis = $_POST['medhis'];
$tretgiven = $_POST['tretgiven'];
$remarks = $_POST['remarks'];
$dfnname = $_POST['dfnname'];


//variable declaration for lable printing in text file

$rfn="Registered FileName :     ";
$dat1="DATE                :     ";
$irn= "IRLA/REGT NO        :     ";
$nm="NAME                :     ";
$rnk="RANK                :     ";
$cy="Coy                 :     ";
$uhq="UNIT/HQ             :     ";
$gndr= "GENDER              :     ";
$ag= "AGE                 :     ";
$bgrp= "BLOOD GROUP         :     ";
$prate="PULSE RATE          :     ";
$bpr="BLOOD PRESSURE      :     ";
$mcat= "MEDICAL CATEGORY    :     ";
$sym= "SYMPTOMS/PROBLEM    :     ";
$mhis="MEDICAL HISTORY     :     ";
$tgn="TREATMENT GIVEN     :     ";
$rks="REMARKS             :     ";
$dfn="DOCTOR/FS/NA NAME   :     ";

$sss="------------------------------------";
$sss2="**************************************************************";
$error="";

//Coding for creat a text file    

    $file = fopen('./files/'.$filename,"a+");

    
	
	
    fwrite($file,$rfn);
     fwrite($file,$f." \r\n");
	
	
	
    fwrite($file,$dat1);
     fwrite($file,$date." \r\n");

  
  
  fwrite($file,$irn);
    fwrite($file,$iregtno." \r\n");

  
  

     fwrite($file,$nm);
     fwrite($file,$name." \r\n");


     fwrite($file,$rnk);
    fwrite($file,$rank." \r\n");


    fwrite($file,$cy);
    fwrite($file,$coy." \r\n");


    fwrite($file,$uhq);
    fwrite($file,$unithq." \r\n");


    fwrite($file,$gndr);
    fwrite($file,$gender." \r\n");


    fwrite($file,$ag);
    fwrite($file,$age." \r\n");




    fwrite($file,$bgrp);
    fwrite($file,$bloodgroup." \r\n");


    fwrite($file,$prate);
    fwrite($file,$pulserate." \r\n"); 


    fwrite($file,$bpr);
    fwrite($file,$bp." \r\n");


  fwrite($file,$sss." \r\n");
    fwrite($file,$mcat);
    fwrite($file,$medicalcategory." \r\n");


  fwrite($file,$sss." \r\n");
    fwrite($file,$sym);
    fwrite($file,$symptoms." \r\n");


  fwrite($file,$sss." \r\n");
    fwrite($file,$mhis);
    fwrite($file,$medhis." \r\n");


  fwrite($file,$sss." \r\n");
    fwrite($file,$tgn);
    fwrite($file,$tretgiven." \r\n");


  fwrite($file,$sss." \r\n");
    fwrite($file,$rks);
    fwrite($file,$remarks." \r\n");
   
  fwrite($file,$sss." \r\n");
    fwrite($file,$dfn);
    fwrite($file,$dfnname." \r\n");
    fwrite($file,$sss2." \r\n");
        
    fclose($file); 
    
  }
  
  
?>

<?php

if(isset($_POST["submit"])){
  
                                        $obj=new dbdata();
                    $fld=array("date","fname","iregtno","name","rank","coy","unithq","gender","age","bloodgroup","pulserate","bp","medicalcategory","symptoms","medhis","tretgiven","remarks","dfnname");
                    $val=array($_REQUEST["date"],$_REQUEST["fname"],$_REQUEST["iregtno"],$_REQUEST["name"],$_REQUEST["rank"],$_REQUEST["coy"],$_REQUEST["unithq"],$_REQUEST["gender"],$_REQUEST["age"],$_REQUEST["bloodgroup"],$_REQUEST["pulserate"],$_REQUEST["bp"],$_REQUEST["medicalcategory"],$_REQUEST["symptoms"],$_REQUEST["medhis"],$_REQUEST["tretgiven"],$_REQUEST["remarks"],$_REQUEST["dfnname"]);
                    $tbl="patient_register";
                    $res =$obj->insert($tbl,$fld,$val);
                    echo '<script language="javascript">';
echo 'alert("your file is generated! please click on open file menu!")';
echo '</script>';
  

  
  header("location: welcome.php");

  
}

?>