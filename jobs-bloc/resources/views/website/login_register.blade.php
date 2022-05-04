@extends('website.layout')

@section('content')

<div class="container-fluid  py-4 bg-light">

    <div class="container d-flex justify-content-between align-items-center">
        <h3>Login/Register</h3>
    
            <div>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-reset">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login / Register</li>
                </ol>
                </nav>
    
           </div>

    </div>
</div>
    
    <div class="container-fluid inquery py-5 ">


    <div class="container border-bottom border-2 border-dark"> 

                
    <!--Section: Contact v.2-->
    <section class="mb-4">

                
                    <div class="row">


                    <!--Grid column-->
                          <div class="col-md-5 mb-md-0 mb-5 p-4 ">

                                        <h4 class="text-center">Quick Login</h4>
                                        <p class="text-center">Login Your Account</p>


                                <form id="contact_us_create" name="contact-form" action="" method="POST" class="p-3">
                                        @csrf
                                        <!--Grid row-->
                                        <div class="row mb-3">
                                            <!--Grid column-->
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                
                                                    <input type="text" id="email" name="username" class="form-control p-2" >
                                                    <span class="text-danger error-text email_error "></span>
                                                    
                                                </div>
                                            </div>
                                            <!--Grid column-->

                                        </div>
                                        <!--Grid row-->
                                        <!--Grid row-->
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                            
                                                    <input type="text" id="subject" name="subject" class="form-control p-2">
                                                    <span class="text-danger error-text subject_error "></span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!--Grid row-->                   
                                        <div class="row">
                                            <!--Grid column-->
                                            <div class="col-md-12">

                                                <div class="mb-1 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
                                                </div>
                                            </div>
        
                                        </div>
                                        <div class="row my-2">

                                            <!--Grid column-->
                                            <div class="col-md-12 pt-3">

                                                <div class="md-form d-grid text-center">

                                                <input type="submit" id="subject" name="subject" class="btn btn-outline-warning  py-3" value="Login" >
                                            
                                                </div>

                                            </div>
                                        </div>
                                        <!--Grid row-->
                                    </form>
                            
                    
                        </div>
                        <!--Grid column-->




                          <!--Grid column 2 -->
                          <div class="col-md-5  mb-md-0 mb-5 p-4 border">

                                        <h4 class="text-center">Create New Account</h4>
                                        <p class="text-center">Choose your Account Type</p>

                                
                                <div class="row px-3">

                                    <div class="col-6">
                                              <div class="md-form d-grid text-center">
                                                    <button  id="candidate"  class="single btn text-white btn-warning  py-2" target="1" > Candidate  </button>
                                               </div>
                                    </div>
                                    <div class="col-6">
                                              <div class="md-form d-grid text-center">
                                              <button   id="employer"  class="single btn btn-warning text-white  py-2" target="2" > Employer  </button>
                                               </div>
                                    </div>
                                    

                                </div>


                                <div id="div1" class="target">

                                    <form id="contact_us_create" name="contact-form" action="" method="POST" class="p-3">
                                            @csrf
                                            <!--Grid row-->
                                            <div class="row mb-3">
                                                <!--Grid column-->
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                    
                                                        <input type="text" id="email" name="username" placeholder="Username*" class="form-control p-2">
                                                        <span class="text-danger error-text email_error "></span>
                                                        
                                                    </div>
                                                </div>
                                                <!--Grid column-->
    
                                            </div>

                                            <div class="row mb-3">
                                                <!--Grid column-->
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <input type="text" id="email" name="username" placeholder="Email*" class="form-control p-2">
                                                        <span class="text-danger error-text email_error "></span>
                                                        
                                                    </div>
                                                </div>   
                                            </div>

                                            <div class="row mb-3">
                                                <!--Grid column-->
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <input type="password" id="email" name="username" placeholder="Password*" class="form-control p-2">
                                                        <span class="text-danger error-text email_error "></span>
                                                        
                                                    </div>
                                                </div>   
                                            </div>

                                            <div class="row mb-3">
                                                <!--Grid column-->
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <input type="password" id="email" name="username" placeholder="Confirm Password*" class="form-control p-2">
                                                        <span class="text-danger error-text email_error "></span>
                                                        
                                                    </div>
                                                </div>   
                                            </div>
                                          

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                
                                                        <input type="text" id="subject" name="phone" class="form-control p-2" placeholder="Phone">
                                                        <span class="text-danger error-text subject_error "></span>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Category</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                </div>
                                            </div>
                                            <!--Grid row-->                   
                                            <div class="row">
                                                <!--Grid column-->
                                                <div class="col-md-12">
    
                                                    <div class="mb-1 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">You accept our Terms and Conditions and Privacy Policy</label>
                                                    </div>
                                                </div>
            
                                            </div>
                                            <div class="row my-2">
    
                                                <!--Grid column-->
                                                <div class="col-md-12 pt-3">
    
                                                    <div class="md-form d-grid text-center">
    
                                                    <input type="submit" id="subject" name="subject" class="btn btn-dark  py-3" value="Register Now" >
                                                
                                                    </div>
    
                                                </div>
                                            </div>
                                            <!--Grid row-->
                                        </form>
                                </div>


                               {{-- <div id="div2"  class="target">

                                    <form id="contact_us_create" name="contact-form" action="" method="POST" class="p-3">
                                            @csrf
                                            <!--Grid row-->
                                            <div class="row mb-3">
                                                <!--Grid column-->
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                    
                                                        <input type="text" id="email" name="email" class="form-control p-2">
                                                        <span class="text-danger error-text email_error "></span>
                                                        
                                                    </div>
                                                </div>
                                                <!--Grid column-->
    
                                            </div>
                                            <!--Grid row-->
                                            <!--Grid row-->
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                
                                                        <input type="text" id="subject" name="subject" class="form-control p-2">
                                                        <span class="text-danger error-text subject_error "></span>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->                   
                                            <div class="row">
                                                <!--Grid column-->
                                                <div class="col-md-12">
    
                                                    <div class="mb-1 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">You accept our Terms and Conditions and Privacy Policyn</label>
                                                    </div>
                                                </div>
            
                                            </div>
                                            <div class="row my-2">
    
                                                <!--Grid column-->
                                                <div class="col-md-12 pt-3">
    
                                                    <div class="md-form d-grid text-center">
    
                                                    <input type="submit" id="subject" name="subject" class="btn btn-outline-warning  py-3" value="Login" >
                                                
                                                    </div>
    
                                                </div>
                                            </div>
                                            <!--Grid row-->
                                        </form>
                                </div> --}}

                            
                    
                        </div>
                        <!--Grid column-->



                    </div>

    </section>


    </div>



  </div>

<script>

    $("#candidate").click(function(){

        $("#div2").hide();
        $("#div1").show();

    });
    

</script>




@endsection