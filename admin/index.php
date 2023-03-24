           <!DOCTYPE html>
           <html>
           <head>
               <meta charset="utf-8">
               <title></title>
               <link rel="stylesheet" type="text/css" href="assets/css/style.css">
           </head>
           <body>
            <div class="container">
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
                <?php include 'assets/footer.php';?>
                </div>
           
           </body>
           </html>
           

            
