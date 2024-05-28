<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha384-6sogO/Hh9HR9CfbEJL0NnZi3SNqOvzPp+WYpiFgS+0zNBAA0ohjYfucu5zvPLwu+" crossorigin="anonymous">
    <link rel="icon" href="assets/images/pdao_logo.png">
    <title>PDAO TAGUIG</title>
</head>

<body>

    <div class="container container-bg mt-5 rounded-4 shadow">
        <div class="row align-items-center">
            <div class="col-4 d-flex justify-content-center justify-content-lg-end">
                <div class="pt-4 pb-4">
                    <img class="img-fluid img-responsive" src="assets/images/pdao_logo.png" alt="Logo Image">
                </div>
            </div>
            <div class="col-4 text-white text-center">
                <div class="pt-4 pb-4">
                    <h1 class="header-text fw-semibold">PDAO TAGUIG</h1>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center justify-content-lg-start">
                <div class="pt-4 pb-4">
                    <img class="img-fluid img-responsive" src="assets/images/taguig_seal.png" alt="Logo Image">
                </div>
            </div>
        </div>
    </div>





    <!-- CAROUSEL -->

    <div class="container mt-3 rounded-bottom-4">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleCaptions" class="carousel slide rounded-4" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner rounded-4">
                        <div class="carousel-item active">
                            <img src="assets/images/samplepic2.jpg" class="d-block w-100 carousel-img"
                                alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/samplepic3.jpg" class="d-block w-100 carousel-img"
                                alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/samplepic4.jpg" class="d-block w-100 carousel-img"
                                alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/samplepic5.jpeg" class="d-block w-100 carousel-img"
                                alt="Fourth slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/samplepic6.jpg" class="d-block w-100 carousel-img"
                                alt="Fifth slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class=" container mt-5">
        <div class="row align-items-stretch">
            <div class="col-md-6">
                <div class="appform-custom-bg register-div p-5 border border-4 border-primary rounded-4 h-100">
                    <!-- Added h-100 -->
                    <h2 class="text-center">PDAO APPLICATION FORM</h2>
                    <p class="text-center fs-5">New Applicant? Click here to Register!</p>
                    <a href="dataprivacy.php" class="d-flex justify-content-center text-decoration-none">
                        <button class="btn btn-primary">REGISTER HERE</button>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="reg-custom-bg transaction-div p-4 border border-4 border-danger rounded-4 h-100">
                    <!-- Added h-100 -->
                    <h2 class="text-center">CHECK APPLICATION STATUS</h2>
                    <p class="text-center fs-5">Enter transaction code here:</p>
                    <form class="d-flex flex-column align-items-center">
                        <input type="text" placeholder="Your transaction code" class="form-control mb-3 w-75">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>







    <div class="container mt-5">
        <div class="row">
            <div class="col-12 rounded-4 p-3">
                <h1 class="text-center">Mga Dokumentong Kailangan</h1>
                <h3 class="text-center fst-italic text-black-50">(Documentary Requirements)</h3>

                <br />

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- New Application -->
                    <div class="col">
                        <div class="card h-100 rounded-4 shadow card-hover">
                            <img src="assets/images/cards/1.svg" class="card-img-top rounded-top-4"
                                alt="New Application">
                            <div class="card-body">
                                <h5 class="card-title">New Application</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Duly Accomplished ID Card Application Form</li>
                                    <li class="list-group-item">Duly Accomplished PRPWD Form</li>
                                    <li class="list-group-item">Latest ID Picture: 1pc. 1x1 & 1 pc. 2x2 picture</li>
                                    <li class="list-group-item">Medical Certificate indicating the
                                        Disability/Certificate of Disability (COD)</li>
                                    <li class="list-group-item">Certificate of Apparent (Nakikita) Disability (CAD) to
                                        be issued by Assessing PDAO Staff</li>
                                    <li class="list-group-item">Certificate of Non-Apparent (Hindi Nakikita) Disability
                                        (CNAD) to be issued by Medical Specialist Appropriate Physician/Ophthalmologist
                                        for Visual Disability</li>
                                    <li class="list-group-item">Proof of Residence: Government issued ID or Barangay
                                        Clearance or Utility Bill with the name and address of the applicant</li>
                                    <li class="list-group-item">Note: For Children, School ID is accepted, in the
                                        absence of school ID, birth certificate is required.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Renewal -->
                    <div class="col">
                        <div class="card h-100 rounded-4 shadow card-hover">
                            <img src=" assets/images/cards/4.svg" class="card-img-top rounded-top-4" alt="Renewal">
                            <div class="card-body">
                                <h5 class="card-title">Renewal</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Duly Accomplished ID Card Application Form</li>
                                    <li class="list-group-item">Duly Accomplished PRPWD Form</li>
                                    <li class="list-group-item">Latest ID Picture: 1pc. 1x1 and 1 pc. 2x2 picture</li>
                                    <li class="list-group-item">Old/Expired ID</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Change Address -->
                    <div class="col">
                        <div class="card h-100 rounded-4 shadow card-hover">
                            <img src=" assets/images/cards/2.svg" class="card-img-top rounded-top-4"
                                alt="Change Address">
                            <div class="card-body">
                                <h5 class="card-title">Change Address</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Duly Accomplished ID Card Application Form</li>
                                    <li class="list-group-item">Duly Accomplished PRPWD Form</li>
                                    <li class="list-group-item">Latest ID Picture: 1pc. 1x1 and 1 pc. 2x2 picture</li>
                                    <li class="list-group-item">Latest Barangay Clearance</li>
                                    <li class="list-group-item">Old ID</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Replacement of Lost ID -->
                    <div class="col d-md-flex justify-content-md-center">
                        <div class="card h-100 rounded-4 shadow card-hover">
                            <img src=" assets/images/cards/3.svg" class="card-img-top rounded-top-4"
                                alt="Replacement of Lost ID">
                            <div class="card-body">
                                <h5 class="card-title">Replacement of Lost ID</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Duly Accomplished ID Card Application Form</li>
                                    <li class="list-group-item">Duly Accomplished PRPWD Form</li>
                                    <li class="list-group-item">Latest ID Picture: 1pc. 1x1 and 1 pc. 2x2 picture</li>
                                    <li class="list-group-item">Notarized Affidavit of Lost</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Change Surname / Civil Status -->
                    <div class="col d-md-flex justify-content-md-center ">
                        <div class="card h-100 rounded-4 shadow card-hover">
                            <img src="assets/images/cards/5.svg" class="card-img-top rounded-top-4"
                                alt="Change Surname / Civil Status">
                            <div class="card-body">
                                <h5 class="card-title">Change Surname / Civil Status</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Duly Accomplished ID Card Application Form</li>
                                    <li class="list-group-item">Duly Accomplished PRPWD Form</li>
                                    <li class="list-group-item">Latest ID Picture: 1pc. 1x1 and 1 pc. 2x2 picture</li>
                                    <li class="list-group-item">Marriage Certificate</li>
                                    <li class="list-group-item">Old ID</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 rounded-4 custom-bg shadow">
        <div class="row">
            <!-- Contact information -->
            <div class="col-md-6 p-5">
                <div class="footer1">
                    <div class="contact-container">
                        <div class="contact-info">
                            <h1 class="text-center">Contact Us</h1>
                            <!-- Replace image with Font Awesome icons -->
                            <p class="m-3"><i class="fas fa-phone-alt"></i> Telephone: 632-8642-35-90 / 0919-070-1398
                            </p>
                            <p class="m-3"><i class="fab fa-facebook"></i> <a
                                    href="https://www.facebook.com/taguigpdao/">@taguigpdao</a></p>
                            <p class="m-3"><i class="fas fa-envelope"></i> Email: pdaotaguigg@yahoo.com</p>
                            <p class="m-3"><i class="fas fa-map-marker-alt"></i> Location: PDAO Main Office, Ground
                                Floor, 9th St., Corner Ipil-ipil St., <br> Brgy. North Signal, Taguig City, 1637</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Google Maps iframe -->
            <div class="col-md-6 p-4">
                <div class="map-container">
                    <iframe class="rounded-5 shadow-lg" frameborder="0" scrolling="no" id="gmap_canvas"
                        src="https://maps.google.com/maps?width=603&amp;height=400&amp;hl=en&amp;q=PDAO%20Quezon%20City%20Taguig+(PDAO%20Main%20Office)&amp;t=&amp;z=19&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>


    <footer class="container mt-5 footer-1">
        <div class="row contact-container">
            <div class="col-12 text-center contact-info">
                <p class="text-primary-100"> 2024 <br>
                    Copyright © City Government of Taguig <br>
                    Information Technology Office </p>
            </div>
        </div>

    </footer>
    <div>
        <img src="assets/images/bg/footer.png" class="img-fluid footer-img" alt="Footer Image">
    </div>

    <script src="assets/plugins/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/javascript/homepage.js"></script>

</body>

</html>