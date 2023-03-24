<?php
$title = "CONTACT LIST";
   include "../../includes/conn.php";
   include"../autoload.php";
   $admin = new AdminData();
   
   if(isset($_POST["title"]) && isset($_POST['details'])){
       $admin->title = mysqli_real_escape_string($conn, filter_input(INPUT_POST, "title"));
       $admin->details = mysqli_real_escape_string($conn,$_POST["details"]);
       $file = $_FILES["image"];
      
       
       $fileName = $_FILES["image"]["name"];
       $fileTmpName = $_FILES["image"]["tmp_name"];
       $fileSize = $_FILES["image"]["size"];
       $fileError = $_FILES["image"]["error"];
       $fileType = $_FILES["image"]["type"];
       
       
       $fileExt = explode('.', $fileName);
       $fileActualExt = strtolower(end($fileExt));
       
       $allowed = array('jpg', 'jpeg', 'png', 'pdf');
       if(in_array($fileActualExt, $allowed)){
           if($fileSize < 20000000){
                $admin->fileNameNew = md5(rand(1000,20000)).$fileName;
                $admin->post_date = getdate();
                $fileDestination = '../assets/img/blogimg/'.$admin->fileNameNew;
                if(move_uploaded_file($fileTmpName,$fileDestination)){
                    $admin->addBlog();
                } else {
                   echo '<script>alert("Something is not right");</script>'; 
                }


            }else{
                
                echo '<script>alert("File is too large");</script>';
            }
           
       }else{
           echo '<script>alert("invalid datatype");</script>';
       }
       
       
   }
?>

<div class="container-one" style="text-align: center;">
  <h3>Add Post</h3>
  <form class="row needs-validation" method="post" enctype="multipart/form-data" action="" name="blog-form">
  <div class="form-group">
  <label for="validationCustom01"> Blog Title:</label>
  <input class="form-control" type="text" placeholder="Post Title" required="" name="title">
  </div><br>
  <div class="form-group">
      <label>Enter some Details:</label>
      <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="details"></textarea>
    </div><br>
    <div class="form-group">
        <label>Select Image:</label>
        <input type="file" name="image" required="required">
    </div><br>
    <div class="btn-showcase">
        <button class="btn btn-primary" type="submit" name="submit">Post</button>
        <input class="btn btn-light" type="reset" value="Discard" name="reset">
      </div><br>
      <button class="btn btn-primary" type="submit" name="submit"><a href="../../index.php">Go Home</a></button>
    </form>
</div>
