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
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          Search by Phone
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="text" placeholder="phone no">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          From Date
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="date">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">
                          To Date
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <input class="" type="date">
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">Search by Status
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected>select one</option>
                          <option value="1">pending</option>
                          <option value="2">approved</option>
                          <option value="3">cancel</option>
                          <option value="3">processing</option>
                          <option value="3">delevered</option>
                          <option value="3">shipped</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">Search by Payment
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                          <option selected>select one</option>
                          <option value="1">paid</option>
                          <option value="2">unpaid</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <div class="form-element">
                        <label for="" class="d-block w-100">Type Text
                          <span class="float-end" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Please insert your name here"><i class="fa-solid fa-circle-info"></i></span>
                        </label>
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
                        Order No
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Order date
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Paid
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Payment Method
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Items
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Delivary Charge
                        <i class="bi bi-caret-up-fill sort-up"></i>
                        <i class="bi bi-caret-down-fill sort-down"></i>
                      </span>
                    </th>
                    <th style="min-width:100px">
                      <span class="table-title">
                        Total Price
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
                    <td><span>56</span></td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status status-success"><span>Yes</span></td>
                    <td><span>biKash</span></td>
                    <td><span>5</span></td>
                    <td><span>70 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td><span>1000 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td class="status status-pending"><span>Pending</span></td>
                    <td><span>
                        <a href="product-view.html">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view"><i class="fa-solid fa-eye"></i></span>
                        </a>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete locate"><i class="fa-solid fa-location-dot"></i></span>
                    </td>
                  </tr>
                  <tr>
                    <td><span>1</span></td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td><span>56</span></td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status status-danger"><span>No</span></td>
                    <td><span>biKash</span></td>
                    <td><span>5</span></td>
                    <td><span>70 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td><span>1000 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td class="status status-success"><span>Success</span></td>
                    <td><span>
                        <a href="product-view.html">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view"><i class="fa-solid fa-eye"></i></span>
                        </a>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete locate"><i class="fa-solid fa-location-dot"></i></span>
                  </tr>
                  <tr>
                    <td><span>1</span></td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td><span>56</span></td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status status-processing"><span>Partial</span></td>
                    <td><span>biKash</span></td>
                    <td><span>5</span></td>
                    <td><span>70 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td><span>1000 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td class="status status-approve"><span>Approve</span></td>
                    <td><span>
                        <a href="product-view.html">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view"><i class="fa-solid fa-eye"></i></span>
                        </a>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete locate"><i class="fa-solid fa-location-dot"></i></span>
                    </td>
                  </tr>
                  <tr>
                    <td><span>1</span></td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td><span>56</span></td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status status-success"><span>Yes</span></td>
                    <td><span>biKash</span></td>
                    <td><span>5</span></td>
                    <td><span>70 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td><span>1000 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td class="status status-processing"><span>Processing</span></td>
                    <td><span>
                        <a href="product-view.html">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view"><i class="fa-solid fa-eye"></i></span>
                        </a>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete locate"><i class="fa-solid fa-location-dot"></i></span>
                    </td>
                  </tr>
                  <tr>
                    <td><span>1</span></td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td><span>56</span></td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status status-processing"><span>Partial</span></td>
                    <td><span>biKash</span></td>
                    <td><span>5</span></td>
                    <td><span>70 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td><span>1000 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td class="status status-delivered"><span>Delivered</span></td>
                    <td><span>
                        <a href="product-view.html">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view"><i class="fa-solid fa-eye"></i></span>
                        </a>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete locate"><i class="fa-solid fa-location-dot"></i></span>
                    </td>
                  </tr>
                  <tr>
                    <td><span>1</span></td>
                    <td><span>G M SARWAR SHOOMON</span></td>
                    <td><span>56</span></td>
                    <td><span>5 Jul 2023</span></td>
                    <td class="status status-danger"><span>No</span></td>
                    <td><span>biKash</span></td>
                    <td><span>5</span></td>
                    <td><span>70 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td><span>1000 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span></td>
                    <td class="status status-danger"><span>Canceled</span></td>
                    <td><span>
                        <a href="product-view.html">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete view"><i class="fa-solid fa-eye"></i></span>
                        </a>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="delete locate"><i class="fa-solid fa-location-dot"></i></span>
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