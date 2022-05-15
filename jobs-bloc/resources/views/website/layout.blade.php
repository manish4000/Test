<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
      <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/fa6267ab13.js" crossorigin="anonymous"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  

    <link href="css/style.css" rel="stylesheet">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
  
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



      



  </head>
  <body>

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
          <a class="nav-link text-dark  active text-decoration-none text-reset" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="{{route('candidates')}}">Find Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="{{route('jobs')}}">Job Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="{{route('job_by_category')}}">Jobs By Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="{{route('job_by_location')}}">Jobs By Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " aria-current="page" href="{{route('contact')}}">Contact</a>
        </li>
     

        @if(Route::has('login'))
            @auth 
                @if(Auth::user()->role == "candidate")
                <li class="nav-item dropdown">
                  <a class="nav-link  dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">
                     <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar"
                  class="img-fluid rounded-circle me-3" width="50">
                   {{Auth::user()->name}} </a>
                    <ul class="dropdown-menu">
                   <li><a class="dropdown-item" href="#"><i class="fas fa-tachometer-alt fa-fw"></i>  Dashboard</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-fw"></i> Profile</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-file fa-fw"></i> My Resume</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-star-o fa-fw"></i> Applied Jobs</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-tag fa-fw fa-fw"></i> Packages</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar fa-fw"></i> Shortlist Jobs</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-user-secret fa-fw"></i> Following Employers</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-bell-o fa-fw"></i> Alerts Jobs</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-comments-o fa-fw"></i> Messages</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-unlock-alt fa-fw"></i> Change Password</a></li>
                   <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out fa-fw"></i> Logout</a></li>
                   <li><a class="dropdown-item" href="#"><i class="fas fa-trash fa-fw"></i> Delete Profile</a></li>
                    
                    
                    </ul>
                </li>
                @else    
                  
                @endif
            @else
            <li>
            <a href="{{route('register')}}" class="btn btn-warning p-3  fw-bold"> Login/Register </a>
           </li>

            @endif
            
        @endif

        
        
     
      </ul>
    </div>
  </div>
</nav>

<div class="d-block d-lg-none text-center px-5 border border-warning  py-3 m-2">
  <a href="{{route('login_register')}}" class="btn btn-warning px-5 py-3  fw-bold"> Login/Register </a>
</div>

<!-- of canvas -->

<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-white">
        <ul class="navbar-nav">
                <li class="nav-item py-1">
                  <a class="nav-link active text-decoration-none text-reset" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item py-1">
                  <a class="nav-link active text-decoration-none text-reset" aria-current="page" href="#"> Find Resume</a>
                </li>
                <li class="nav-item py-1">
                  <a class="nav-link active text-decoration-none text-reset" aria-current="page" href="#">Job Search</a>
                </li>
                <li class="nav-item py-1">
                  <a class="nav-link active text-decoration-none text-reset" aria-current="page" href="#">Jobs By Category</a>
                </li>
                <li class="nav-item py-1">
                  <a class="nav-link active text-decoration-none text-reset" aria-current="page" href="#">Jobs By Location</a>
                </li>
                <li class="nav-item py-1">
                  <a class="nav-link active text-decoration-none text-reset" aria-current="page" href="#">Contact</a>
                </li>
                <li class="nav-item py-1">
                  <a class="nav-link active text-decoration-none text-reset" aria-current="page" href="#">Career with jobsbloc</a>
                </li>
                <li class="nav-item py-1">
                  <a class="nav-link active text-decoration-none text-reset" aria-current="page" href="#">wallet</a>
                </li>
              </ul>
   
  </div>
</div>
<!--  -->

<!--  -->
    @yield('content')



<!-- footer -->




<footer class="container">

  <div class="row">
        <div class="col-12 col-lg-3">

            <img src="images/logo.png" alt=""  width="100%">

              <h5><a href="mailto:info@jobsbloc.com" class="text-decoration-none">info@jobsbloc.com</a></h5>

              <!-- Facebook -->
                <a class="btn btn-primary text-decoration-none text-reset" style="background-color: #3b5998;" href="#!" role="button"  ><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary text-decoration-none text-reset" style="background-color: #55acee;" href="#!" role="button" ><i class="fab fa-twitter"></i></a>


                <!-- Instagram -->
                <a class="btn btn-primary text-decoration-none text-reset" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary text-decoration-none text-reset" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>




        </div>
        <div class="col-12 col-lg-3 text-start">

            <h5 class="text-uppercase">Important Links</h5>

            
                @for($i=1;$i<=10;$i++)
                   <p><a href="#" class="text-muted  text-decoration-none"> Home </a></p>
                @endfor  
          
        </div>
        <div class="col-12 col-lg-3 text-start">

            <h5 class="text-uppercase">JOBSBLOC</h5>

            
                @for($i=1;$i<=10;$i++)
                   <p><a href="#" class="text-muted  text-decoration-none"> Stuck in Personal or Professional life? </a></p>
                @endfor  
          
        </div>
       
        <div class="col-12 col-lg-3">
           <h5>SEARCH JOB </h5>   

           <form class="row   my-4">
                    <div class="col-12 mb-3 ">                       
                        <input type="text"  class="form-control border-warning py-4 px-5" id="staticEmail2" value="Job Title or Keyword">
                    </div>
                             <div class=" d-grid  col-lg-2 text-center mb-3">
                        <button type="submit" class="btn btn-warning rounded-pill py-4 btn-large  btn-block  text-white fw-bold px-5"> Search</button>
                    </div>
           
              </form>  
           
        </div>
  </div>


</footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
<script>
  document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth > 992) {

	document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

		everyitem.addEventListener('mouseover', function(e){

			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.add('show');
				nextEl.classList.add('show');
			}

		});
		everyitem.addEventListener('mouseleave', function(e){
			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.remove('show');
				nextEl.classList.remove('show');
			}

		})
	});

}
// end if innerWidth
}); 
</script>   
  
  </body>
</html>