<?php


$file = 'emails.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $_POST['name']." , ".$_POST['email']."\r\n";
// Write the contents back to the file
file_put_contents($file, $current);
	// require_once('mysqli_connect.php');
	
	// $email = $_POST['email'];
	// $name = $_POST['name'];
	// $sql = "select * from subcriber where email='$email'";
	// $result = mysqli_query($dbc, $sql);
	// if (mysqli_num_rows($result) > 0){
	// 	$response['status'] = 'error';
	// 	$response['message'] = "This email is already registered.";
	// 	echo json_encode($response);
	// } else {
	// 	$insert_sql = "insert into subcriber (name, email, date) values ('$name', '$email', now())";
	// 	if (mysqli_query($dbc, $insert_sql)) {
$response['status'] = 'success';
$response['message'] = "Registered successfully!";
echo json_encode($response);
	// 	} else {
	// 		$response['status'] = 'error';
	// 		$response['message'] = "Can not register.";
	// 		echo json_encode($response);
	// 	}
	// }
	// mysqli_close($dbc);
?>
