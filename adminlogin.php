<?php

session_start();
if( (!isset($_SESSION["id"]) and !isset($_POST["adminChoice"])) or $_POST["adminChoice"] == "Logout")
{
	session_destroy();
       header("Location: adminlogin.php");
       exit;
}
#if they have selected a ticket, go to the ticket page
if(isset($_POST["adminChoice"]) and $_POST["adminChoice"] == "View Selected Ticket")
{
	header("Location: ticket2.php");
       exit;
}
$db = mysql_connect('localhost', 'SiscoBr', "pets-bibs"); 
if($db)	
{ 
      	mysql_select_db('SiscoBr'); 
}
else
{  
      	die("Could not connect to database " . mysql_error());
}
#we look for a row with the name & password they gave
if(!$_POST["adminChoice"])
{
	$hash = md5($_POST["password"]);
	$name = $_POST["name"];
	$query = "select * from Admins where Admins.name = '$name' AND Admins.password = '$hash'";
	$result = mysql_query($query);
	$num_rows = mysql_num_rows($result);
	#if there aren't any such rows, then the log in details are invalid, so EXIT.
	if($num_rows < 1)
	{
		session_destroy();
    	   	header("Location: adminlogin.php");
     	  	exit;
	}
	$_SESSION["id"] = $name;
}

if(!isset($_SESSION["sort"]))
{
	$_SESSION["sort"] = "Tickets.id";
}
if(isset($_POST["adminChoice"]) and $_POST["adminChoice"] == "Sort")
{
	switch($_POST["sortby"])
	{
		case 0:
			$_SESSION["sort"] = "Tickets.id";
			break;
		case 1:
			$_SESSION["sort"] = "thedate";
			break;
		case 2:
			$_SESSION["sort"] = "fName";
			break;
		case 3:
			$_SESSION["sort"] = "Ticket_Details.email";
			break;
		case 4:
			$_SESSION["sort"] = "subject";
			break;
	}
}
$sort = $_SESSION["sort"];


if(!isset($_SESSION["allOpen"]))
{
	$_SESSION["allOpen"] = "Tickets.status = \"open\" and";
}

if(isset($_POST["adminChoice"]) and $_POST["adminChoice"] == "View All Tickets")
{
	$_SESSION["allOpen"] = "";
}
if(isset($_POST["adminChoice"]) and $_POST["adminChoice"] == "View Open Tickets")
{
	$_SESSION["allOpen"] = "Tickets.status = \"open\" and";
}
$allOpen = $_SESSION["allOpen"];


if(!isset($_SESSION["my"]))	#default to everyone
{
	$_SESSION["my"] = "";
}
#if they hit the button, toggle!
if(isset($_POST["adminChoice"]) and $_POST["adminChoice"] == "View My Tickets")
{
	$id = $_SESSION["id"];
	$_SESSION["my"] = "and Admins.name = \"$id\"";
}
if(isset($_POST["adminChoice"]) and $_POST["adminChoice"] == "View All Techs Tickets")
{
	$_SESSION["my"] = "";
}
$my = $_SESSION["my"];

if(!isset($_SESSION["unassigned"]))	
{
	$_SESSION["unassigned"] = "";
}
if(isset($_POST["adminChoice"]) and $_POST["adminChoice"] == "View Unassigned Tickets")
{
	$id = $_SESSION["id"];
	$_SESSION["unassigned"] = "and Admins.id = 9"; 
}
if(isset($_POST["adminChoice"]) and $_POST["adminChoice"] == "View Regardless of Assignment")
{
	$_SESSION["unassigned"] = "";
}
$un = $_SESSION["unassigned"];


if($_POST["adminChoice"] == "View tickets from this Submitter")
{
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$singleperson = "and Ticket_Details.fname = '$fname' and Ticket_Details.lname = '$lname'";
}

if ($_POST["adminChoi"] == "View") {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
}
else
{
	$singleperson = "";
}

$query = "select Tickets.id, thedate, fName, lName, Ticket_Details.email, subject, Admins.name, status, techId, Admins.id 
	from Tickets, Ticket_Details, Admins
	where $allOpen Tickets.id = Ticket_Details.id and techId = Admins.id $my $un $singleperson
	order by $sort";

$result = mysql_query($query);
if($result)
{
	$num_rows = mysql_num_rows($result);
}
else
{
	$num_rows = 0;
}
?>






<html>
<head>
<title>Admin Page</title>

<SCRIPT type = "text/javascript">

function setSelect(val)
{
	var sel = document.getElementById('selectVal');
	if(sel)
	{
		sel.value = val;
	}
}
</SCRIPT>

</head>
<body>

<center>
<?php
if($_SESSION["allOpen"] == "")
{
	echo "All Technical Support Tickets";
}
else
{
	echo "Open Technical Support Tickets";
}
?>
</center>
</br><table border = "border" align = center>
<tr align = center>
<td>Ticket #</td>
<td>Received</td>
<td>Sender Name</td>
<td>Sender Email</td>
<td>Subject</td>
<td>Tech</td>
<td>Status</td>
<td>Select</td>
</tr>

<form id = "selectForm" action="ticket.php" method = "POST" style="display: inline;">

<?php

for($i = 0; $i < $num_rows; $i++)
{
	$row = mysql_fetch_array($result);	
	echo "<tr>";	
	echo "<td>";
	echo $row[0];
	echo "</td>";
	echo "<td>";
	echo $row[1];
	echo "</td>";
	echo "<td>";
	echo $row[2]." ".$row[3];
	echo "</td>";
	echo "<td>";
	echo $row[4];
	echo "</td>";
	echo "<td>";
	echo $row[5];
	echo "</td>";
	echo "<td>";
	echo $row[6];
	echo "</td>";
	echo "<td>";
	echo $row[7];
	echo "</td>";
?>
	<td><input type = "radio" name = "selectRadio" value="<?php echo $row[0] ?>" onClick = "setSelect(<?php echo $row[0] ?>)"></td> 
       </tr>
<?php
}

?>
</form>
<form name = "adminForm" action="admin.php" method = "POST" style="display: inline;">

<tr align = center>
<?php
for($i = 0; $i < 5; $i++)
{
	echo "<td>Sort By <input type = \"radio\" name = \"sortby\" value= $i></td>";
}
?>

<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</td>
</table>
<center>
</br>


<?php
if($_SESSION["allOpen"] == "")
{
	?><input type = "submit" name = "adminChoice" value = "View Open Tickets" /><?php
	?><input type = "submit" name = "adminChoice" value = "View Open Tickets"/><?php
}
else
{
	?><input type = "submit" name = "adminChoice" value = "View All Tickets" /><?php
}
?>
<input type = "submit" name = "adminChoice" value = "Sort" />

</form>
<form id = "selectForm" action="ticket.php" method = "POST" style="display: inline;">

<input type = "submit" name = "adminChoice" value = "View Selected Ticket" />
<textarea cols = "0" id = "selectVal" name = "selectVal" value = "" style = "visibility: hidden; display: inline;"></textarea>
</br>

</form>

<form name = "adminForm" action="admin.php" method = "POST" style="display: inline;">
<?php
if($_SESSION["my"] == "")
{
	?><input type = "submit" name = "adminChoice" value = "View My Tickets" /><?php
}
else
{
	?><input type = "submit" name = "adminChoice" value = "View All Techs Tickets" /><?php
}
?>

<input type = "submit" name = "adminChoice" value = "Logout" />
<input type = "submit" name = "adminChoice" value = "logout"/>


<?php
if($_SESSION["unassigned"] == "")
{
	?><input type = "submit" name = "adminChoice" value = "View Unassigned Tickets" /><?php
}
else
{
	?><input type = "submit" name = "adminChoice" value = "View Regardless of Assignment" /><?php
}

?>

</br>
</center>
</form>
</body>
</html>
