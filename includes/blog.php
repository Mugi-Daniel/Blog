    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
      <div class="container">
        <div class="row">
            <?php
            include("autoload.php");
            include("conn.php");
            $admin = new AdminData();
            $admin->selectBlog();
            foreach ($admin->data as $post):?>
                
            <div class="col-md-4" style="padding-left: 30px;padding-top: 20px;">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                    <img src="admin/assets/img/blogimg/<?php echo $post['image'];?>" alt="" class="img-b img-fluid"  style="width:85%; height:450px; object-fit: cover; object-position: center; object-fit: cover;">
                </div>
                <div class="card-overlay" style="width:50%;">
                  <div class="card-header-b">
                    <div class="card-title-b">
                      <h2 class="title-2">
                          <h2><?php echo $post['title'];?></h2>
                      </h2>
                    </div>
                    <div class="card-title-b">
                      <a href="includes/details.php?id=<?php echo $post['id'];?>"style="font-weight: bold; color: purple; text-decoration: none;"><?php echo $post['details'];?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
          
          
      </div>
    </section>