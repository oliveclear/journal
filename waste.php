<?php
session_start();
include_once  "sqlconnectfile.php";
$db = new Database();
$conn = $db->connect();

?>
<? ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Mediamatics : Contact us</title>
<meta name="description" content="Mediamatics Contact us : We want to hear from you, please..." />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
#main #page #content .post .center_bottom .line1 p strong {
	color: #000;
}
.middletext {
	color: #666;
}
#main #page #rightbar .line1 .small_back .back form fieldset label {
	color: #000;
}
#main #page #rightbar .line1 .small_back .back form fieldset a {
	color: #F90;
}
-->
</style><script language="javascript">

function loginalert()
{
 alert('Please login! or If you are a new user Sign up!')
 var currenturl= window.location.href;
window.location = currenturl+"#login";
}

</script>
<script  language="javascript">
function ValidateLoginForm()
{
	if (document.loginform.username.value =="")
	{
		alert("Please Enter Your User Name")
		document.loginform.username.focus()
		return false
	}
	else if (document.loginform.upassword.value =="")
	{
		alert("Please Enter Password")
		document.loginform.upassword.focus()
		return false
	}
	return true
}

</script>
<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var emailID=document.frmSample.EmailAddress
	
	if (document.frmSample.FirstName.value =="")
	{
	alert("Please Enter Your First Name")
	document.frmSample.FirstName.focus()
	return false
	}
	else if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	else if (document.frmSample.City.value =="")
	{
	alert("Pleas Enter Your City")
	document.frmSample.City.focus()
	return false
	}
	else if (document.frmSample.Country.selectedIndex =="0")
	{
	alert ("Please Select Your Country")
	document.frmSample.Country.focus()
	return false
	}
	else if (document.frmSample.captcha_reg.value =="")
	{
	alert ("Please Enter Your Captcha")
	document.frmSample.captcha_reg.focus()
	return false
	}
	else if (document.frmSample.YourQuery.value =="")
	{
	alert("Please Enter Your Query")
	document.frmSample.YourQuery.focus()
	return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32566297-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script  language="javascript">
function ValidateSearchForm()
{
	if (document.searchbook.keyword.value =="")
	{
		alert("Please Enter Some Keyword")
		document.searchbook.keyword.focus()
		return false
	}
	return true
}
</script>

<?php include "inc/top-head.php" ?>
</head>
<body>

<div id="topLeft" ><div id="menu"> <?php
include "topmenu.php";
?>
</div></div><br />
<br /><br />

<div id="main">
<!-- start header -->
<div id="header">
<div id="logo">
	<h2><a href="" ></a></h2>
  </div>
<!--Header end -->
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start leftbar -->
	<div id="leftbar" class="sidebar">
		
<!--			<h2>Categories</h2>
            <div class="line1">
			<div class="small_back">
			 <div class="back">                  
				<ul>-->
<?php
include "leftlink_subject.php";
?>
			<!--   </ul>
			  </div>
			  </div>
	  </div>-->
                <div class="bottom_small">
	     </div>
         	       	<div class=""></div>
	</div>
	<!-- end leftbar -->
	<!-- start content -->
	<div id="content">
		<div class="post">
		     
             	<div class="center_bottom"> 
                <div class="line1">
          	
			 <h1 class="title"><font color="025fcf"><a id="2" name="2"></a>Contact Us</font></h1>
   
				<p><!--<img src="images/map.gif" height="174" width="150"  align="right" />-->We want to hear from you, reach us at</p>
<p>&nbsp;</p>
<ul class="list1">  
  
  <li><strong><font color="#000000">Kolkata Office</font></strong><br /><br />
	  <strong>Address&nbsp;:</strong>&nbsp;&nbsp;59/10, Prince Bakhtiar Shah Road,<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  Kolkata &#8211; 700 033, West Bengal, India<br />
	  <br /> 
	<strong>Phone&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;(033) 2422 &#8211; 7924<br />
	<br />
	<strong>Mobile&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;8232009632<br />
	<br />
	<!-- <strong>Fax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;&nbsp;( 033 ) 2422 &#8211; 7924<br />
	<br /> -->
	<strong>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;<a href="mailto:mediam&#64;mediamatics.co.in"><strong>mediam@mediamatics.co.in</strong></a><br />
	<!-- <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;<a href="mailto:mediam&#64;mediamatics.co.in"><strong>mediam[at]mediamatics.co.in</strong></a><br /> -->

	<br />
  </li>
  <li><strong><font color="#000000">Delhi Office</font></strong><br />
	<br />
	<strong>Address&nbsp;:</strong>&nbsp;111, "Rimjhim House", Patparganj Industrial Estate,<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Delhi-110 092, India. <br />
	<br />
	<strong>Phone&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;011-4303 1109, 4303 1128<br />
	<br />
	<strong>Mobile&nbsp;&nbsp;&nbsp;&nbsp; :</strong>&nbsp;&nbsp;9350017574, 9350017760<br />
	<br />
	<!-- <strong>Fax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;&nbsp;+91-11-4303 1144<br />
	<br /> -->
	<strong>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;<a href="mailto:customerservice&#64;mediamatics.co.in"><strong>customerservice@mediamatics.co.in</strong></a><br /><br>
	<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;<a href="mailto:contact&#64;mediamatics.co.in"><strong>contact@mediamatics.co.in</strong></a><br />
	<br />
  </li>
</ul>   
				</div>
          </div>
             
		</div>
	</div>
	<!-- end content -->

	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page --> 

<div id="footer">
 <?php
include "bottommenu.php";
?>

</div>
</div>
<?php // Close the database connection
	
?>
</body>
</html>
<?
flush(); 
ob_flush();
ob_end_flush(); 
?>