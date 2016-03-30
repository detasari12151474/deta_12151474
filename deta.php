<html>
<head></head>
<title>Table</title>
<body>
<tr>
<tr>

<table border='1' cellpadding="0" cellspacing="0" style='colappse:0;' align='center' width='605   height="400"    '>
<tr>
    <td height="34" colspan="4" bgcolor="blue">
<center>
      	<font face="time">
<font color="blue" colspan=3></div>
          </font>		
</font>
    	</center>	
	<center>
	<font face="time">
<font color="blue">
	<div align="center"></div>
        	</font></font>
	<table width="602" border="0" align="left" cellpadding="0" cellspacing="0">
        	<tr>
          <td width="51">
<font face="arial balck">
<font color="black"><b>No</b></font></font></td>
          <td width="249">
<font face="arial balck">
<font color="black"><b>Judul</b></font></font></td>
          <td width="173"><font face="Arial">
<font color="black"><b>download</b></font></font></td>
          <td width="129"><font face="Arial">
<font color="black"><b>visitor</b></font></font></td>
        </tr>
      </table>
    </center>
  	</td>
  </tr>
<?php
	for ($i=1; $i<=10; $i++)
	{
	if ($i%2==1)
		{
		$warna="white";
		echo"
		<tr bgcolor='$warna'>
		<td height=34><center>$i</td>
		<td height=34 colspan=3>&nbsp
		Fast Five  
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		70,175,570
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp $721,670,980
		</td>
		</tr>";
		$i++;
		}
		else{
		$warna="dark";
		}
		echo "
		<tr bgcolor='dark'><font face='arial balck'>
		<td height=34 width=43><center>$i
		</td>
		<td height=34 width=210> &nbspThe Hangover II 
		</td>
		<td height=34 width=180><center>70,175,570</td>	
		<td height=34><center> $721,670,980
		</td>
		</tr>";
}
?>
<tr>
<tr>
 </tr>
</table>
</body>
</html>

