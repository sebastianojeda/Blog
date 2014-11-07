<?php
//THIS ARE VARIABLES THAT HOLD A FUNCTION TO FILTER OR POSTS
$title = filer_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST , "post", FILTER_SANITIZE_STRING);
//these echo's output if our variables hav been filtered.
echo "<p>Title: $title</p>";
echo "<p>Post: $post</p>";