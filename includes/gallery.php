<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Amazing Gallery</h1>
              <span class="color-text-a">Grid gallery</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="../index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="news-grid grid">
      <div class="container">
        <div class="row">
            <?php
            include("../autoload.php");
            include("conn.php");
            $admin = new AdminData();
            $admin->selectBlog();
            foreach ($admin->data as $post):?>
                
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                    <img src="../admin/assets/img/blogimg/<?php echo $post['image'];?>" alt="" class="img-b img-fluid"  style="width:100%; height:350px; object-fit: cover; object-position: center;">
                </div>
                
              </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
          
          <?php
          
            //include_once 'includes/pagination.php';
          ?>
        
      </div>
    </section>

</body>
</html>