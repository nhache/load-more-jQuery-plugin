<?php

	//check for request
	if(isset($_SERVER['REQUEST_METHOD'])){

		//get data from ajax call
		$start = intval($_POST['start']);
		$count = intval($_POST['count']);

		//open database connection
		$dbc = mysqli_connect('localhost', 'root', 'password', 'blog') or die('Could not connect to database');
		//fetch next four posts
		$query = "SELECT * FROM posts LIMIT $count OFFSET $start";
		$result = mysqli_query($dbc, $query);
		$data = [];
		while($row = mysqli_fetch_object($result)){
			$data[] = $row;
		}

		//echo json of data
		echo '{"posts": ' . json_encode($data) . '}';

		//close database connection
		mysqli_close($dbc);
	}
