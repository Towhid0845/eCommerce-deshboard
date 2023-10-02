<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN PANEL</title>
  <!-- google font start -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- google font end -->
  <script src="https://kit.fontawesome.com/3f4c7459cb.js" crossorigin="anonymous"></script>
  <!-- css file start -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="icons/bootstrap-icons-1.8.2/bootstrap-icons.css">
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- css file end -->
</head>

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
        <div class="top-short-summery">
          <div class="row">
            <div class="col-lg-6 col-xl-3 col-xxl-3 col-md-6">
              <div class="summery-item">
                <h4>Total Accounts</h4>
                <h3 class="counter">586,356</h3>
                <ul>
                  <li>
                    <span><i class="bi bi-arrow-up"></i> 30.4%</span> increase this month
                  </li>
                </ul>
                <div class="circle">
                  <i class="far fa-id-card"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-xxl-3 col-md-6">
              <div class="summery-item item-2">
                <h4>Products Sold</h4>
                <h3 class="counter">158,356</h3>
                <ul>
                  <li>
                    <span><i class="bi bi-arrow-up"></i> 15.4%</span> increase this month
                  </li>
                </ul>
                <div class="circle">
                  <i class="far fa-lightbulb"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-xxl-3 col-md-6">
              <div class="summery-item item-3 mb-md-0">
                <h4>Net Profit</h4>
                <h3 class="counter">586,356</h3>
                <ul>
                  <li>
                    <span><i class="bi bi-arrow-up"></i> 15.4%</span> increase this month
                  </li>
                </ul>
                <div class="circle">
                  <i class="fas fa-recycle"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-xxl-3 col-md-6">
              <div class="summery-item item-4">
                <h4>Customer Satisfaction</h4>
                <h3><span class="counter">99</span> <span>%</span></h3>
                <ul>
                  <li>
                    <span><i class="bi bi-arrow-up"></i> 15.4%</span> increase this month
                  </li>
                </ul>
                <div class="circle">
                  <i class="far fa-snowflake"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="desh-category">
          <h3 class="py-3">Category</h3>
          <div class="category-slide">

          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/hot-beverage.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/breakfast.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>



          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/frozen.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/meat.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/vegetable.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/healthy-food.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/frozen.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/hot-beverage.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/hot-beverage.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/hot-beverage.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/hot-beverage.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/hot-beverage.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/hot-beverage.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>


          <div class="category-contain text-center">
            <a class="category-img" href="#">
              <img src="./images/hot-beverage.png" class="img-fluid" alt="error">
            </a>
            <a href="#">
              <p>Bevarage</p>
            </a>
          </div>
          </div>
        </div>
        <div class="details-info">
          <div class="row">
            <div class="col-lg-12 col-xl-3 col-xxl-3">
              <div class="info-notification">
                <div class="title">
                  <h4>Notifications</h4>
                </div>
                <div class="info-item-main">
                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                      <div class="info-notify-item d-flex">
                        <div class="icon">
                          <i class="fab fa-think-peaks"></i>
                        </div>
                        <div class="text">
                          <h4>
                            <a href="#" class="d-block">
                              Group lunch celebration
                            </a>
                            <span>Due in 2 Days</span>
                          </h4>
                        </div>
                        <div class="percent">
                          <h5>+28%</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                      <div class="info-notify-item info-item2 d-flex">
                        <div class="icon">
                          <i class="fab fa-think-peaks"></i>
                        </div>
                        <div class="text">
                          <h4>
                            <a href="#" class="d-block">
                              Group lunch celebration
                            </a>
                            <span>Due in 2 Days</span>
                          </h4>
                        </div>
                        <div class="percent">
                          <h5>+28%</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                      <div class="info-notify-item info-item3 d-flex">
                        <div class="icon">
                          <i class="fab fa-think-peaks"></i>
                        </div>
                        <div class="text">
                          <h4>
                            <a href="#" class="d-block">
                              Group lunch celebration
                            </a>
                            <span>Due in 2 Days</span>
                          </h4>
                        </div>
                        <div class="percent">
                          <h5>+28%</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                      <div class="info-notify-item mb-0 info-item4 d-flex">
                        <div class="icon">
                          <i class="fab fa-think-peaks"></i>
                        </div>
                        <div class="text">
                          <h4>
                            <a href="#" class="d-block">
                              Group lunch celebration
                            </a>
                            <span>Due in 2 Days</span>
                          </h4>
                        </div>
                        <div class="percent">
                          <h5>+28%</h5>
                        </div>
                      </div>
                    </div>
                  </div>




                </div>
              </div>
            </div>
            <div class="col-lg-12 col-xl-9 col-xxl-9">
              <div class="projects">
                <div class="title">
                  <h4>Latest Projects</h4>
                </div>
                <div class="project-table table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Project Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Working Hour</th>
                        <th>Assign To</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody style="border-top: 0;">
                      <tr>
                        <td>1</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released">Released</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released pending">Pending</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released in-progress">Work In Progress</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released comming">Coming soon</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released finish">Finished</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released">Released</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released pending">Pending</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released in-progress">Work In Progress</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
                        </td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Adminty Admin v1</td>
                        <td>14/05/2022</td>
                        <td>01/01/2015</td>
                        <td><span class="released comming">Coming soon</span></td>
                        <td>5 Hours 20 Minutes</td>
                        <td>Coderthemes</td>
                        <td>
                          <span class="delete view"><i class="fas fa-binoculars"></i></span>
                          <span class="delete edit"><i class="fas fa-pencil-alt"></i></span>
                          <span class="delete delete-btn"><i class="far fa-trash-alt"></i></span>
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
  <script src="js/script.js"></script>
  <!-- script file  end-->
</body>

</html>