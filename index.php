<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Load More</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>

	<div class="container">

		<div class="page-header">
			<h1>Load more with jQuery</h1>
		</div>

		<ul class="blog-posts">
			<?php
				//open database connection
				$dbc = mysqli_connect('localhost', 'root', 'password', 'blog') or die('Could not connect to database');
				//fetch first four posts
				$query = "SELECT * FROM posts LIMIT 4";
				$result = mysqli_query($dbc, $query);
				foreach($result as $row){
					echo '<li>';
					echo '<h3>' . $row['title'] . '</h3>';
					echo '<p>' . $row['text'] . '</p>';
					echo '</li>';
				}
				//close database connection
				mysqli_close($dbc);
			?>
		</ul>

		<ul class="pager">
  			<li><a href="#">Load more</a></li>
		</ul>

	</div>	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/load-more.js"></script>
    <script type="text/javascript">

    	$('.pager li').loadMore({count: 4});

    </script>
</body>
</html>
