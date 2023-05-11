<?php
ob_start();
session_start();
$sb1=$_POST["sb1"];
$sb2=$_POST["sb2"];
$sb3=$_POST["sb3"];
$sb4=$_POST["sb4"];
$sb5=$_POST["sb5"];
$sb6=$_POST["sb6"];
$sb7=$_POST["sb7"];
$sb8=$_POST["sb8"];
$sb9=$_POST["sb9"];
$sb10=$_POST["sb10"];
$sn1=$_POST["sn1"];
$sn2=$_POST["sn2"];
$sn3=$_POST["sn3"];
$sn4=$_POST["sn4"];
$sn5=$_POST["sn5"];
$sn6=$_POST["sn6"];
$sn7=$_POST["sn7"];
$sn8=$_POST["sn8"];
$sn9=$_POST["sn9"];
$sn10=$_POST["sn10"];
$gd1=$_POST["gd1"];
$gd2=$_POST["gd2"];
$gd3=$_POST["gd3"];
$gd4=$_POST["gd4"];
$gd5=$_POST["gd5"];
$gd6=$_POST["gd6"];
$gd7=$_POST["gd7"];
$gd8=$_POST["gd8"];
$gd9=$_POST["gd9"];
$gd10=$_POST["gd10"];
$conn = mysqli_connect('localhost','root','') or die(mysqli_error());//connection to the database
$db_select=mysqli_select_db($conn,'examresult_system') or die(mysqli_error());//select database


require("tcpdf_6_2_13/tcpdf/tcpdf.php");


     //----- Code for generate pdf
     $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
     $pdf->SetCreator(PDF_CREATOR);  
     //$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
     $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
     $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
     $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
     $pdf->SetDefaultMonospacedFont('helvetica');  
     $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
     $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
     $pdf->setPrintHeader(false);  
     $pdf->setPrintFooter(false);  
     $pdf->SetAutoPageBreak(TRUE, 10);  
     $pdf->SetFont('helvetica', '', 12);  
     $pdf->AddPage(); //default A4
     //$pdf->AddPage('P','A5'); //when you require custome page size 
     
     

     $content = '
     <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

<div class="container" style="margin-right:50px;">

<!--<div style="width:970px; height:1200px; padding:20px; text-align:center; border: 10px solid #787878">-->
<div style="width:700px; height:900px; padding:20px; text-align:center; border: 5px solid #787878">

       <span style="font-size:16px;"><h3><u>UNIVERSITY OF VAVUNIYA SRI LANKA</u></h3></span>
       <div>
       <table style="margin-left:90px; text-align:justify;">
       <tr><td>Name</td><td style="margin-right:50px;">:-</td></tr>
       <tr><td>Registration No</td><td>:-</td></tr>
       <tr><td>Index No</td><td>:-</td></tr>
</table>
</div><br>
       <span style="font-size:18px"><b><u>Faculty of Technological Studies</u></b></span>
       <br>
       <span style="font-size:16px"><u>First Examination in Information Communication Technology-2019</u></span> <br/>
       <span style="font-size:16px"><u>First Semester-January 2022</u></span> <br/>
      <p style="font-size:9px;">The grades of marks obtained by you in each unit offered for this examination are given below.</p>
      
  <div>    <table class="table table-bordered" style="width:450px;">
        <tr><th>No.</th><th style="padding-right:auto">Subject</th><th>Subject Code</th><th>Grade</th></tr>
        <tr><th>1</th><th style="">Fundamentals of web programming</th><th>TICT1142</th><th>B</th></tr>
        <tr><th>2</th><th style="padding-right:auto">Computer programmin</th><th>TICT1134</th><th>Grade</th></tr>
        <tr><th>3</th><th style="padding-right:auto">Subject</th><th>Subject Code</th><th>Grade</th></tr>
        <tr><td>a</td><td><?php echo $sb1 ?></td><td><?php echo $sn1 ?></td><td><?php echo $gd1 ?></td></tr>
        <tr><td>b</td><td><?php echo $sb1 ?></td><td><?php echo $sn1 ?></td><td><?php echo $gd1 ?></td></tr>
        <tr><td>c</td><td><?php echo $sb1 ?></td><td><?php echo $sn1 ?></td><td><?php echo $gd1 ?></td></tr>
        
</table>
</div>
<br>
<!--<div class="square square-lg border border-dark" style="width:150px; height:30px;"><i>Semester GPA:</i></div>-->


<div class="container">
    <div class="row"><div class="col" style="margin-top:30px; text-align:justify;">
    Prepared by:
    <br><br>
    Date:- 
<br><br><br>
<u><font-size="10px" margin-left="10px">Key to the grading</u><br>
    <table style="margin-top:10px; font-size:10px; margin-left:10px;">
       
<tr><td >A+</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">85-100</td>
<td style="padding-left:20px;"></td> <td>C</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">50-54</td></tr>
        
<tr><td >A</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">80-84</td>
<td style="padding-left:20px;"></td> <td>C-</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">45-49</td></tr>

<tr><td >A-</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">75-79</td>
<td style="padding-left:20px;"></td> <td>D+</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">40-44</td></tr>

<tr><td >B+</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">70-74</td>
<td style="padding-left:20px;"></td> <td>D</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">35-39</td></tr>

<tr><td >B</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">65-69</td>
<td style="padding-left:20px;"></td> <td>E</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">00-34</td></tr>

<tr><td >B-</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">60-64</td>
<td style="padding-left:20px;"></td> <td>Ab</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">Absent</td></tr>

<tr><td >C+</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">55-59</td>
<td style="padding-left:20px;"></td> <td>MC</td><td style="padding-left:5px;">--</td><td style="padding-left:5px;">Medical</td></tr>
</table>
    
</div>
<div class="col" style="margin-top:30px;">

Checked by:<br><br>
       
     ................................  <br>
       (K.Gnanalasharan)<br>
      Deputy registrar,<br>
    Examination and Student Admission
</div>
</div>
</div>
<br>
<p style="font-size:9px;"><b>NB:</b>  Students are requested to preserve this statement carefully, as no duplicate will be issued under any circumstance</p>
</div>
</div>
</div>

</body>
</html>';
 $pdf->writeHTML($content,true,false,false,false,'');
 
 $file_location = "C:/xampp/htdocs/examresult_system/Screen Shot/"; //add your full path of your server
 
    $datetime=date('dmY_hms');
    $file_name = "ResultSheet_".$datetime.".pdf";
    ob_end_clean();
    $pdf->Output($file_location.$file_name, 'F'); // F means upload PDF file on some folder
    $pdf->Output($file_location.$file_name, 'I');
	$body="<html>
	<head>
	<style type='text/css'> 
	body {
	font-family: Calibri;
	font-size:16px;
	color:#000;
	}
	</style>
	</head>
	<body>
	
	</body>
	</html>";


?>