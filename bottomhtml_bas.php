<?php session_start();
include("includes/connect.php");

$time=time();
$msg="";
if(isset($_POST['submit']))
{
	$query="update font set
			b_text='$_POST[bottom_html]'
			where store_id='$_SESSION[store_id]'";
	$result=mysql_query($query) or die(mysql_error());
	//$qu="update store_owner_information set
		// updated_date='$time'
		// where store_id='$_SESSION[store_id]'";
	//$rr=mysql_query($qu) or die(mysql_error());
	$msg="Your changes have been saved.";
}
$query="select * from font where store_id='$_SESSION[store_id]'";
$result=mysql_query($query) or die(mysql_query());
$row=mysql_fetch_array($result);

$sql="select * from font_face";
$res=mysql_query($sql) or die(mysql_error());
$resl=mysql_query($sql) or die(mysql_error());
?>

<script language="JavaScript">

</script>

<script language="JavaScript" type="text/javascript" src="/editor/wysiwyg.js">
</script>

<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
    <td height="20" align="left"></td>
  </tr>
  <tr>
    <td></td>
    <td align="left">Store Setup: <strong>Edit HTML Footer</strong>
        <hr size="1" /></td>
  </tr>
  <tr>
    <td width="17"></td>
    <td width="100%" height="20" align="left">&nbsp;</td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#5E5E5E" style="border:1px solid #828282;  ">
  <tr align="left" valign="top">
    <td width="90%">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td align="center">
<form name="cus_shop" method="post" action="">
<!--BEGIN BASIC EDITOR-->
<div>
<table width="95%" cellpadding="2" cellspacing="0">
                    <tr>
								<td width="552" colspan="2" align="center"></td>
						  </tr>
							<tr>
								<td colspan="2" align="center" bgcolor="#999999" id="padding-left"  style="padding:0px; padding-left:10px;"><br /><p align="left" class="WhiteLinks">
							    Basic Footer HTML Editor:&nbsp; <font color="#FBCB03"><strong><?php echo $msg ?></strong></font></p>
								  <div align="center">
                                <textarea name="bottom_html" cols="90" rows="12" id="bottom_html"><? echo $row['b_text']; ?></textarea>
                                <script language="JavaScript1.2" type="text/javascript">
  generate_wysiwyg('bottom_html');
                                  </script>
                                <br />
                            </div>
								    <br />
								    <br />
									  <input type="submit" name="submit" value="Save HTML Footer" class="input_btn"/>
						          </p>
							  <div class="border2" style="width:500px"><br />
							    <p class="redtxt"><strong>* To input                              advanced HTML code</strong> <span class="txtbold"><strong><a href="welcome.php?val=footerAdv">click here</a>.</strong></span> <br /><br />
							  </div><br /><br /></td>
							</tr>
					  </table></div>
<!--END BASIC EDITOR-->
</form>
				</td>
  </tr>
  <tr align="left" valign="top">
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
