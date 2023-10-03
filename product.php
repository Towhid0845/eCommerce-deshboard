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
          <!-- search header -->
          <div class="search-section">
            <div class="row">
              <div class="col-sm-7 col-lg-9 col-xxl-10">
                <form action="">
                  <div class="row">

                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="">Select Category</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected>Select One</option>
                          <option value="1">Name</option>
                          <option value="2">p_no</option>
                          <option value="3">Email</option>
                          <option value="3">Mobile</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="">Search by</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected>Select One</option>
                          <option value="1">Name</option>
                          <option value="2">p_no</option>
                          <option value="3">Email</option>
                          <option value="3">Mobile</option>
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
          <div class="sorting-data mt-3">
            <div class="row">
              <div class="col-sm-6 col-lg-6 align-self-end">
                <div class="showing-number">
                  <span> Showing <span class="single-number">1</span> to <span class="single-number">
                      <div class="form-element mb-0 d-inline-block mx-1">
                        <select class="form-select sort-number shadow-none" aria-label="Default select example">
                          <option selected>100</option>
                          <option value="1">10</option>
                          <option value="2">20</option>
                          <option value="3">30</option>
                        </select>
                      </div>
                    </span> of <span class="single-number">4</span> entries </span>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6 ms-auto">
                <div class="print-option ms-2 mt-4 ms-sm-0 mt-sm-0 text-start text-sm-end">
                  <ul>
                    <li><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="printer" href=""><i class="bi bi-printer-fill"></i></a></li>
                    <li><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="pdf" href=""><i class="fa-solid fa-file-pdf"></i></a></li>
                    <li><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="excel" href=""><i class="fas fa-file-excel" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- table data list -->
          <div class="table-list mt-3">
            <div class="table-list-body table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="min-width:30px">#</th>
                    <th style="min-width:100px">
                      <span class="table-title">Image
                      </span>
                    </th>
                    <th style="min-width:130px">
                      <span class="table-title">Name
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Category
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Brand
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Model No
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Price
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Quantity
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Entry Date
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
                    <td>
                      <div class="table-image">
                        <img src="images/profile.jpg" alt="">
                      </div>
                    </td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td><span>T-shart</span></td>
                    <td><span>Fashon</span></td>
                    <td><span>T-008</span></td>
                    <td><span>1000</span></td>
                    <td><span>100</span></td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status-danger"><span>Pending</span></td>
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
                    <td>
                      <div class="table-image">
                        <img src="images/profile.jpg" alt="">
                      </div>
                    </td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td><span>T-shart</span></td>
                    <td><span>Fashon</span></td>
                    <td><span>T-008</span></td>
                    <td><span>1000</span></td>
                    <td><span>100</span></td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status-close"><span>Approved</span></td>
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
          <div class="list-footer">
            <div class="row">
              <div class="col-md-5 col-lg-6 align-self-center">
                <div class="showing-number">
                  <p> Showing <span class="single-number">1</span> to <span class="single-number">4</span> of <span class="single-number">4</span> entries </p>
                </div>
              </div>
              <div class="col-md-7 col-lg-6">
                <div class="pagination mt-4 mt-md-0 d-flex justify-content-start justify-content-md-end">
                  <ul>
                    <li class="arrow"><a href="#"><i class="bi bi-arrow-left"></i></a></li>
                    <li class="mid-pagi"><a href="#"><span>2</span></a><a href="#"><span>3</span></a><a class="active" href="#"><span>4</span></a><a href="#"><span>5</span></a><a href="#"><span>6</span></a><a href="#"><span>7</span></a></li>
                    <li class="arrow"><a href="#"><i class="bi bi-arrow-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
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