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
          <!-- add or back button start -->
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
          <!-- add or back button end -->

          <!-- search header -->
          <div class="search-section">
            <div class="row">
              <div class="col-sm-7 col-lg-9 col-xxl-10">
                <form action="">
                  <div class="row">

                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="">Search by Name</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected>Select Name</option>
                          <option value="1">abc</option>
                          <option value="2">pqr</option>
                          <option value="3">xyz</option>
                          <option value="3">ffg</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="">Type Text</label>
                        <input type="text" placeholder="Type here...">
                      </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 align-self-end">
                      <button type="submit" class="search-btn">
                        <div class="btn-front"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <div class="btn-back"><i class="fa-solid fa-magnifying-glass"></i></div>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- table data showing sorting & number of data -->
          <?php
          include("layout/sorting.php")
          ?>
          <!-- table data list -->
          <div class="table-list mt-3">
            <div class="table-list-body table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="min-width:30px">#</th>
                    <th style="min-width:130px">
                      <span class="table-title">Name
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Icon
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Date
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>

                    <th style="min-width:100px">
                      <span class="table-title">
                        Status
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">Action</th>
                  </tr>
                </thead>
                <tbody style="border-top: 0">
                  <tr>
                    <td><span>1</span></td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td>
                      <div class="table-image">
                        <img src="images/profile.jpg" alt="">
                      </div>
                    </td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status status-success"><span>active</span></td>
                    <td><span>
                        <a href="product-view.html">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view"><i class="fa-solid fa-eye"></i></span>
                        </a>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                    </td>
                  </tr>
                  <tr>
                    <td><span>1</span></td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td>
                      <div class="table-image">
                        <img src="images/profile.jpg" alt="">
                      </div>
                    </td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status status-danger"><span>inactive</span></td>
                    <td><span>
                        <a href="product-view.html">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view"><i class="fa-solid fa-eye"></i></span>
                        </a>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- number of data and pagination -->
          <?php
          include("layout/list-footer.php")
          ?>
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