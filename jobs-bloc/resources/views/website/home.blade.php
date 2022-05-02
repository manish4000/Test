@extends('website.layout')

@section('content')


<nav class="navbar navbar-expand-lg navbar-dark p-3 m-2 shadow border border-3 border-warning bg-white" id="headerNav">
  <div class="container">
    <a class="navbar-brand d-block " href="#">
      <img src="images/logo.png" height="50" />
    </a>
    <button class="navbar-toggler text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-dark"></span>
    </button>
    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  Button with data-bs-target
</button> -->

    <div class=" collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav px-3 ">
        <li class="nav-item">
          <a class="nav-link text-dark  active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="#">Find Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="#">Job Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="#">Jobs By Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="#">Jobs By Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Career with jobsbloc</a>
        </li>
        <li><a href="" class="btn btn-warning p-3  fw-bold"> Login/Register </a></li>
     
      </ul>
    </div>
  </div>
</nav>


<!-- of canvas -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
<!--  -->



<div class="container-fluid background">
    
    <!-- search section -->
    <div class="container">
    
            <h2 class="text-center text-uppercase text-info fw-bold my-5">EMPOWERING PEOPLE</h2>
    
            <div>
                <h2 class="display-6 fw-bold my-4">Search Jobs In Your Preferred Locations</h2>
    
                <form class="row  text-center px-4">
                    <div class="col-12 col-lg-4 mb-3 ">                       
                        <input type="text"  class="form-control border-warning py-4 px-5" id="staticEmail2" value="Job Title or Keyword">
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                    <select class="form-select border-warning py-4 px-5" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>                        
                    </div>
                    <div class=" d-grid  col-lg-2 text-start mb-3">
                        <button type="submit" class="btn btn-warning rounded-pill py-4 btn-large  btn-block  fw-bold px-5"> Find Job </button>
                    </div>
           
              </form>  
    
                    <div class="my-3">
                        <span>Trending Keywords:</span>
    
                        <a href="#" class="text-decoration-none text-muted"> Full Time Jobs ,</a>
                        <a href="#" class="text-decoration-none text-muted">  Part Time Jobs ,</a>
                        <a href="#" class="text-decoration-none text-muted"> Freelancer Jobs ,</a>
                        <a href="#" class="text-decoration-none text-muted"> FullTime Jobs ,</a>
                        <a href="#" class="text-decoration-none text-muted"> FullTime Jobs ,</a>
                        
                    </div>
    
            </div>
    
    </div>
    
    <!-- search section end  -->

    <!-- <div class="text-center">
        <img src="https://jobsbloc.com/wp-content/uploads/revslider/home-31/h3-slide-img-1.png" class="img-fluid" alt="">
        <img src="https://jobsbloc.com/wp-content/uploads/revslider/home-31/h3-slide-img-3.png" class="img-fluid" alt="">
        <img src="https://jobsbloc.com/wp-content/uploads/revslider/home-31/h3-slide-img-2.png" class="img-fluid" alt="">
        <img src="https://jobsbloc.com/wp-content/uploads/revslider/home-31/h3-slide-img-4.png" class="img-fluid" alt="">
        <img src="https://jobsbloc.com/wp-content/uploads/revslider/home-31/h3-slide-img-5.png" class="img-fluid" alt="">

    </div> -->
</div>

<!-- find online job -->

<div class="container">

    <div class="text-center my-2">
        
        <h3 class="fw-bold text-info">Find Free Online Jobs in India</h3>
        <h3 class="fw-bold text-info">How We Can Help You to find new job!</h3>
        <h5 class="fw-bold text-info">We make it as simple as a click.​</h5>

    </div>

    <div class="row text-center">

            <div class="col-3">

                <div class="p-2 bg-info">
                  <i class="fa fa-4x fa-user-o" aria-hidden="true"></i>
                </div>
            
            </div>
            
            
           

    </div>

</div>

<!-- find online job end  -->


<!-- alert -->

    <div class="container border border-2 border-warning " style="border-radius: 80px 30px 30px 0px; ">

            <div class="row my-5 p-3">
                <div class="col-12 col-md-6 mb-3"> <h2>Create Your Free Alerts to get Instant Notifications </h2></div>
                <div class="col-12 col-md-6  mb-3">
                    <div class="row">
                        <div class=" col-12 col-md-6 mb-3">
                        <button type="submit" class="btn btn-warning  fw-bold px-4 py-3"> Create Job Alerts </button>
                        </div>
                        <div class="col-12 col-md-6 ">
                        <button type="submit" class="btn btn-warning  fw-bold px-4 py-3"> Create Candidate Alerts </button>
                        </div>
                    </div>
                </div>
            </div>

    </div>

<!-- alert end -->


<div class="container py-5 my-4 testmonial" >

<div class="text-center  py-3 mb-5 our-clint">

    <h3 class="display-5 text-white ">What Our Clint Says</h3>
</div>

       <!-- Carousel wrapper -->
<!-- Carousel wrapper -->
        <div
        id="carouselExampleControls"
        class="carousel slide text-center carousel-dark"
        data-mdb-ride="carousel">
        <div class="carousel-inner">

       
                        <div class="carousel-item active">


                                <div class="row">
                                        
                                             <div class="col-6 p-4 border">
                                                    <img
                                                        class="rounded-circle shadow-1-strong mb-4"
                                                        src="http://dairy.novaexpress.in/uploads/website/testmonial/1649741461.jpg"
                                                        alt="avatar"
                                                        style="width: 150px;"
                                                    />
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-8">
                                                        <h5 class="mb-3">name</h5>
                                                        <p>name</p>
                                                        <p class="text-muted">
                                                            <i class="fas fa-quote-left pe-2"></i>
                                                            name
                                                        </p>
                                                        <a href="#">sdsd</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-6 p-4 border">
                                                    <img
                                                        class="rounded-circle shadow-1-strong mb-4"
                                                        src="http://dairy.novaexpress.in/uploads/website/testmonial/1649741461.jpg"
                                                        alt="avatar"
                                                        style="width: 150px;"
                                                    />
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-8">
                                                        <h5 class="mb-3">name</h5>
                                                        <p>name</p>
                                                        <p class="text-muted">
                                                            <i class="fas fa-quote-left pe-2"></i>
                                                            name
                                                        </p>
                                                        </div>
                                                    </div>

                                                </div>
                                </div>


                        </div>
                        <div class="carousel-item ">


                                <div class="row">
                                        
                                             <div class="col-6 p-4 border">
                                                    <img
                                                        class="rounded-circle shadow-1-strong mb-4"
                                                        src="http://dairy.novaexpress.in/uploads/website/testmonial/1649741461.jpg"
                                                        alt="avatar"
                                                        style="width: 150px;"
                                                    />
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-8">
                                                        <h5 class="mb-3">name</h5>
                                                        <p>name</p>
                                                        <p class="text-muted">
                                                            <i class="fas fa-quote-left pe-2"></i>
                                                            name
                                                        </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-6 p-4 border">
                                                    <img
                                                        class="rounded-circle shadow-1-strong mb-4"
                                                        src="http://dairy.novaexpress.in/uploads/website/testmonial/1649741461.jpg"
                                                        alt="avatar"
                                                        style="width: 150px;"
                                                    />
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-8">
                                                        <h5 class="mb-3">name</h5>
                                                        <p>name</p>
                                                        <p class="text-muted">
                                                            <i class="fas fa-quote-left pe-2"></i>
                                                            name
                                                        </p>
                                                        </div>
                                                    </div>

                                                </div>
                                </div>


                        </div>
                        <div class="carousel-item ">


                                <div class="row">
                                        
                                             <div class="col-6 border">
                                                    <img
                                                        class="rounded-circle shadow-1-strong mb-4"
                                                        src="http://dairy.novaexpress.in/uploads/website/testmonial/1649741461.jpg"
                                                        alt="avatar"
                                                        style="width: 150px;"
                                                    />
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-8">
                                                        <h5 class="mb-3">name</h5>
                                                        <p>name</p>
                                                        <p class="text-muted">
                                                            <i class="fas fa-quote-left pe-2"></i>
                                                            name
                                                        </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-6 border">
                                                    <img
                                                        class="rounded-circle shadow-1-strong mb-4"
                                                        src="http://dairy.novaexpress.in/uploads/website/testmonial/1649741461.jpg"
                                                        alt="avatar"
                                                        style="width: 150px;"
                                                    />
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-lg-8">
                                                        <h5 class="mb-3">name</h5>
                                                        <p>name</p>
                                                        <p class="text-muted">
                                                            <i class="fas fa-quote-left pe-2"></i>
                                                            name
                                                        </p>
                                                        </div>
                                                    </div>

                                                </div>
                                </div>


                        </div>
                       
                           
           
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>



</div>



@endsection