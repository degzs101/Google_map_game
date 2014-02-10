<html>
<head>
<title>PHP: MySQL Connection</title>
</head>
<body style="font-family: Tahoma; font-size: 16px; color: #000; background-color: #000; margin: 0px">
<div style="color: #FFF; margin: 0px auto 0px auto; width: 980px; background-color: #000">
<div style="padding: 20px; text-align: center; background-color: #000"><b>PHP: MySQL Connection</b></div>
<div style="background-color: #DDD; width: 100%; padding: 20px 0px 20px 0px; text-align: left">
<?php
// Database connection details
$username="mydb1188";
$password="mydb118879";
$server="danu2.it.nuigalway.ie";
$database="mydb1188";
// Connect to DB
mysql_connect($server, $username, $password);
// Select Database on Danu2
mysql_select_db($database) or die ("Unable to select database");
// Set SQL string
$query="SELECT * FROM county_name;
// Execute SQL
$result=mysql_query($query);
// Close MySQL Connection
mysql_close();
// Echo opening table and table heading tags
echo("<table cellpadding=\"10\" style=\"text-align: left\" cellspacing=\"10\"><tr><th>County ID</th><th>County Name</th></tr>");
// Loop through recordset until end
while ($row = mysql_fetch_array($result))
{
echo("<tr>");
echo("<td>" . $row['county_id'] . "</td>");
echo("<td>" . $row['county_name'] . "</td>");

echo("</tr>");
}
// Close table tag
echo ("</table");
?>
</div>
</div>
</body>
</html>

