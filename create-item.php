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

          <!-- add employe form part start -->
          <form action="#">
            <div class="row">
              <div class="col-lg-8">
                <div class="border-block">
                  <div class="employee-block">
                    <h4 class="label-text">Generic Item Information</h4>
                    <div class="form-details">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-element d-flex flex-wrap">
                            <label for="" class="d-block w-100">
                              Banner <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
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
                              Image One <sup class="text-danger">*</sup> <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
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
                              Image Two <sup class="text-danger">*</sup> <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
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
                              Image Three <sup class="text-danger">*</sup> <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
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

                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Additional Name

                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="Additional Name">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-element">
                            <label for="" class="d-block w-100">
                              Item code <sup class="text-danger">*</sup>

                              <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                            </label>
                            <input class="" type="text" placeholder="Additional Name">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-element">
                            <label for="">Category</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                              <option selected="">1</option>
                              <option value="1">2</option>
                              <option value="2">3</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border-block">
                  <div class="employee-block">
                    <h4 class="label-text">Unit</h4>
                    <div class="form-details">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-element">
                            <select class="form-select shadow-none" aria-label="Default select example">
                              <option selected="">One</option>
                              <option value="1">Two</option>
                              <option value="2">Three</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-2 ms-auto text-end">
                          <button class="plus__ cmn__btn"><i class="bi bi-plus fs-6"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="form-details">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-element">
                            <select class="form-select shadow-none" aria-label="Default select example">
                              <option selected="">One</option>
                              <option value="1">Two</option>
                              <option value="2">Three</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-2 ms-auto text-end">
                          <button type="button" class="delete cmn__btn"><i class="bi bi-trash3"></i></button>
                          <button class="plus__ cmn__btn"><i class="bi bi-plus fs-6"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border-block">
                  <div class="employee-block">
                    <h4 class="label-text">Generic Item Features</h4>

                    <div class="table-responsive">
                      <table class="table table-striped table-bordered mb-0">
                        <thead class="table-dark">
                          <tr>
                            <th style="width: 90px;">Authority</th>
                            <th style="width: 110px;">Sequence</th>
                            <th style="width: 230px;">Feature Name</th>
                            <th style="width: 180px;">Element</th>
                            <th style="width: 110px;">Data Source</th>
                            <th>R./C. Data</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
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
                            <td class="text-end">
                              <button type="button" class="delete cmn__btn"><i class="bi bi-trash3"></i></button>
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
                            <td class="text-end">
                              <button type="button" class="delete cmn__btn"><i class="bi bi-trash3"></i></button>
                              <button class="plus__ cmn__btn"><i class="bi bi-plus fs-6"></i></button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="border-block">
                  <h4 class="label-text">Media</h4>
                  <div class="form-element">
                    
                    <div class="upload-box">
                      <input class="d-none" type="file" id="file">
                      <label for="file"><i class="bi bi-cloud-arrow-up-fill"></i> Upload image</label>
                    </div>
                    <div class="d-flex">
                    <div class="image-box position-relative text-center">
                      <img src="images/1.png" alt="prf">
                      <div class="overlay position-absolute top-0 start-0 w-100 h-100">
                        <i class="bi bi-x position-absolute close"></i>
                      </div>
                    </div>
                    <div class="image-box position-relative text-center">
                      <img src="images/1.png" alt="prf">
                      <div class="overlay position-absolute top-0 start-0 w-100 h-100">
                        <i class="bi bi-x position-absolute close"></i>
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
          
          <!-- add employe form part end -->



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