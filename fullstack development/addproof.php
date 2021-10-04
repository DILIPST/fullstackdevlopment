<html>
    <head>
    <meta charset="utf-8">
		<title>Raise My Voice</title>
        <link rel = "icon" href = "Like.png" type = "image/x-icon">
		<link rel="stylesheet" href="Raise.css">
    
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
        <h1 colspan="100px" class="a">
		<br> Raise My Voice<br> &emsp; </h1>
        <center>
        <h1> upload your proof</h1>
            <form action=""method="POST" enctype="multipart/form-data">

            <label > enter the complaint number</label><br>
            <input type="number" name="cnumber" placeholder="enter the complaint number"/><br>

            <label > choose a proof</label><br>
            <input type="file" name="image" id="image" /><br>

            <input type="submit" name="upload" value="upload image">
    </form>
</center>
    </body>
</html>
<?php
$connection= mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'proof2');

if(isset($_POST['upload']))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));   
   
    
    $query="INSERT INTO  `proof` (`cnumber`,`image`) VALUES('$cnumber','$file')" ;
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo'<script type="text/javascript"> alert(" proof  uploaded")</script>';
    }
    else
    {
       echo'<script type="text/javascript"> alert(" proof not uploaded")</script>';
    }
}

?>





