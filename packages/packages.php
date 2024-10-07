<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travela - Tourism Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="icon" href="../img/logo.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block top--bar">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Maldives and Sri
                        Lanka</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+960 7 422 423 / +94 771 772
                        422</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@dodo.lk</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://wa.link/vpjzv8" target="_blank"><i class="fab fa-whatsapp fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/profile.php?id=61565220060400" target="_blank"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.linkedin.com/in/shan-ramanathan-57a97214b/" target="_blank"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                        href="https://www.youtube.com/@Travelmaldivesandsrilanka" target="_blank"><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="../home/index.php" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa me-3">
                        <img src="../img/logo.png" class="header--logo">
                    </i><span style="color: #fe6100;">dodo</span><span style="color: #0000fe;">Travel</span></h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="../home/index.php" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link active">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Destination</a>
                        <div class="dropdown-menu m-0">
                            <a href="../destination.php" class="dropdown-item">Destination</a>
                            <span class="dropdown-header" style="font-size: 1rem;">Accommodations
                                <a href="../accommodations.php#maldives" class="dropdown-item">Maldives</a>
                                <a href="../accommodations.php#lanka" class="dropdown-item">Sri Lanka</a>
                            </span>
                            <a href="../gallery.php" class="dropdown-item">Gallery</a>
                        </div>
                    </div>
                    <a href="../about.php" class="nav-item nav-link">About</a>
                    <a href="../contact/contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="../home/index.php#bookTour" class="btn btn-primary rounded-pill py-2 px-4">BOOK&nbsp;NOW</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid">
        <div class="package--img">
            <div class="container text-center py-5 package--txt">
                <div class="mt-5 py-lg-5">
                    <h3 class="text-white display-3 mb-4">Travel Packages</h1>
                </div>
                <div>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="../home/index.php">Home</a></li>
                        <li class="breadcrumb-item active text-white">Packages</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Packages Start -->
    <!-- <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title bg-white text-center text-primary px-3">Packages</h5>
                <h1 class="mb-0">Maldives</h1>
            </div>
            <div class="packages-carousel owl-carousel">
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="img/packages-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                        </div>
                        <div class="packages-price py-2 px-4">$349.00</div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Venice - Italy</h5>
                            <small class="text-uppercase">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="img/packages-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                        </div>
                        <div class="packages-price py-2 px-4">$449.00</div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">The New California</h5>
                            <small class="text-uppercase">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="img/packages-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                        </div>
                        <div class="packages-price py-2 px-4">$549.00</div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Discover Japan</h5>
                            <small class="text-uppercase">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="img/packages-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt me-2"></i>Thayland</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                        </div>
                        <div class="packages-price py-2 px-4">$649.00</div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Thayland Trip</h5>
                            <small class="text-uppercase">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Packages End -->

    <!-- Packages Start -->
    <!-- <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title bg-white text-center text-primary px-3">Packages</h5>
                <h1 class="mb-0">Sri Lanka</h1>
            </div>
            <div class="packages-carousel owl-carousel">
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="img/packages-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                        </div>
                        <div class="packages-price py-2 px-4">$349.00</div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Venice - Italy</h5>
                            <small class="text-uppercase">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="img/packages-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                        </div>
                        <div class="packages-price py-2 px-4">$449.00</div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">The New California</h5>
                            <small class="text-uppercase">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="img/packages-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                        </div>
                        <div class="packages-price py-2 px-4">$549.00</div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Discover Japan</h5>
                            <small class="text-uppercase">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="img/packages-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                            style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt me-2"></i>Thayland</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                        </div>
                        <div class="packages-price py-2 px-4">$649.00</div>
                    </div>
                    <div class="packages-content bg-light">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Thayland Trip</h5>
                            <small class="text-uppercase">Hotel Deals</small>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Packages End -->

    <div class="container-fluid pack_back py-5 center">
        <div class="container py-5 pack--div">
            <div class="wrapper">
                <div class="static-txt">Something</div>
                <ul class="dynamic-txts">
                    <li><span>New</span></li>
                    <li><span>Special</span></li>
                    <li><span>Amazing</span></li>
                    <li><span>Unique</span></li>
                </ul>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="static-txt">Awaits...</div>
            </div>
        </div>
    </div>

    <!-- Tour Booking Start -->
    <div class="container-fluid booking py-5" id="bookTour" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title--book text-white  pe-3 text-start">Booking
                    </h6>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="text-white mb-4">Ready to turn your travel dreams into reality? At DODO Travel, we offer
                        exclusive packages designed just for you. With personalized itineraries and exceptional service,
                        your ideal vacation is just a click away.
                    </p>
                    <p class="text-white mb-4">Don’t miss out on our limited-time offers! Booking with us ensures you’ll
                        experience the best of the Maldives and Sri Lanka. Secure your spot today and embark on an
                        unforgettable journey filled with adventure and relaxation.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-white mb-3">Book Your Tour</h1>
                    <p class="text-white mb-4">Secure your dream vacation today! Enjoy exclusive deals and personalized
                        itineraries tailored just for you.</p>
                    <form action="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name <span class="starlabel">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-0" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email <span class="starlabel">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="date" class="form-control bg-white border-0" id="datetime"
                                        placeholder="Date" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Date <span class="starlabel">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="select1">
                                        <option value="1">Maldives</option>
                                        <option value="2">Sri Lanka</option>
                                    </select>
                                    <label for="select1">Destination <span class="starlabel">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control bg-white border-0" id="person"
                                        placeholder="No. of Persons">
                                    <label for="person">No. of Persons <span class="starlabel">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control bg-white border-0" id="kids"
                                        placeholder="No. of Kids">
                                    <label for="kids">No. of Kids</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-0" placeholder="Special Request"
                                        id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="btn btn-primary text-white w-100 py-3 btn--submit" type="submit" id="btn" onclick="sendRequest();">Book
                                    Now</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn">
        <div class="container py-5">
            <div class="row g-5 ms-lg-5" style="width: 100%;display: flex; justify-content: center;">
                <div class="col-md-12 col-lg-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Get In Touch</h4>
                        <a href=""><i class="fas fa-home me-2"></i> Maldives&nbsp;and Sri&nbsp;Lanka</a>
                        <a href="mailto:info@dodo.lk"><i class="fas fa-envelope me-2"></i> info@dodo.lk</a>
                        <a href="">
                            <table>
                                <tr>
                                    <td><i class="fas fa-phone me-2"></i></td>
                                    <td><a href="tel:+960 7 422 423">+960 7 422 423</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="tel:+94 771 772 422">+94 771 772 422</a></td>
                                </tr>
                            </table>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ms-lg-5">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Quick Links</h4>
                        <a href="../home/index.php"><i class="fas fa-angle-right me-2"></i> Home</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Packages</a>
                        <a href="../destination.php"><i class="fas fa-angle-right me-2"></i> Destinations</a>
                        <a href="../accommodations.php"><i class="fas fa-angle-right me-2"></i> Accommodations</a>
                        <a href="../gallery.php"><i class="fas fa-angle-right me-2"></i> Gallery</a>
                        <a href="../about.php"><i class="fas fa-angle-right me-2"></i> About</a>
                        <a href="../contact/contact.php"><i class="fas fa-angle-right me-2"></i> Contact</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Social Media</h4>
                        <div class="align-items-center">
                            <div class="align-items-center d-flex flex-row">
                                <a href="">
                                    <i class="fas fa-share fa-1x text-white me-2"></i>
                                    <a class="btn-square btn btn-primary rounded-circle mx-1"
                                        href="https://www.facebook.com/profile.php?id=61565220060400" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                        <a href="https://www.facebook.com/profile.php?id=61565220060400"
                                            target="_blank"><i class="fas me-0"></i> Facebook</a>
                                    </a>
                                </a>
                            </div>
                            <div class="align-items-center d-flex flex-row mt-2">
                                <a href=""></a>
                                <i class="fas fa-share fa-1x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://wa.link/vpjzv8"
                                    target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                    <a href="https://wa.link/vpjzv8" target="_blank"><i class="fas me-0"></i>
                                        WhatsApp</a>
                                </a>
                                </a>
                            </div>
                            <div class="align-items-center d-flex flex-row mt-2">
                                <a href=""></a>
                                <i class="fas fa-share fa-1x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1"
                                    href="https://www.linkedin.com/in/shan-ramanathan-57a97214b" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                    <a href="https://www.linkedin.com/in/shan-ramanathan-57a97214b" target="_blank"><i
                                            class="fas me-0"></i> Linkedin</a>
                                </a>
                                </a>
                            </div>
                            <div class="align-items-center d-flex flex-row mt-2">
                                <a href=""></a>
                                <i class="fas fa-share fa-1x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1"
                                    href="https://www.youtube.com/@Travelmaldivesandsrilanka" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                    <a href="https://www.youtube.com/@Travelmaldivesandsrilanka" target="_blank"><i
                                            class="fas me-0"></i> YouTube</a>
                                </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright text-body py-4">
        <div class="container copyright--container">
            <div class="row g-4 align-items-center">
                <div class="col-md-12 text-center text-md-end mb-md-0">
                    Copyright&nbsp;&nbsp;</a><i class="fas fa-copyright me-2"></i><a class="text-white" href="https://evotechsoftwaresolutions.com/">Evon
                        Technologies Software Solution (PVT) Ltd</a>, All right
                    reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Template Javascript -->
    <script src="packages.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>