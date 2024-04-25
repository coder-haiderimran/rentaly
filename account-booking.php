<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/account-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Mar 2024 09:36:36 GMT -->
<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include("component/header.php")?>
            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/14.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>My Orders</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-settings" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card padding30 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="images/profile/1.jpg" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            Monica Lucas                                                
                                            <span class="profile_username text-gray">monica@rentaly.com</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="account-dashboard.html"><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a href="account-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="#" class="active"><i class="fa fa-calendar"></i>My Orders</a></li>
                                    <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">

                            <div class="card padding30 rounded-5 mb25">
                                <h4>Scheduled Orders</h4>

                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><span class="fs-12 text-gray">Order ID</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Car Name</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Pick Up Location</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Drop Off Location</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Pick Up Date</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Return Date</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Status</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01245</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ferrari Enzo</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Kentucky</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Michigan</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 14, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 16, 2023</td>
                                      <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
                                    </tr>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01245</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">VW Polo</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Philadelphia</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Washington</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 16, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 18, 2023</td>
                                      <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
                                    </tr>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01216</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Toyota Rav 4</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Baltimore</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Sacramento</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 19, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 20, 2023</td>
                                      <td><div class="badge rounded-pill bg-warning">scheduled</div></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>

                            <div class="card padding30 rounded-5 mb25">
                                <h4>Completed Orders</h4>

                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><span class="fs-12 text-gray">Order ID</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Car Name</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Pick Up Location</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Drop Off Location</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Pick Up Date</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Return Date</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Status</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01236</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Jeep Renegade</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>New York</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Los Angeles</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 2, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 11, 2023</td>
                                      <td><div class="badge rounded-pill bg-success">completed</div></td>
                                    </tr>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01287</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Hyundai Staria</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Nevada</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>New Mexico</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 6, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 12, 2023</td>
                                      <td><div class="badge rounded-pill bg-success">completed</div></td>
                                    </tr>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01236</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Range Rover</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Virginia</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Oregon</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 2, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 13, 2023</td>
                                      <td><div class="badge rounded-pill bg-success">completed</div></td>
                                    </tr>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01287</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">BMW M2</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Kansas City</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Houston</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 1, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 14, 2023</td>
                                      <td><div class="badge rounded-pill bg-success">completed</div></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>

                            <div class="card padding30 rounded-5 mb25">
                                <h4>Cancelled Orders</h4>

                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><span class="fs-12 text-gray">Order ID</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Car Name</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Pick Up Location</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Drop Off Location</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Pick Up Date</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Return Date</span></th>
                                      <th scope="col"><span class="fs-12 text-gray">Status</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01263</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Mini Cooper</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>San Fransisco</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Chicago</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 8, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 12, 2023</td>
                                      <td><div class="badge rounded-pill bg-danger">cancelled</div></td>
                                    </tr>
                                    <tr>
                                      <td><span class="d-lg-none d-sm-block">Order ID</span><div class="badge bg-gray-100 text-dark">#01263</div></td>
                                      <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold">Ford Raptor</span></td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Location</span>Georgia</td>
                                      <td><span class="d-lg-none d-sm-block">Drop Off Location</span>Lousiana</td>
                                      <td><span class="d-lg-none d-sm-block">Pick Up Date</span>March 8, 2023</td>
                                      <td><span class="d-lg-none d-sm-block">Return Date</span>March 13, 2023</td>
                                      <td><div class="badge rounded-pill bg-danger">cancelled</div></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			
        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <?php include("component/footer.php")?>
        <!-- footer close -->
        
    </div>

<div id="selector">
        <div id="demo-rtl" class="sc-opt">
            <div class="sc-icon">RTL</div><span class="sc-val">Click to Enable</span>
        </div>
    </div>
   
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/account-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Mar 2024 09:36:36 GMT -->
</html>