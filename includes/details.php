<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];

}else{
	echo "<h2 class='text-danger'>No data found in this Blog</h2>";
}

?>
<?php ?>
<?php 
include('../autoload.php');
include('conn.php');
$admin = new AdminData();
$admin->selectsingleBlog($id);
foreach ($admin->singledata as $post):?>
            <div class="container">
    		<div class="row">
            <div class="card-title-b">
                      <h2 style="font-weight: bold; color: purple; text-decoration: none;"><?php echo $post['details'];?></h2>
                    </div>
         <form method="POST" action="senddata.php">
		<label>Nick name:</label>
		<input type="hidden" name="idd" value=<?php echo $id;?>>
		<input type="text" class="form-control" name="name" placeholder="Enter nick name" required="required">
		<label>Comment</label>
		<input type="text" class="form-control" name="comment" placeholder="Enter a comment" required="required">
		<button class="btn btn-primary" name="submit">Send comment</button>
		</form>
                </div></div>

            <?php
            endforeach;
			?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Details</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
	

</body>
</html>