<?php
if(isset($_POST['name'], $_POST['email'], $_POST['comments']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];
$to="tusharkumar.k150@gmail.com";
$subject="query of English call centre";
$page1=$_POST['callback'];
if($page1=="callback")
{
	$to="tusharkumar.k150@gmail.com";
	$subject="query".$name;
}
$message ="
<html>
<head>
  <title></title>
</head>
<body>
  <table> 
    <tr>
      <td>Name</td><td>".$name."</td>
    </tr>	   
	 <tr>
      <td>E-mail Id</td><td>".$email."</td>
    </tr>	
    <tr>
      <td>Message</td><td>".$comments."</td>
    </tr> 
  </table>
</body>
</html>
";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers  .= 'From:' . $email . "\r\n";
$headers .= 'Reply-To:' . $email . "\r\n";
 "\r\n"; //for testing
$sentOk = mail($to,$subject,$message,$headers);
<style type="text/css">
.pp {
	/*background-color: #E5E5E5;*/
	/*float: left;
	height: 30px;*/
	width: 100%;
	/*border: 1px solid #666;*/
	font-family: Arial,Helvetica,sans-serif;
	font-size: 32px;
	color: yellowgreen;
	text-align: center;
	padding-top: 3px;
	margin-top: 100px;
}
/*.ss {
	font-family: Verdana, Arial, SansSerif, Helvetica;
	color: #000000;
	text-align: center;
	height: 40px;
	width: 99%;
	padding-top: 5px;
	border: 1px solid #666;
	font-size: 15px;
	margin-top: 60px;

}
.oo {
	float: left;
	height: 10px;
	width: 100%;
}*/
</style>



<div class="pp">Thank you for contacting us!
</div><br /><br />
<div class="pp">We are contacting to you shortly.</div><br /><br />
<br /><br /><br /><br /><CENTER>
<a  style="text-decoration: none" href ="index.html"> CLICK HERE TO GO BACK </a></CENTER>