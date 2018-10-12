<?php

$title = filter_input(INPUT_POST, 'title');
$description = filter_input(INPUT_POST, 'description');
$link = filter_input(INPUT_POST, 'link');
$pic = filter_input(INPUT_POST, 'pic');

if (!empty($title)){
	if (!empty($description)){
		if(empty($link)){
			if(empty($pic)){
$host = "";
$dbusername = "";
$dbpassword = "";
$dbname = "";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Err('.mysqli_connect_error() .') '
		. mysqli_connect_error());
}
else{
	$sql = "ISERT INTO //placeholder (title, description, link, pic)
	values ('$title','description','link','pic')";
	if ($conn->query($sql)){
		echo "New record is inserted successfully";
	}
	else{
		echo "Error" .$sql ."<br>". $conn->error;
	}
	$conn->close();
}
}
else{
	echo "Image should not be empty";
	die();
}
else{
	echo "Link should not be empty";
	die();
}

else{
	echo "Description should not be empty";
	die();

}
else{
	echo "Title should not be empty";
	die();
}
?>