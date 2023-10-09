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
                <div class="form-details">
                  <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="">Select Product</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected>Select One</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="3">Four</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                         Title
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="amount">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="">Coupon Parcent/Price</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected>Select One</option>
                          <option value="1">Price</option>
                          <option value="2">Percentage</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                         Amount
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="amount">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Start Date
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="date">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          End Date
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="date">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                         Use Limit
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="amount">
                      </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <label class="form-label">Coupon Type</label>
                      <div class="d-flex justify-content-start">
                        <div class="form-check me-3">
                          <input class="form-check-input shadow-none" type="checkbox" id="check0" name="check0"
                            value="top"><label class="form-check-label" for="check0">Top Offer Today</label>
                        </div>
                        <div class="form-check me-3"><input class="form-check-input shadow-none" type="checkbox" id="check1"
                            name="check1" value="daily"><label class="form-check-label" for="check1">Daily Sales</label>
                        </div>
                        <div class="form-check"><input class="form-check-input shadow-none" type="checkbox" id="check1"
                            name="check1" value="daily"><label class="form-check-label" for="check1">Special Price</label>
                        </div>
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