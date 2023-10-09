<!DOCTYPE html>
<html lang="en">

<?php
include("layout/head.php");
?>

<body class="sidebar">
  <!-- sidebar navigation start -->
  <section class="dashboard">
    <?php
    include("layout/sidebar.php");
    ?>

    <!-- main content start -->
    <div class="main-content-body">
      <?php
      include("layout/header.php")
      ?>

      <!-- content part start -->
      <div class="content-part">
        <div class="inner-content">

          <!-- add button -->
          <div class="row">
            <div class="col-12">
              <div class="btn-back position-relative">
                <a href="#" class="position-absolute btn-back-pos overflow-hidden">
                  <div class="combo">
                    <!-- if (back) -->
                    <!-- <i class="fa-solid fa-circle-left"></i> -->
                    <!-- <span>Back</span> -->
                    <!-- if (add) -->
                    <i class="fa-solid fa-circle-plus"></i>
                    <span>Add</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- add button -->

          <!-- add product form part start -->
          <div class="add-category-form mt-3">
            <form action="category.php">

              <div class="category-block border-block">
                <!-- <h4 class="label-text">Product Price</h4> -->
                <div class="form-details">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-element d-flex flex-wrap">
                        <label for="" class="d-block w-100">
                          User Image <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <div class="image-box position-relative">
                          <img src="images/prf.png" alt="prf">
                          <div class="overlay position-absolute top-0 start-0 w-100 h-100">
                            <i class="bi bi-x position-absolute close"></i>
                          </div>
                        </div>
                        <div class="upload-box">
                          <input class="d-none" type="file" id="file">
                          <label for="file"><i class="bi bi-cloud-arrow-up-fill"></i> Upload image</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Name
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="name">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Email
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="email">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Phone No
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="phone no">
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <label class="form-label">Status</label>
                      <div class="d-flex justify-content-start">
                        <div class="form-check me-3">
                          <input class="form-check-input shadow-none" type="radio" id="radio0" name="status"
                            value="active"><label class="form-check-label" for="radio0">Active</label>
                        </div>
                        <div class="form-check"><input class="form-check-input shadow-none" type="radio" id="radio1"
                            name="status" value="deactive"><label class="form-check-label" for="radio1">Deactive</label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <a href="product.php">
                <button class="submit-btn">Submit</button>
              </a>
            </form>
          </div>
          <!-- add product form part end -->

        </div>
      </div>
      <!-- content part end -->
      <!-- content part end -->
    </div>
    <!-- main content end -->
  </section>
  <!-- sidebar navigation end -->


  <!-- script file start -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/apexcharts v3.43.0.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->
  <!-- <script src="js/stock-prices.js"></script> -->
  <script src="js/script.js"></script>
  <!-- script file  end-->
</body>

</html>