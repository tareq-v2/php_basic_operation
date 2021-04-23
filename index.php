<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Khassfood Admin</title>

    <!--google font-->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!--common style-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/lobicard/css/lobicard.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--easy pie chart-->
    <link href="assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">

    <!--custom css-->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- php5 shim and Respond.js IE8 support of php5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/php5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <header class="app-header navbar">

        <!--brand start-->
        <div class="navbar-brand">
            <a class="" href="index.php">
                <img src="assets/img/logo-dark.png" srcset="assets/img/logo-dark@2x.png 2x" alt="" style="max-width: 128px;">
            </a>
        </div>
        <!--brand end-->

        <!--left side nav toggle start-->
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-leftside-toggler" type="button"><i class="ti-align-right"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler left-sidebar-toggler" href="#"><i class=" ti-align-right"></i></a>
            </li>
        </ul>
        <!--left side nav toggle end-->

        <!--right side nav start-->
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown dropdown-slide d-md-down-none">
                <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class=" ti-view-grid"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-ql-gird">

                    <div class="dropdown-header pb-3">
                        <strong>Quick Links</strong>
                    </div>

                    <div class="quick-links-grid">
                        <a href="#" class="ql-grid-item">
                            <i class="  ti-files text-primary"></i>
                            <span class="ql-grid-title">New Task</span>
                        </a>
                        <a href="#" class="ql-grid-item">
                            <i class="  ti-check-box text-success"></i>
                            <span class="ql-grid-title">Assign Task</span>
                        </a>
                    </div>
                    <div class="quick-links-grid">
                        <a href="#" class="ql-grid-item">
                            <i class="  ti-truck text-warning"></i>
                            <span class="ql-grid-title">Create Orders</span>
                        </a>
                        <a href="#" class="ql-grid-item">
                            <i class=" icon-layers text-info"></i>
                            <span class="ql-grid-title">New Orders</span>
                        </a>
                    </div>

                </div>
            </li>

            <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/user.png" alt="John Doe">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                    <div class="dropdown-header pb-3">
                        <div class="media d-user">
                            <img class="align-self-center mr-3" src="assets/img/user.png" alt="John Doe">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">John Doe</h5>
                                <span>john@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <a class="dropdown-item" href="#"><i class=" ti-reload"></i> Activity</a>
                    <a class="dropdown-item" href="#"><i class=" ti-email"></i> Message</a>
                    <a class="dropdown-item" href="#"><i class=" ti-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class=" ti-layers-alt"></i> Projects <span class="badge badge-primary">4</span> </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#"><i class=" ti-lock"></i> Lock Account</a>
                    <a class="dropdown-item" href="#"><i class=" ti-unlock"></i> Logout</a>
                </div>
            </li>

            <!--right side toggler-->
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-rightside-toggler" type="button"><i class="icon-options-vertical"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler right-sidebar-toggler" href="#"><i class="icon-options-vertical"></i></a>
            </li>
        </ul>

        <!--right side nav end-->
    </header>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">

        <!--left sidebar start-->
        <div class="left-sidebar">
            <nav class="sidebar-menu">
                <ul id="nav-accordion">
                    <li class="sub-menu">
                        <a href="javascript:;" class="active">
                            <i class=" icon-grid"></i>
                            <span>Developer Tools</span>
                        </a>
                        <ul class="sub">
                            <!-- <li class="active"><a  href="index.php">Dashboard</a></li> -->
                            <li><a  href="main_menu_add.php">Main Menu</a></li>
                            <li><a  href="sub_menu_add.php">Sub Menu</a></li>
                        </ul>
                    </li>

                    <li class="nav-title">
                        <h5 class="text-uppercase">Components</h5>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Admin Setup</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="create_admin.php">Create Admin</a></li>
                            <li><a  href="view_admin.php">View Admin</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Website Settings</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="about_us.php">About Us</a></li>
                            <li><a  href="contact_us.php">Contact Us</a></li>
                            <li><a  href="terms_condition.php">Terms & Condition</a></li>
                            <li><a  href="privacy_policy.php">Privacy Policy</a></li>
                            <li><a  href="how_to_buy.php">How to Buy</a></li>
                            <li><a  href="slider_add.php">Slider</a></li>
                            <li><a  href="offer_banner_add.php">Offer Banner</a></li>
                            <li><a  href="faq_add.php">FAQ</a></li>
                            <li><a  href="customer_message_add.php">Customer Message</a></li>
                            <li><a  href="career_info.php">Career Info</a></li>
                            <li><a  href="cod_add.php">Cash on Delivery</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Product Information</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="item_add.php">Item Add</a></li>
                            <li><a  href="catagorey_add.php">Catagorey Add</a></li>
                            <li><a  href="sub_catagorey_add.php">Sub Catagorey Add</a></li>
                            <li><a  href="brand_add.php">Brand Add</a></li>
                            <li><a  href="product_add.php">Product Add</a></li>
                            <li><a  href="view_all_products.php">View All Product</a></li>
                        </ul>
                    </li>

                   <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Product Stock</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="add_product_stock.php">Add Product Stock</a></li>
                            <li><a  href="view_stock.php">View Stock</a></li>
                            <li><a  href="stock_report.php">Stock Report</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Seller Information</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="seller_register.php">Seller Register</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Review Information</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="view_review.php">View Review</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Guest Information</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="guest_information.php">Guest Information</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Delivery Charge Setup</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="deliver_charge_add.php">Delivery Charge Add</a></li>
                            <li><a  href="shipping_class.php">Shipping Class</a></li>
                            <li><a  href="district_add.php">District Setup</a></li>
                            <li><a  href="thana_add.php">Thana Setup</a></li>
                            <li><a  href="zone_add.php">Zone Add</a></li>
                            <li><a  href="zone_wise_district.php">Zone Wise District</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Cuppon Information</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="cuopon_add.php">Cuppon Add</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Order Information</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="pending_order.php">Pending Order</a></li>
                            <li><a  href="process_order.php">Process Order</a></li>
                            <li><a  href="onthe_way_order.php">On the Way Order</a></li>
                            <li><a  href="complete_order.php">Complete Order</a></li>
                            <li><a  href="reject_order.php">Reject Order</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Offer Setup</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="offer_add.php">Offer Add</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-0"> Dashboard</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->


            <div class="container-fluid">

                <!--state widget start-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="guest_information.php"><h6 class="mb-0 mt-3">Register Users</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="active_user.php"><h6 class="mb-0 mt-3">Active Users</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="inactive_user.php"><h6 class="mb-0 mt-3">Inactive Users</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="seller_register.php"><h6 class="mb-0 mt-3">Register Seller</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="active_seller.php"><h6 class="mb-0 mt-3">Active Seller</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="inactive_seller.php"><h6 class="mb-0 mt-3">Inactive Seller</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="order_placed.php"><h6 class="mb-0 mt-3">Order Placed</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="pending_order.php.php"><h6 class="mb-0 mt-3">Pending Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="process_order.php"><h6 class="mb-0 mt-3">Process Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="onthe_way_order.php"><h6 class="mb-0 mt-3">On The Way Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="reject_order.php"><h6 class="mb-0 mt-3">Reject Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="complete_order.php"><h6 class="mb-0 mt-3">Sucess Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->
            </div>

        </main>
        <!--main contents end-->

    </div>
    <!--===========app body end===========-->

    <!--===========footer start===========-->
    <footer class="app-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    2018 © Diverse Admin by MHS
                </div>
                <div class="col-4">
                    <a href="#" class="float-right back-top">
                        <i class=" ti-arrow-circle-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!--===========footer end===========-->


    <!-- Placed js at the end of the page so the pages load faster -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
    <script class="include" type="text/javascript" src="assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/vendor/lobicard/js/lobicard.js"></script>
    <script src="assets/vendor/jquery.scrollTo.min.js"></script>

    <!--chartjs-->
    <script src="assets/vendor/chartjs/Chart.min.js"></script>

    <!--chartjs initialization-->
    <script>

        var ctx = document.getElementById('myChart-light').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgba(167,104,243,.2)',
                    borderColor: 'rgba(167,104,243,1)',
                    data: [0, 20, 9, 25, 15, 25,18]
                }]


            },

            // Configuration options go here
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                elements: {
                    line: {
                        tension: 0.00001,
                        //tension: 0.4,
                        borderWidth: 1
                    },
                    point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                    }
                }
            }
        });


        var ctx = document.getElementById('myChart-tow-light').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgba(54,162,245,.2)',
                    borderColor: 'rgba(54,162,245,1)',
                    //data: [6.06, 82.2, -22.11, 21.53, -21.47, 73.61, -53.75, -60.32]
                    data: [70, 45, 65, 50, 65, 35, 50]
                }]


            },

            // Configuration options go here
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                elements: {
                    line: {
                        //tension: 0.00001,
                        tension: 0.4,
                        borderWidth: 1
                    },
                    point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                    }
                }
            }
        });

    </script>


    <!--custom chart-->
    <script src="assets/vendor/custom-chart/Chart.min.js"></script>
    <script src="assets/vendor/custom-chart/underscore-min.js"></script>
    <script src="assets/vendor/custom-chart/moment.min.js"></script>
    <script src="assets/vendor/custom-chart/accounting.min.js"></script>
    <!--custom chart init-->
    <script src="assets/vendor/custom-chart/custom-chart-init.js"></script>


    <!--easy pie chart-->
    <script src="assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js"></script>

    <!--vectormap-->
    <script src="assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendor/vmap-init.js"></script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="assets/js/scripts.js"></script>

</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>

