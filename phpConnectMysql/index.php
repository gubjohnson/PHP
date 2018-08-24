<?php 
	require('config/config.php');
	require('config/db.php');
	ini_set("display_errors","On");
	error_reporting(E_ALL);


	//Create Query
	$query = 'SELECT * FROM posts ORDER BY created_at DESC';

	//Get Result
	$result = mysqli_query($conn, $query);


	// Fetch Data
	// $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$posts = array(); // array variable
	        	
	while ( $postsEach = mysqli_fetch_assoc($result)) {
		$posts[] = $postsEach;

	}
	
	// var_dump($posts);


	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
 ?>

<?php include('inc/header.php'); ?>
	 	<div class="container">
		 	<h1>Posts</h1>
		 	<?php foreach ($posts as $post) : ?>
		 		<h3><?php echo $post['title']; ?></h3>

		 		<small>Created on <?php echo $post['created_at']; ?>

		 		<?php echo $post['author']; ?>
		 		</small>

		 		<p><?php echo $post['body']; ?></p>

		 		<a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
		 	<?php endforeach; ?>
		 </div>
<?php include('inc/footer.php'); ?>

