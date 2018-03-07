<?php
	$servername='localhost';
	$username='ieeevd1j_abhi';
	$password='infinity123';
	$dbname='ieeevd1j_site';
	$superresponse=[];
	$response=[]; 
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		$sql='SELECT * FROM events';
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				array_push($response,$row);
			}
		}
		//array_push($superresponse,$response);
		//$superresponse=array_fill_keys($superresponse,'event');
		echo json_encode($response);
	}
	$conn->close();
?>