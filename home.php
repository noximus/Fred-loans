<HTML>
<HEAD>
<TITLE>Fred Loans - Home Financing</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	font-size: 11px;
	color: 1C1C1C;
}
img{border:0;}
a {
	font-family: Tahoma;
	font-size: 11px;
	color: FFFFFF;
}
a:visited {
	color: FFFFFF;
}
a:hover {
	color: FFFFFF;
}
a:active {
	color: FFFFFF;
}
-->
</style>
</HEAD>
<BODY BGCOLOR=#9E9D9D LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 rightmargin="0" bottommargin="0" background="images/back-body.jpg" style="background-repeat:repeat-x;background-position:top" onLoad="goforit()">
<table width="100%" height="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="496" valign="top">
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="496" height="235">
          <param name="movie" value="flash/home.swf">
          <param name="quality" value="high">
          <embed src="flash/home.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="496" height="235"></embed>
	  </object>
	</td>
    <td width="255" background="images/back-1.jpg" valign="top"> <a href="https://www.secureloandocs.com/apply.php?id=42771482" target="_blank"><img src="images/res1.jpg" border="0" style="margin-top:14px "></a><br>
        <a href="loan.html"><img src="images/res2.jpg" border="0" style="margin-top:14px "></a><br>
        <a href="contact.php"><img src="images/res3.jpg" border="0" style="margin-top:14px "></a><br>
        <table width="100%"  border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td valign="top"><div align="right"><img src="images/loc.jpg" width="14" height="16" align="top" style="margin-top:0px;margin-bottom:3px"></div></td>
            <td valign="bottom"><div style=" padding-left:18px"><font color="#FFFFFF">Fred Ardehali <br>
              Tell.: 1-800-613-7493 <br>
  Tel.: 1-516-739-0600<br>
Fax.: 1-


 516-706-0461

</font></div></td>
          </tr>
    </table></td>
    <td><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
<tr>
	<td colspan="3" height="18">
		<div  style="color:#FFFFFF;padding-left:15px"><script>
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12){
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
//change font size here
var cdate=dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" "+hours+":"+minutes+":"+seconds+" "+dn

if (document.all)
document.all.clock.innerHTML=cdate
else if (document.getElementById)
document.getElementById("clock").innerHTML=cdate
else
document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function goforit(){
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}

</script>
<span id="clock"></span></div>
	</td>
</tr>
<tr>
	<td colspan="3" height="431" valign="top">
		<table width="751" height="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="493" height="100%" valign="top" bgcolor="#FFFFFF" background="images/back-2.jpg" style="background-repeat:repeat-x;background-position:top;padding-bottom:9px">
				<table width="493" height="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="493" height="203" valign="top" background="images/back-tab-1.jpg" style="background-repeat:repeat-x;background-position:bottom;padding-top:19px">
						<img src="images/3-text-1.jpg" style="margin-left:15px;margin-bottom:12px "><br>
						<img src="images/3-pic-1.jpg" align="left" style="margin-right:14px;margin-left:12px">
						<?php if(isset($_POST['submit'])) {
			/* this php document created by nox from www.fromweb2print.com 
			*/
/* PRECONDITION:  create these fields [$name, $eMail, $recipient, $message, $thanx, $type, $phone, $subject]
 * from the corresponding contact.html form are passed into this script.
 * POSTCONDITION:  the fields are submitted via the SMTP server to the recipient.
 */

$client = "From: " . $HTTP_POST_VARS['name'] . "<" . $HTTP_POST_VARS['eMail'] . ">";

// Concatenate all the fields from the corresponding contact.html form.
$message = "Name: " . $HTTP_POST_VARS['name'] . "\nPhone Number: ". $HTTP_POST_VARS['phone'] ."\nE-mail: " . $HTTP_POST_VARS['eMail'] . "\nType: ". $HTTP_POST_VARS['type'] . "\nAmount: ". $HTTP_POST_VARS['amount'];

// PHP mail function using the SMTP server 
// first parameter is the recipient, second parameter is the subject, followed by the body message, followed by who the mail is FROM (sender/client email).
mail( $HTTP_POST_VARS['recipient'] , $HTTP_POST_VARS['subject'] . $HTTP_POST_VARS['name'], "$message", "$client") or die("Error sending e-mail!  Please try again."); 

echo $HTTP_POST_VARS['thanx'];
}else{
?>  
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loan" id="loan" style="margin:0px">
						<div style=" padding-right:59px" align="right">						  <strong>
								Loan Type:<select name="type" id="type" style="width:154px;margin-left:12px;font-size:11px"><option>-- select a type --</option>
								  <option value="Commercial">Commercial</option>
								  <option value="Residential">Residential</option>
								  <option value="Refinancing">Refinancing</option>
								  <option value="Remodeling">Remodeling</option>
								</select><br>
								Loan Amount:
								
								<input name="amount" type="text" id="amount" style="width:154px;margin-left:12px;font-size:11px">
						<br>
								Name:<input name="name" type="text" id="name" style="width:154px;margin-left:12px;font-size:11px"><br>								
								Phone:<input name="phone" type="text" id="phone" style="width:154px;margin-left:12px;font-size:11px"><br>						
								E-Mail:<input name="eMail" type="text" id="eMail" style="width:154px;margin-left:12px;font-size:11px"><br>
                                <input name="submit" type="submit" id="submit" value="submit">
                        <input name="thanx" type="hidden" value="Your Information Has Been Sent. Someone will contact you about your request soon!">
<input name="recipient" type="hidden" value="info@fredloans.com">
<input name="subject" type="hidden" value="Fred Loans: ">
						</strong>
						</div>
					  </form>
    <?php }	?>
				
					</td>
				</tr>
				<tr><td bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td></tr>
				<tr><td  height="17" bgcolor="#A72614"><img src="images/spacer.gif" width="1" height="1"></td></tr>
				<tr><td  bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td></tr>
				<tr>
					<td height="100%" valign="top" background="images/back-2.jpg" style="background-repeat:repeat-x;background-position:top;padding-top:19px;padding-left:15px ">
						<table width="444" height="100%"  border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="228" height="10" valign="top">
								<img src="images/3-text-2.jpg" width="197" height="12" style="margin-bottom:10px "><br>
								<div style=" padding-left:10px">
									<img src="images/3-b-1.jpg" align="absmiddle">&nbsp;&nbsp; <a href="faqs.html"  style="color:#474747">How much can I afford?</a><br>
									<img src="images/spacer.gif" width="1" height="7"><br>
									<img src="images/3-b-1.jpg" align="absmiddle">&nbsp;&nbsp; <a href="faqs.html"  style="color:#474747"> What is the difference between a fixed-rate loan and an adjustable-rate loan ?</a><br>
									<img src="images/spacer.gif" width="1" height="7"><br>
									<img src="images/3-b-1.jpg" align="absmiddle">&nbsp;&nbsp; <a href="faqs.html"  style="color:#474747"> How is an index and margin used in an ARM ?</a><br>
									<img src="images/spacer.gif" width="1" height="7"><br>
						  </div>						  </td>
							<td width="216" valign="top">
								<div style=" padding-left:0px;padding-top:24px">
									<img src="images/3-b-1.jpg" align="absmiddle">&nbsp;&nbsp; <a href="faqs.html"  style="color:#474747"> How do I know which type of mortgage is best for me?</a><br>
									<img src="images/spacer.gif" width="1" height="7"><br>
									<img src="images/3-b-1.jpg" align="absmiddle">&nbsp;&nbsp; <a href="faqs.html"  style="color:#474747"> What does my mortgage payment include?</a><br>
									<img src="images/spacer.gif" width="1" height="7"><br>
									<img src="images/3-b-1.jpg" align="absmiddle">&nbsp;&nbsp; <a href="faqs.html"  style="color:#474747"> How much cash will I need to purchase a home ?</a><br>
							  <img src="images/spacer.gif" width="1" height="7">							  </div>
							</td>
						</tr>
						<tr>
							<td colspan="2" height="100%" valign="top">
								<img src="images/3-text-3.jpg" style="margin-bottom:10px;margin-top:15px "><br>
								<div style=" padding-left:15px">In our Mortgage Center, you'll find a Homebuyer's Guide, great tips and information as well as links to apply for loans online. <a href="#"  style="color:#164569">Click here to go to the Mortgage Center now.</a> </div>
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
			
			<td width="1" background="images/back-2.jpg" style="background-repeat:no-repeat;background-position:top" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td>
			<td width="256" valign="top" bgcolor="#5A5A5A" background="images/back-20.jpg" style="background-repeat:repeat-x;background-position:top">
				<table width="256" height="100%"  border="0" cellspacing="0" cellpadding="0">
				<tr><td><img src="images/text-3.jpg" style="margin-top:16px;margin-left:20px "></td></tr>
				<tr>
					<td valign="top" style="padding-left:12px;padding-top:6px ">
						<script language="javascript" src="http://cgi.hsh.com/syndicator/mycode.asp?user_id=1246&filecode=homeplans-all-210x122"></script>
					</td>
				</tr>
				<tr>
				  <td  style="color:#FFFFFF;padding-left:22px;padding-top:13px;padding-bottom:13px">						<br>				  </td>
				</tr>
				<tr><td height="1" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td></tr>
				<tr>
                  <td height="100%" valign="top" bgcolor="#326484" style="padding-left:20px "> <img src="images/5-text-8.jpg" style="margin-top:13px;margin-bottom:5px">
                      <div style=""> <img src="images/b-10.jpg"> <strong><a href="calculators.html">How much will my payments be?</a></strong><br>
                          <img src="images/spacer.gif" width="1" height="6"><br>
                          <img src="images/b-10.jpg"> <strong><a href="calculators.html">Amortization Calculator</a></strong> <br>
                          <img src="images/spacer.gif" width="1" height="6"><br>
                          <img src="images/b-10.jpg"> <strong><a href="calculators.html">Should I refinance</a></strong> <br>
                          <img src="images/spacer.gif" width="1" height="6"><br>
                          <img src="images/b-10.jpg"> <strong><a href="calculators.html">How much house can I afford</a></strong> <br>
                          <img src="images/spacer.gif" width="1" height="6"><br>
                          <img src="images/b-10.jpg"> <strong><a href="calculators.html">Rent Vs. Own</a></strong> <br>
                          <img src="images/spacer.gif" width="1" height="6"><br>
                          <img src="images/b-10.jpg"> <strong><a href="calculators.html">Roth Vs. Traditional IRA </a></strong> <br>
                          <img src="images/spacer.gif" width="1" height="6"><br>
                          <img src="images/b-10.jpg"> <strong><a href="calculators.html">What it takes to be a millioniare</a></strong> <br>
                          <img src="images/spacer.gif" width="1" height="6"><br>
                          <img src="images/b-10.jpg"> <strong><a href="calculators.html">How long to pay off my credit cards?</a></strong> <br>
                          <img src="images/spacer.gif" width="1" height="6"><br>
                          <img src="images/b-10.jpg"> <strong><a href="calculators.html">More calculators...</a></strong> <br>
                    </div></td>
				  </tr>
				<tr><td height="1" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td></tr>
				</table>
			</td>
			<td width="1" background="images/back-2.jpg" style="background-repeat:no-repeat;background-position:top" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td>	
		  </tr>
		</table>
	</td>
</tr>
<tr><td colspan="3" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td></tr>
<tr>
	<td colspan="3" height="100%" bgcolor="#585757">
		<table width="751" height="100%"  border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="750" height="100%" bgcolor="#9E9D9D" style="padding-left:22px ">
				<table width="714" height="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="260" height="100%" valign="top"  style="color:#FFFFFF;padding-top:15px">Tell.: 1-800-613-7493&nbsp;&nbsp;&nbsp;&nbsp;Fax.: 1-


 516-706-0461<br>
      e-mail: <a href="mailto:fred@fredloans.com">fred@fredloans.com</a></td>
                    <td width="454" valign="top" align="right"  style="color:#FFFFFF;padding-top:12px;line-height:18px"> <a href="home.php">Home Finance</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="calculators.html">Calculators</a> &nbsp;|&nbsp; <a href="sell.php">Sell Property</a> &nbsp;|&nbsp; <a href="faqs.html">FAQ's</a> &nbsp;|&nbsp; <a href="#">My Account</a> &nbsp;|&nbsp; <a href="aboutus.html">About Us</a><br>
      Copyright &copy; 2005-2006 Fred Loans company &nbsp;|&nbsp; <a href="contact.php">Contact Us</a> &nbsp;|&nbsp; <a href="privacy.html">Privacy Policy</a> </td>
                  </tr>
                </table></td>
			<td bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td>
		</tr>
		</table>
	</td>
</tr>
</table>
</BODY>
</HTML>