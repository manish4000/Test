@extends('website.layout')

@section('content')


   <div class="container-fluid">

            <div class="container-fluid bg-light">
                    <div class="container py-5">
                            <div class="row">
                                    <div class="col-12 col-md-9 ">
                                        <div class="row">

                                            <div class="col-3 ">
                                                <div>
                                                    <img src="https://jobsbloc.com/wp-content/themes/careerup/images/placeholder.png" alt="" height="160" class="rounded-circle img-fluid">
                                                </div>             
                                            </div>
                                            <div class="col-6 mt-3 mt-md-0 my-auto">
                                                <div>
                                                    <p class="fw-bold fs-4">{{$resume->name}} </p>
                                                    <p><small>Marketing jobs</small></p>
                                                    <p> <span> <i class="fa-solid text-warning fa-phone"></i> <small class="text-muted"> {{$resume->phone}}</small> </span> &ensp; <span> <i class="fa-solid text-warning fa-envelope"></i> <small class="text-muted"> {{$resume->email}}</small> </span> </p>
                                                    <p class=""> <i class="fa-solid  text-warning fa-location-dot"></i> <small> {{$resume->friendly_address}}  </small> </p>

                                                </div>
                                            </div>
                                            <div class="col-3"></div>

                                        </div>



                                    </div>
                                    <div class="col-12 col-md-3 ">

                                        {{-- <button type="submit" class="btn btn-warning   py-3  text-white px-5 mb-3">  Apply Now  <i class="fa-solid fa-arrow-right ms-3"></i></button>
                                        <button type="submit" class="btn btn-secondary   py-3  text-white px-5">   <i class="fa-regular fa-star"></i> ShortList  </button> --}}
                                        <div class="d-grid gap-3 col-12  mx-auto">

                                            <button class="btn btn-secondary   py-3  text-white px-5 disabled" type="button"> <i class="fa-regular fa-star me-2 "></i>  ShortList </button>
                                            <button class="btn btn-warning   py-3  text-white px-5 disabled" type="button"> <i class="fa-regular fa-star me-2 "></i>  Download CV </button>
                                
                                            </button>
                                        </div>

                                    </div>
                            </div>

                    </div>

            </div>

        <div class="container">


            <div id="content">
              <ul id="tabs" class="nav nav-tabs py-3" data-tabs="tabs">
                <li class="active px-3 px-lg-5 py-2 "><a href="#description" class="text-decoration-none text-muted" data-toggle="tab">Description</a>
                </li>
                <li class="px-3 px-lg-5 py-2 "><a href="#education" class="text-decoration-none text-muted" data-toggle="tab">Education</a>
                </li>
                <li class="px-3 px-lg-5 py-2 "><a href="#experience" class="text-decoration-none text-muted" data-toggle="tab">Experience</a>
                </li>
                <li class="px-3 px-lg-5 py-2 "><a href="#portfolios" class="text-decoration-none text-muted" data-toggle="tab">Portfolios</a>
                </li>
                <li class="px-3 px-lg-5 py-2 "><a href="#skills" class="text-decoration-none text-muted" data-toggle="tab">Skills</a>
                </li>
                <li class="px-3 px-lg-5 py-2 "><a href="#awards" class="text-decoration-none text-muted" data-toggle="tab">Awards</a>
                </li>
              </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div id="my-tab-content" class="tab-content">
                            <div class="row">
                                <div class="col-8"></div>
                                
                                <div class="col-2"></div>
                            </div>
                            {{-- this is for description --}}
                          <div class="tab-pane active" id="description">
                            <h5 class="py-3">About Me</h5>
                            {!! $resume->description!!}
                            
        
                           
                          </div>
                          {{-- end of description --}}

                          {{-- this is for education  --}}
                          <div class="tab-pane my-4" id="education">
                            @isset($resume_education)

                            <h5 class="mt-3">Education</h5>
                            
                            @foreach ($resume_education as $education)
                             
                            <div class="py-3 " >
                                <div class="ps-4 border-start border-warning border-3">

                                    <div class="row mb-2"> 
                                       <span><i class="fas fa-briefcase fa-x mb-1 mr-3 ml-3" aria-hidden="true"></i> <span class="fs-5 fw-bold"> {{$education->ed_title}}  </span>  </span>                      
                                      </div>
                                            
                                      <p class="mb-0 ml-1 light-grey-text mb-2"><i class="fa-solid fa-building"></i> {{$education->ed_academy}}   </p> 
                                      <p class="mb-0 ml-1 light-grey-text mb-2"><i class="fa-solid fa-calendar-days"></i> {{$education->ed_year}}   </p> 
                                      <p class="mb-0 ml-1 light-grey-text mb-2"> <i class="fa-solid fa-address-card"></i> {{$education->ex_description}}   </p> 
                                </div>
                            </div>
                                        
                            @endforeach  
                                                          
                         @endisset
                          </div>

                          {{-- end of education  --}}
                          {{-- this  is for experice --}}
                          <div class="tab-pane" id="experience">
                            @isset($resume_experience)

                                <h5 class="mt-3">Experience</h5>
                                
                                @foreach ($resume_experience as $experience)
                                 
                                <div class="py-3 " >
                                    <div class="ps-4 border-start border-warning border-3">

                                        <div class="row mb-2"> 
                                           <span><i class="fas fa-briefcase fa-x mb-1 mr-3 ml-3" aria-hidden="true"></i> <span class="fs-5 fw-bold"> {{$experience->ex_title}}  </span>  </span>                      
                                          </div>
                          
                                          <p class="font-weight-bold ml-1  mb-2"><i class="fa-solid fa-calendar-days"></i>  <small>  {{$experience->ex_start_date}}   -  {{$experience->ex_end_date}} </small> </p>
                          
                                          <p class="mb-0 ml-1 light-grey-text mb-2"><i class="fa-solid fa-building"></i> {{$experience->ex_company}}   </p> 
                                          <p class="mb-0 ml-1 light-grey-text mb-2"> <i class="fa-solid fa-address-card"></i> {{$experience->ex_description}}   </p> 
                                    </div>
                                </div>
                                            
                                @endforeach  
                                                              
                             @endisset
                         
                          </div>
                          {{-- this end is for experice --}}
                          <div class="tab-pane" id="portfolios">
                            <h1>Portfolios</h1>
                         
                          </div>
                             {{-- this  is for skills  --}}
                          <div class="tab-pane" id="skills">

                            @isset($resume_skills)                                    
                            <h5 class="my-3">Skills</h5>
                            
                              @foreach ($resume_skills as $skills)
                              <div class="border-start border-warning border-3">
                                  <p class="fs-6 ms-3 mb-1">{{$skills->sk_title}}</p>
                                   <div class="progress ms-3">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $skills->sk_percentage ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>       

                              </div>
                              @endforeach  
                                                           
                                 @endisset
                   
                          </div>
                             {{-- this end of skills  --}}
                             {{-- this is for awards --}}
                          <div class="tab-pane" id="awards">

                            @isset($resume_awards)
                               
                            <h5 class="mt-3">Awards</h5>
                             
                            @foreach ($resume_awards as $award)
                                
                            <div class="py-3 " >
                                <div class="ps-4 border-start border-warning border-3">

                                    <div class="row mb-2"> 
                                       <span><i class="fa-solid  mx-3  fa-trophy"></i> <span class="fs-5fw-bold"> {{$award->aw_title}}  </span>  </span>                      
                                      </div>
                      
                                      <p class="font-weight-bold ml-1  mb-2"><i class="fa-solid mx-3 fa-calendar-days"></i>  <small>  {{$award->aw_year}} </small> </p>
                      
                                      <p class="mb-0 ml-1 light-grey-text mb-2"> <i class="fa-solid mx-3 fa-address-card"></i> {{$award->aw_description}}   </p> 
                                </div>
                            </div>
                                        @endforeach  
                                                              
                                @endisset
                   
                          </div>
                            {{-- this is end  for awards --}}
                        </div>
                    </div>
                    {{-- contact form --}}
                    <div class="col-12 col-lg-4 my-4">
                        <form class="mt-4 border px-4 py-5 bg-light">
                            <!-- Email input -->
                            <div class="form-outline mb-3">
                              <input type="text" id="form1Example1" class="form-control p-2 rounded-0" placeholder="Subject" />
                            </div>
                            <div class="form-outline mb-3">
                              <input type="email" id="form1Example1" class="form-control p-2 rounded-0" placeholder="Email" />
                            </div>
                            <div class="form-outline mb-3">
                              <input type="text" id="form1Example1" class="form-control p-2 rounded-0" placeholder="Phone" />
                            </div>
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form4Example3" placeholder="message" rows="4"></textarea>
                              
                             </div>
                          
                        
                            
                          
                            <!-- Submit button -->
                            <button type="button" class="btn btn-block btn-outline-warning">Send Now</button>
                          </form>
                    </div>
                </div>
            </div>
            
          </div>
        
        
        
        
        
       
         
    
    </div> 

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@endsection