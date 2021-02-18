<?php
$name = $_POST['name'];
$sremail = $_POST['sremail'];
$semail = $_POST['semail'];
$remail = $_POST['remail'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$html = $_POST['html'];

$detail = "From : $name <br> Real Email : $sremail <br> Spoofed Email : $semail <br> Receiver Email : $remail <br> Subject : $subject <br> Message : $msg <br> <br> ";

//IP Grabber

$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$sepr = "-------------------------------------- ";
$date = date("l d-m-Y");
$time = date("h:i:s a");

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: $name <$semail>" . "\r\n";

$status = mail($remail, $subject, $msg, $headers) or die("Error! in sending mail ");
if($status=="success"){ 
     $fh = fopen('details.html', 'a') ;
$visitor = " <br><br> IP Address : $ip <br> Hostname : $hostname <br> Port Number : $port <br> User Agent : $agent <br><br> Date : $date <br> Time : $time ";
$data = " <div class='container'> $detail $sepr $visitor </div>";
fwrite($fh, $data);
fclose($fh);

echo"Your E-mail has been sent successfully and here is details. <p> <center> <table border='1px' cellpadding='10px' cellspacing='1px'>
<tr>
    <th>From Name</th>
    <td>$name</td>
  </tr> 
  <tr>
    <th>From E-mail</th>
    <td>$semail</td>
  </tr>
  <tr>
    <th> To E-mail </th>
    <td>$remail</td>
  </tr>  
<tr>
    <th> Subject</th>
    <td>$subject</td>
  </tr>  
 <tr>
    <th> Message</th>
    <td>$msg</td>
  </tr>
<tr>
    <th>On Date</th>
    <td>$date</td>
  </tr> 
 <tr> 
    <th> <font color='red'>E-mail Status </font></th>
    <td><font color='red'>$status</font></td>
  </tr>
</table> <p>
E-mail Status = 1 means e-mail sent successfully .<br><br> <br> <br>
<title> E-mail sent - || https://anonymous-emailer.000webhostapp.com || </title>
<style>
.print {
	display:none
}
 @media print {
	.print {display:block}
	.btn-print {display:none;}
}
</style>
<button  onclick='javascript:window.print()' class='btn-print'>Print this Mail </button>
<div class='print'>
  <p> E-mail sent by using site <a href='https://anonymous-emailer.000webhostapp.com'>https://anonymous-emailer.000webhostapp.com</a> </p>
</div> </center> ";
}
	else 
	echo " <h1>Sending mail failed.Try Again . </h1> "
?>