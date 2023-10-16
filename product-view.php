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

          <!-- view item part -->

          <div class="row">
            <div class="col-lg-7">
              <div class="row">
                <div class="col-lg-12">
                  <div class="border-block item-view">
                    <div class="info">
                      <h5 class="label-text">Product Information</h5>
                      <table class="table table-bordered border-secondary">
                        <tbody>
                          <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>lsdjld</td>
                          </tr>
                          <tr>
                            <td>Aditional Name</td>
                            <td>:</td>
                            <td>lsdjld</td>
                          </tr>
                          <tr>
                            <td>Code</td>
                            <td>:</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td>Category</td>
                            <td>:</td>
                            <td>xyz</td>
                          </tr>
                          <tr>
                            <td>Unit</td>
                            <td>:</td>
                            <td>pice</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="border-block feature-block item-view">
                    <div class="info">
                      <h4 class="label-text">Product Features</h4>

                      <div class="table-list">
                        <div class="table-list-body table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <!-- <th style="min-width: 90px;">Authority</th> -->
                                <th style="min-width: 110px;">Name</th>
                                <th style="min-width: 110px;">Id</th>
                                <th style="min-width: 150px;">Category</th>
                                <th style="min-width: 150px;">Brand</th>
                                <th style="min-width: 110px;">Model No</th>
                                <th style="min-width: 110px;">Price</th>
                                <th style="min-width: 100px;">Quantity</th>
                                <th style="min-width: 130px;">Entry Date</th>
                                <th style="min-width: 130px;">Status</th>
                                <!-- <th style="min-width: 130px;">Action</th> -->
                              </tr>
                            </thead>
                            <tbody style="border-top: 0">
                              <tr>
                                <td>
                                  <span>kslfdg</span>
                                </td>
                                <td>
                                  <span>54</span>
                                </td>
                                <td>
                                  <span>fdffg</span>
                                </td>
                                <td>
                                  <span>ghgh</span>
                                </td>
                                <td>
                                  <span>dolkf-56</span>
                                </td>
                                <td>
                                  <span>10200</span>
                                </td>
                                <td>
                                  <span>10</span>
                                </td>
                                <td>
                                  <span>02.21.2023</span>
                                </td>
                                <td class="status status-active">
                                  <span>active</span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <span>kslfdg</span>
                                </td>
                                <td>
                                  <span>54</span>
                                </td>
                                <td>
                                  <span>fdffg</span>
                                </td>
                                <td>
                                  <span>ghgh</span>
                                </td>
                                <td>
                                  <span>dolkf-56</span>
                                </td>
                                <td>
                                  <span>10200</span>
                                </td>
                                <td>
                                  <span>10</span>
                                </td>
                                <td>
                                  <span>02.21.2023</span>
                                </td>
                                <td class="status status-active">
                                  <span>active</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="border-block item-view">
                <div class="info">
                  <h5 class="label-text">Media</h5>
                </div>
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
                    <div class="image">
                      <img src="./images/1.png" alt="not found">
                    </div>
                  </div>
                </div>
                <!-- </div> -->
              </div>
            </div>
          </div>


          <!-- view item part -->



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