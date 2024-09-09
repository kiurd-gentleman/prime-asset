<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="{{asset('/frontend/customimages/logo.png')}}" alt="Icon" style="height: 30px;">
            </div>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="about.html" class="nav-item nav-link">Projects</a>
                <a href="about.html" class="nav-item nav-link">Apartments</a>
                <a href="about.html" class="nav-item nav-link">Concerns</a>
                <a href="about.html" class="nav-item nav-link">Consumer</a>
                <a href="about.html" class="nav-item nav-link">Gallery</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="property-list.html" class="dropdown-item">Property List</a>
                        <a href="property-type.html" class="dropdown-item">Property Type</a>
                        <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                    </div>
                </div> -->

                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Download App</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->


<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <!-- <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live With Your Family</h1> -->
            <h1 class="display-5 animated fadeIn mb-4"> Condominium & <span class="text-primary">Apartment </span> Project</h1>
            <p class="animated fadeIn mb-4 pb-2">A modern township designed on modern sustainable principles of equity, livability, and competitiveness</p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get a quote</a>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{asset('/frontend/img/carousel-1.jpg')}}" alt="">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{asset('/frontend/img/carousel-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
