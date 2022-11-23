<?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
$txtpassword=$_POST['txtpassword'];
$txtpassword1=$_POST['txtpassword1'];
$officer_name=$_SESSION['user_name'];
if($officer_name&&$txtpassword&&($txtpassword===$txtpassword1)){
  $sql_1 = "UPDATE tbl_courier_officers 
				SET off_pwd = '$txtpassword' WHERE  officer_name= '$officer_name'";
  $result =dbQuery($sql_1);
  $no = dbAffectedRows();
  if($no) header('Location: update-success.php');
  else $error="Error: Check that you are logged in or that your passwords correspond";
}

require_once('database.php');
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);

?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<script language="javascript">
//<!--
function memloginvalidate()
{
   if(document.form1.txtpassword.value == ""||(document.form1.txtpassword.value!=document.form1.txtpassword1.value))
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script></head>


<body onLoad="document.form1.txtusername.focus();">
<table id="Outer" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>
    <td><table id="inner" border="0" cellpadding="3" cellspacing="3" height="500" align="center" width="96%">
      <tbody><tr>
        <td>
		<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
<table border="0" cellpadding="0" cellspacing="0" width="782">
<tbody><tr>
<td colspan="15"><img src="images/trheader.jpg" height="109" width="780"></td>
</tr>

		



      
      <tr>
        <td><div align="center">
          <span class="redtext"><strong>          </strong></span><br>  
              <br>
        </div>
          <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
            <tbody><tr>
              <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
              <td background="images/boxtopBG.gif" width="734"></td>
              <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
            </tr>
            <tr>
              <td background="images/boxleftBG.gif"></td>
              <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                  <tbody><tr>
                    <td colspan="2" height="4"></td>
                  </tr>
                  <tr>
                    <td height="18"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody><tr>
                        <td colspan="3" class="smalltextgrey" width="378">
						</td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td><table class="GreenBox" border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                      <tbody><tr>
                        <form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
                          <td><table bgcolor="#FFFFFF" border="0" cellpadding="3" cellspacing="1" width="100%">
                              <tbody><tr>
                                <td colspan="3" class="smalltextgrey">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3" class="smalltextgrey">
								<div class="headtext13" align="center"><strong>Change Password</strong></div></td>
                              </tr>
                              <tr>
                                <td colspan="3" height="10">
								<font color="#FF0000" style="font-size:12px;">
								<?php echo $error; ?>
								</font>
								</td>
                                </tr>
                                <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">New Password</font></td>
                                <td>:</td>
                                <td><input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password"></td>
                              </tr>
                              <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Verify New Password</font></td>
                                <td>:</td>
                                <td><input name="txtpassword1" class="forminput" id="txtpassword" maxlength="20" type="password"></td>
                              </tr>
							  
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input name="Submit" class="green-button" value="Change Password" type="submit" style="padding:5px 10px;font-weight:bold;"></td>
                              </tr>
                          </tbody>
						  </table>
						  </form>
						  </td>
                        
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
              </tbody></table></td>
              <td background="images/boxrightBG.gif"></td>
            </tr>
            <tr>
              <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
              <td background="images/boxbtmBG.gif" width="734"></td>
              <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
            </tr>
          </tbody></table>
          <br>
          <br></td>
      </tr>
      <tr>
        <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
      </tr>
      
    </tbody></table></td>
  </tr>
</tbody></table>
</td></tr></tbody></table></body></html>