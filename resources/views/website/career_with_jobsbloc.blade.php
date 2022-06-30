@extends('website.layout')

@section('content')

<div class="container-fluid  py-4 bg-light">

    <div class="container d-flex justify-content-between align-items-center">
        <h3>Career With Jobsbloc</h3>
    
            <div>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-reset">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Career with jobsbloc</li>
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
                        <div class="col-md-8 text-center py-2">
                                 <div class="accordion" id="accordionExample mb-3">
                                        <div class="accordion-item mb-4">
                                            <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Customer support associate
                                            </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                                            Customer support associate
                                            </button>
                                            </h2>
                                            <div id="collapseOne2" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                            </div>
                                        </div>
                                   
                                
                                 </div>
                               
                        </div>
                        <!--Grid column-->
               
                     
                        <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-4 mb-md-0 mb-5 p-3 border">
                        <form id="contact_us_create" name="contact-form" action="" method="POST" class="p-3">
                                @csrf
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                        <label for="" class="form-label "> Your Name</label>

                                            <input type="text" id="name" name="name" class="form-control p-1">
                                            <span class="text-danger error-text name_error "></span>
                                            
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                        <label for="" class="form-label "> Your Email</label>
                                            <input type="text" id="email" name="email" class="form-control p-1">
                                            <span class="text-danger error-text email_error "></span>
                                            
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                        <label for="" class="form-label ">Apply For</label>
                                            <input type="text" id="subject" name="subject" class="form-control p-1">
                                            <span class="text-danger error-text subject_error "></span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                        <label for="" class="form-label ">Phone No</label>
                                            <input type="text" id="subject" name="subject" class="form-control p-1">
                                            <span class="text-danger error-text subject_error "></span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                        <label for="" class="form-label ">Your Message</label>
                                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea p-1"></textarea>
                                            
                                            <span class="text-danger error-text message_error "></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                        <label for="" class="form-label ">Cv/Resume</label>
                                           <input type="file" name="cv">
                                            <span class="text-danger error-text message_error "></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="row my-2">

                                    <!--Grid column-->
                                    <div class="col-md-12 pt-3">

                                        <div class="md-form text-center">
                                        <input type="submit" id="subject" name="subject" class="btn btn-outline-warning " >
                                    
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->



                            </form>
                            
                    
                        </div>
                        <!--Grid column-->



                    </div>

    </section>


    </div>



  </div>






@endsection