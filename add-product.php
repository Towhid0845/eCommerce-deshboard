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

          <!-- add product form part start -->
          <div class="add-product-form mt-3">
            <form action="product.php">
              <div class="product-block border-block">
                <div class="form-details">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="">Select Category</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected="">X</option>
                          <option value="1">Y</option>
                          <option value="2">Z</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="">Select Subcategory</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected="">A</option>
                          <option value="1">B</option>
                          <option value="2">C</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="">Select Product</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected="">Product1</option>
                          <option value="1">Product2</option>
                          <option value="2">Product3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-block border-block">
                <h4 class="label-text">Product Specification</h4>
                <div class="form-details">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Name
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="product name">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="">Unit</label>

                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected="">One</option>
                          <option value="1">Two</option>
                          <option value="2">Three</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="">Brand</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected="">xyz</option>
                          <option value="1">abc</option>
                          <option value="2">mno</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Product No
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="prduct no">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Model No
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="model no">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Manufacture Name
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <!-- <input class="" type="date"> -->
                        <input class="" type="text" placeholder="manufacture name">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Manufacture Country
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="manufacture country">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Country of Origin
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="original country">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Product Date
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="date">
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Tag
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="type tag & hit enter">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-block border-block">
                <h4 class="label-text">Product Price</h4>
                <div class="form-details">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Product Price
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="product price">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Retail Price
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="retail price">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Dealer Price
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="dealer price">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Price
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="price">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Discount Price
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="discount price">
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
              <div class="product-block border-block">
                <h4 class="label-text">Product Price</h4>
                <div class="form-details">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-element d-flex flex-wrap">
                        <label for="" class="d-block w-100">
                          Image One <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
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
                      <div class="form-element d-flex flex-wrap">
                        <label for="" class="d-block w-100">
                          Image Two <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
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
                      <div class="form-element d-flex flex-wrap">
                        <label for="" class="d-block w-100">
                          Image Three <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
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
                      <div class="form-element d-flex flex-wrap">
                        <label for="" class="d-block w-100">
                          Image Four <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left"
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