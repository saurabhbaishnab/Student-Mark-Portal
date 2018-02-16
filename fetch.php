<?php
include('config.php');

$reg = $_POST['id'];

$sql = "SELECT * FROM info WHERE `roll`='$reg'";	
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$roll=$row['roll'];
$depart =$row['depart'];
$name =$row['name'];
$email = $row['email'];
$sub1 = $row['sub1'];
$submark1 = $row['submark1']; 
$sub2 = $row['sub2'];
$submark2= $row['submark2'];
$sub3= $row['sub3'];
$submark3 = $row['submark3']; 
$remarks = $row['remarks'];

$json = array('roll' => $roll,
			'depart' => $depart,
			'name'=> $name,
			'email'=> $email,
			'sub1'=>$sub1,
			'submark1'=>$submark1,
			'sub2'=>$sub2,
			'submark2'=>$submark2,
			'sub3'=>$sub3,
			'submark3'=>$submark3,
			'remarks'=>$remarks
			);

echo json_encode($json);

mysqli_close($conn);
?>