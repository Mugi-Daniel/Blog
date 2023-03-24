<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>

</head>
<body>
	
	<?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    $filepath = "includes/".$page.".php";
                    if(file_exists($filepath)){
                        include $filepath;
                    } else {
                        include 'includes/error.php';
                    }
                } else {
                    include 'includes/home.php';
                }
                ?>

</body>
</html>

