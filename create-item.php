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

          <!-- add button start-->
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
          <!-- add button end-->

          <!-- create item form part start -->
          <form action="#">
            <div class="row">
              <div class="col-lg-8">
                <div class="border-block">
                  <div class="employee-block">
                    <h4 class="label-text">Item Information</h4>
                    <div class="form-details">
                      <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Name
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Additional Name
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="Additional Name">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">Category
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                              <option selected="">x</option>
                              <option value="1">y</option>
                              <option value="2">z</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Item code <sup class="text-danger">*</sup>
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="Additional Name">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-8 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">Unit
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                              <select class="form-select shadow-none" aria-label="Default select example">
                                <option selected="">One</option>
                                <option value="1">Two</option>
                                <option value="2">Three</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-8 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                          <div class="form-element">
                            <label for="" class="d-block w-100">Unit
                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                              <select class="form-select shadow-none" aria-label="Default select example">
                                <option selected="">One</option>
                                <option value="1">Two</option>
                                <option value="2">Three</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-4 col-sm-6 col-md-6 col-xl-4 d-flex align-items-center justify-content-end">
                          <button type="button" class="cmn-delete cmn__btn me-3"><i class="bi bi-trash3"></i></button>
                          <button class="plus__ cmn__btn"><i class="bi bi-plus fs-6"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border-block feature-block">
                  <div class="employee-block">
                    <h4 class="label-text">Generic Item Features</h4>
                    <div class="table-list mt-3">
                      <div class="table-list-body table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th style="min-width: 90px;">Authority</th>
                              <th style="min-width: 110px;">Sequence</th>
                              <th style="min-width: 230px;">Feature Name</th>
                              <th style="min-width: 180px;">Element</th>
                              <th style="min-width: 110px;">Data Source</th>
                              <th style="min-width: 180px;">R./C. Data</th>
                              <th style="min-width: 100px;">Status</th>
                              <th style="min-width: 130px;">Action</th>
                            </tr>
                          </thead>
                          <tbody style="border-top: 0">
                            <tr>
                              <td style="vertical-align: middle;">
                                <div class="form-check">
                                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <input class="" type="text" value="1">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <input class="" type="text" placeholder="Feature Name">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <select class="form-select shadow-none" aria-label="Default select example">
                                    <option selected="">One</option>
                                    <option value="1">Two</option>
                                    <option value="2">Three</option>
                                  </select>
                                </div>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td class="status status-active">
                                <span>active</span>
                              </td>
                              <td class="text-end">
                                <!-- <button class="cmn__btn"><i class="bi bi-plus fs-6"></i></button> -->
                              </td>
                            </tr>
                            <tr>
                              <td style="vertical-align: middle;">
                                <div class="form-check">
                                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <input class="" type="text" value="1">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <input class="" type="text" placeholder="Feature Name">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <select class="form-select shadow-none" aria-label="Default select example">
                                    <option selected="">One</option>
                                    <option value="1">Two</option>
                                    <option value="2">Three</option>
                                  </select>
                                </div>
                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td class="status status-deactive">
                                <span>deactive</span>
                              </td>
                              <td class="text-end">
                                <button type="button" class="cmn-delete cmn__btn ms-2"><i class="bi bi-trash3"></i></button>
                              </td>
                            </tr>
                            <tr>
                              <td style="vertical-align: middle;">
                                <div class="form-check">
                                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <input class="" type="text" value="1">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <input class="" type="text" placeholder="Feature Name">
                                </div>
                              </td>
                              <td>
                                <div class="form-element">
                                  <select class="form-select shadow-none" aria-label="Default select example">
                                    <option selected="">One</option>
                                    <option value="1">Two</option>
                                    <option value="2">Three</option>
                                  </select>
                                </div>
                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td class="status status-active">
                                <span>deactive</span>
                              </td>
                              <td class="text-end">
                                <button type="button" class="cmn-delete cmn__btn ms-2"><i class="bi bi-trash3"></i></button>
                                <button class="plus__ cmn__btn"><i class="bi bi-plus fs-6"></i></button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
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
            <a href="item.php">
              <button class="submit-btn">Submit</button>
            </a>
          </form>
          <!-- create item form part end -->

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
  <script src="js/script.js"></script>
  <!-- script file  end-->
</body>

</html>