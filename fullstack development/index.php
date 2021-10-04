<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Raise My Voice</title>
  <link rel = "icon" href = "Like.png" type = "image/x-icon">
  <link rel="stylesheet" href="Raise.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="main.css">
</head>
<body>
<table class="a">
			<tr>
			  <td height="40" align="center">
				  <img alt="" src="1.png" width="250px" height="200px" align="absmiddle"></td></tr>
		</table>
        <div class="topnav">
            <a href="Viewcomp.php">View Complaints</a>
			<a href="Filecomp.php" class="active">File Complaint</a>
			<a href="Home.php">Home</a>
		</div>
        <table cellpadding="0px" class="a">
		<tr><td style="text-align: center; font-family: sans-serif; font-size: 15px; color: #000000;">
			<b><i>Raise My Voice</i> is the platform to raise your voice against unjust.<br>This is the place where your problems are solved.
			<br>Solution for the cause of revolt.</b><br>
			</td></tr>
		</table>
  <div class="posts-wrapper">
   <?php foreach ($posts as $post): ?>
   	<div class="post">
      <?php echo $post['text']; ?>
      <div class="post-info">
	    <!-- if user likes post, style button differently -->
      	<i <?php if (userLiked($post['id'])): ?>
      		  class="fa fa-thumbs-up like-btn"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-up like-btn"
      	  <?php endif ?>
      	  data-id="<?php echo $post['id'] ?>"></i>
      	<span class="likes"><?php echo getLikes($post['id']); ?></span>
      	
      	&nbsp;&nbsp;&nbsp;&nbsp;

	    <!-- if user dislikes post, style button differently -->
      </div>
   	</div>
   <?php endforeach ?>
  </div>
  <script src="scripts.js"></script>
</body>
</html>