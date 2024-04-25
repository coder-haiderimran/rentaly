<?php include "component/config.php" ?>
<!DOCTYPE html>
<html lang="zxx">

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

<body onload="initialize()">
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include("component/header.php") ?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Persona</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            <section id="section-testimonials" class="no-top no-bottom">
                <div class="container-fluid">
                    <div class="row g-2 p-5 align-items-center">
                        <?php
                        $Query = "SELECT * FROM persona WHERE status = 1";
                        $Result = mysqli_query($conn, $Query);
                        if ($Result->num_rows > 0) {
                            while ($DataRows = mysqli_fetch_array($Result)) {
                        ?>
                                <div class="col-md-4 mb-4">
                                    <div class="de-image-text">
                                        <div class="d-text">
                                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                            <h4><?php echo $DataRows['heading'] ?></h4>
                                            <blockquote>
                                                <?php echo $DataRows['message']; ?>
                                                <span class="by"><?php echo $DataRows['name']; ?></span>
                                            </blockquote>
                                        </div>
                                        <img src="<?php echo "uploads/personas/" . $DataRows['image'] ?>" class="img-fluid" alt="Image not found.">
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo "No Result Found";
                        }
                        ?>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <?php include("component/footer.php") ?>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>

</body>

</html>