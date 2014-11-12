<!--This require_once is conecting my config.php to my form.php-->
<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>
                            <!--This php code is taking me to my create-post.php 
                            file so that when i submit something on my blog that 
                            submition is stored in my create-post.php file-->
<form method="post" action="<?php echo $path . "controller/create-post.php";?>">
	<div>
		<label for="title">Title:</label>
		<input	type="" name="title"/>
	</div>
	<div>
		<label for="post">Post:</label>
		<textarea name="post"></textarea>
	</div>
     <!--This line of code allows us to submit code-->
	<div>
		<button type="submit">Submit</button>
	</div>
</form>