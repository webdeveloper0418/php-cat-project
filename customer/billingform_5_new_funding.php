<?php session_start();
include("../includes/connect.php");
if(empty($_SESSION['account_number']))
{
  header("location:prepaid_login_form.php");
  //echo "<meta http-equiv='refresh' content='0 url=prepaid_login_form.php'>";
}
else{

}
$_SESSION['client_id'];
$query4gettingbilldetails="select * from clients where id='$_SESSION[client_id]'";
$result4gettingbilldetails=mysql_query($query4gettingbilldetails) or die(mysql_error());
$row4gettingbilldetails=mysql_fetch_array($result4gettingbilldetails);

?>
<html>
<head>
<title><? echo $site_name ?> - Fund by Credit Card</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../style_main/style.css" type="text/css" />

<script>
var checkobj

function agreesubmit(el){
checkobj=el
if (document.all||document.getElementById){
for (i=0;i<checkobj.form.length;i++){  //hunt down submit button
var tempobj=checkobj.form.elements[i]
if(tempobj.type.toLowerCase()=="submit")
tempobj.disabled=!checkobj.checked
}
}
}

function defaultagree(el){
if (!document.all&&!document.getElementById){
if (window.checkobj&&checkobj.checked)
return true
else{
alert("Please read/accept terms to submit form")
return false
}
}
}

</script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
.style3 {color: #FF0000}
.style4 {
	color: #333333;
	font-weight: bold;
}
.style5 {
	color: #000000;
	font-weight: bold;
}
.style6 {color: #000000}
-->
</style>
</head>
<body>
<table cellpadding="0" cellspacing="0" align="center" width="1004">
<tr><td align="center">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td align="left" valign="top"><?php include("../header.php"); ?></td>
  </tr>
<tr>
          <td align="right" valign="top" background="../images/GRAYBKG.gif"> <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" class="whitetxtcolor">&nbsp;</td>
              </tr>
              <tr> 
                <td align="left" class="whitetxtcolor"><strong>Funding</strong></td>
              </tr>
              <tr> 
                <td><img src="/images/spacer.gif" width="10" height="10"></td>
              </tr>
              <tr> 
                <td><div class="border2" style="padding:5px"> 
                  <p><span class="style2"><blink></blink>Your Account is Guest Mode. </span><span class="style4">Please contact us at admin@sc-media-group.com and we will setup your account with a new funding option. Please provide your Account Number when contacting us. <br>
                    Thank You </span><br>
                    <br>
                  </p>
                  </div></td>
              </tr>
            </table>
            <br>
            <br> 
            <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr> 
                <td><strong>&lt;&lt; <a href="option.php" class="bodyfont style1">Return 
                  to My Account </a></strong></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <div align="center" class="bodyfont"><br>
              <br>
              <a href="javascript:history.back();" class="bodyfont style1"></a></div>
            <div align="center"></div>
<br></td></tr>
<tr>
    <td align="left" valign="top"><?php include("../footer.php"); ?></td>
  </tr>
</table>
</td></tr>
</table>

</body>
</html>
