<?php
include('config.php');

$myname = $_POST['id'];
$email= $_POST['id2'];
$department = $_POST['id3'];
$roll = (int) $_POST['id4'];
$sub1 = $_POST['id5'];
$mark1 = $_POST['id6'];
$sub2 = $_POST['id7'];
$mark2 = $_POST['id8'];
$sub3 = $_POST['id9'];
$mark3 = $_POST['id10'];
$remarks = $_POST['id11'];

$abc = "INSERT INTO info(`name`,`email`,`depart`,`roll`,`sub1`,`submark1`,`sub2`,`submark2`,`sub3`,`submark3`,`remarks`) VALUES('$myname','$email','$department','$roll','$sub1','$mark1','$sub2','$mark2','$sub3','$mark3','$remarks')";
if(mysqli_query($conn,$abc)){
	echo "Successful";
}
?>
