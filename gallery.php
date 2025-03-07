
<?php
include './db.connection/db_connection.php';


?>
<?php include 'header.php'; ?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Gallery</h2>
            </div>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="gallery.php">Gallery</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- <section>
    <div class="container my-5">
        <h1 class="text-center gallery_heading">Gallery</h1>
        <div class="row">
            <div class="col-md-4 col-12 gallery_section">
                <img src="img/images/31.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section"> 
                <img src="img/images/31.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section"> 
                <img src="img/images/32.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section"> 
                <img src="img/images/33.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section">
                 <img src="img/images/34.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section">
                 <img src="img/images/35.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section">
                 <img src="img/images/36.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section">
                <img src="img/images/37.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section"> 
                <img src="img/images/38.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section"> 
                <img src="img/images/39.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-12 gallery_section">
                 <img src="img/images/40.png" alt="" class="img-fluid">
            </div>
      
        </div>
    </div>
</section> -->

<main id="main">
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title" style="margin-top: 50px">
            <h2>Our Works</h2>
          </div>
        </div>



        <div class="container">
          <div class="row">
            <?php
            // Fetch image data from database
            $image_sql = "SELECT id, title, image_path, created_at FROM image_uploads ORDER BY created_at DESC";
            $image_result = $conn->query(query:$image_sql);

            if ($image_result->num_rows > 0) {
              while ($image_row = $image_result->fetch_assoc()) {
                $image_base = "admin/public/";
                $image_path = $image_base . $image_row['image_path'];
                echo "
                                              <div class='col-12 col-md-4 col-custom my-2'>
                                                  <div class='card card-custom'>
                                                      <img src='{$image_path}' class='card-img-top' alt='{$image_row['title']}'>
                                                  
                                                      <div class='card-body'>
                                                          <h5 class='card-title'>{$image_row['title']}</h5>
                                                          <p class='card-text'>Uploaded on: {$image_row['created_at']}</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          ";
              }
            } else {
              echo "<p>No images found.</p>";
            }

            $conn->close();
            ?>
          </div>
        </div>


      </section>
      <!-- End Contact Section -->
    </main>


<?php include 'footer.php'; ?>