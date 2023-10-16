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
              <div class="row">
                <div class="col-lg-8">
                  <div class="product-block border-block">
                    <div class="form-details">
                      <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="">Select Category</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                              <option selected="">X</option>
                              <option value="1">Y</option>
                              <option value="2">Z</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="">Select Subcategory</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                              <option selected="">A</option>
                              <option value="1">B</option>
                              <option value="2">C</option>
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
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Name
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="product name">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="">Unit</label>

                            <select class="form-select shadow-none" aria-label="Default select example">
                              <option selected="">One</option>
                              <option value="1">Two</option>
                              <option value="2">Three</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="">Brand</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                              <option selected="">xyz</option>
                              <option value="1">abc</option>
                              <option value="2">mno</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Product No
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="prduct no">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Model No
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="model no">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Manufacture Name
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <!-- <input class="" type="date"> -->
                            <input class="" type="text" placeholder="manufacture name">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Manufacture Country
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="manufacture country">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Country of Origin
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="original country">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Product Date
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="date">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Tag
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
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
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Product Price
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="product price">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Retail Price
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="retail price">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Dealer Price
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="dealer price">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Discount Price
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="discount price">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-block border-block">
                    <div class="row">
                      <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                        <label class="form-label">Status</label>
                        <div class="d-flex justify-content-start">
                          <div class="form-check me-3">
                            <input class="form-check-input shadow-none" type="radio" id="radio0" name="status" value="active"><label class="form-check-label" for="radio0">Active</label>
                          </div>
                          <div class="form-check"><input class="form-check-input shadow-none" type="radio" id="radio1" name="status" value="deactive"><label class="form-check-label" for="radio1">Deactive</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <label class="form-label">Exchangeable</label>
                        <div class="d-flex justify-content-start">
                          <label class="switch">
                            <input type="checkbox"><span class="switch-state"></span>
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <label class="form-label">Refundable</label>
                        <div class="d-flex justify-content-start">
                          <label class="switch">
                            <input type="checkbox" checked><span class="switch-state"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="border-block">
                    <h4 class="label-text">Media</h4>
                    <div class="media-block mb-3">
                      <div class="row">
                        <div class="col-md-6 col-lg-12 col-xxl-6">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-element">
                                <label for="" class="d-block w-100">Media Type
                                  <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="You can add multiple items"><i class="fa-solid fa-circle-info"></i></span>
                                </label>
                                <select class="form-select shadow-none" aria-label="Default select example">
                                  <!-- <option selected="">select</option> -->
                                  <option value="1">Image</option>
                                  <option value="2">Video</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-element">
                                <label for="" class="d-block w-100">
                                  Video URL
                                  <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="You can add multiple items"><i class="fa-solid fa-circle-info"></i></span>
                                </label>
                                <input class="" type="text" placeholder="Type url here...">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xxl-6 d-flex align-items-center">
                          <div class="image position-relative">
                            <img src="./images/2.jpg" alt="not found">
                            <div class="upload-box">
                              <input type="file" id="upload" class="d-none" accept="image/*">
                              <label for="upload">
                                <i class="fas fa-cloud-upload-alt"></i>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-lg-3">
                        <div class="col-lg-12">
                          <div class="d-flex align-items-center justify-content-end pt-2">
                            <button type="button" class="cmn-delete cmn__btn me-2"><i class="bi bi-trash3"></i></button>
                            <button class="cmn__btn"><i class="bi bi-plus fs-6"></i></button>
                          </div>
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