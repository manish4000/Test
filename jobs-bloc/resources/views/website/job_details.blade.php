@extends('website.layout')

@section('content')


    @guest

        <div class="container">
            <p class=" py-3 px-4"  style="background-color: #faebcc91">The page is restricted only for register user.</p>
            <h3 class="my-5 text-center" >You need login to view this page</h3>

            <div>
                <hr class="mb-4">
            </div>
        </div>
    @endguest


    @auth


        <div class="container-fluid bg-light">

                <div class="container py-5">
                        <div class="row">
                                <div class="col-12 col-md-9 ">
                                    <div class="row">

                                        <div class="col-3">
                                            <div>
                                                <img src="https://jobsbloc.com/wp-content/themes/careerup/images/placeholder.png" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="text-center mt-2">

                                                <a href="#" class="text-decoration-none text-muted">View all jobs <i class="fa-solid fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-6 my-auto">
                                            <div>
                                                <p class="fw-bold">{{$job_data->job_type}} </p>
                                                <span class="fs-4">{{$job_data->title}} </span>  <span> @if($job_data->is_feature == 1)  <i title="Feature" class="fa fa-star ms-2" style="color:#ffc107;"></i>  @endif  </span> 
                                                <p>Posted 2 months ago</p>


                                            </div>
                                        </div>
                                        <div class="col-3"></div>

                                    </div>



                                </div>
                                <div class="col-12 col-md-3 ">

                                    {{-- <button type="submit" class="btn btn-warning   py-3  text-white px-5 mb-3">  Apply Now  <i class="fa-solid fa-arrow-right ms-3"></i></button>
                                    <button type="submit" class="btn btn-secondary   py-3  text-white px-5">   <i class="fa-regular fa-star"></i> ShortList  </button> --}}
                                    <div class="d-grid gap-3 col-12  mx-auto">
                                        <button class="btn btn-warning   py-3  text-white px-5 " type="button">Apply Now  <i class="fa-solid fa-arrow-right ms-2"></i> </button>
                                        <button class="btn btn-warning   py-3  text-white px-5" type="button"> <i class="fa-regular fa-star me-2 "></i>  ShortList </button>
                                    </div>

                                </div>
                        </div>

                </div>

        </div>

        <div class="container-fluid mb-5">
            <div class="container py-5 text-muted">
                <h4 class="text-dark mb-3">Job Description</h4>
                <div class="mb-3"> 
                    {!! $job_data->description !!}
                </div>
                <p><i class="fa-solid fa-location-dot"></i>  {{ $job_data->location}}</p>
                <p>Immediate joining will be preferred</p>
            </div>


            <div class="container">
                   <p class="fw-bold">Related Jobs</p> 

                   <div class="row">

                    <div class="col-12 col-md-12 mb-3">
                        <div class="row shadow py-4 px-4" >
                            <div class="col-3 text-center">
                                <div class=" ">
                                    <img src="https://jobsbloc.com/wp-content/themes/careerup/images/placeholder.png" alt="" height="120px" width="110" class="border">
                            </div>
                               
                            </div>
                            <div class="col-6 my-auto text-start">
                                <div>
                                    <p class="text-warning">Full time </p>
                                    <span class="fw-bold">Duty Manager </span> <span class="badge bg-danger">Danger</span>
                                    <p> <small>Posted 2 months ago </small> </p>

                                </div>
                            </div>
                            <div class="col-3 my-auto">
                                <i class="far fa-star fa-2x  rounded-circle" ></i>
                                <i class="fas fa-star fa-2x  text-warning" ></i>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                        <div class="row shadow py-4 px-4" >
                            <div class="col-3 text-center">
                                <div class=" ">
                                    <img src="https://jobsbloc.com/wp-content/themes/careerup/images/placeholder.png" alt="" height="120px" width="110" class="border">
                            </div>
                               
                            </div>
                            <div class="col-6 my-auto text-start">
                                <div>
                                    <p class="text-warning">Full time </p>
                                    <span class="fw-bold">Duty Manager </span> <span class="badge bg-danger">Danger</span>
                                    <p> <small>Posted 2 months ago </small> </p>

                                </div>
                            </div>
                            <div class="col-3 my-auto">
                                <i class="far fa-star fa-2x  rounded-circle" ></i>
                                <i class="fas fa-star fa-2x  text-warning" ></i>
                            </div>

                        </div>
                    </div>
                    
            </div>


            </div>



        </div>





    @endauth


@endsection