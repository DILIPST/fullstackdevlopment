<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Like and Dislike system</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="posts-wrapper">
   <?php foreach ($post as $post): ?>
   	<div class="post">
      <?php echo $post['text']; ?>
      <div class="post-info">
	    <!-- if user likes post, style button differently -->
      	<i class="fa fa-thumbs-o-up like-btn"  data-i2d="<?php echo $post['id2'] ?>"></i>
      	<span class="likes"></span>
      	
      	&nbsp;&nbsp;&nbsp;&nbsp;

	    <!-- if user dislikes post, style button differently -->
      	<i 
          class="fa fa-thumbs-o-down dislike-btn" 
data-id2="<?php echo $post['id2'] ?>"></i>
      	<span class="dislikes"></span>
      </div>
   	</div>
   <?php endforeach ?>
  </div>
  <script src="scripts.js"></script>
</body>
</html>