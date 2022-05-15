@extends('website.layout')




@section('content')

<div class="container">

        <div class="row">
            <div class="col-12 col-md-3">
              @include('website.candidate.layout')
            </div>



            <div class="col-12 col-md-9  py-4 px-3">

                <div class="px-4 py-2 border ">
                        <h4 class="my-4">Edit Profile</h4>
                    <form class="row g-3" action="{{route('')}}" method="POST" id="profile_update" >
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Featured Image</label>
                                    <input type="file" class="form-control p-3" id="inputfile4" name="featured_image">
                                    <span class="text-danger error-text  featured_image_error "></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Cover Photo</label>
                                    <input type="file" class="form-control p-3" id="inputPassword4" name="cover_image">
                                    <span class="text-danger error-text  cover_image_error "></span> 
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Show my profile</label>
                                    <select class="form-select p-3" aria-label="Default select example">
                                    <option value="1">Show</option>
                                    <option value="0">Hide</option>
                              
                                    </select>
                                    <span class="text-danger error-text  cover_image_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="text" class="form-label">Profile url</label>
                                    <input type="text" class="form-control p-3" id="profile_url">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Full Name</label>
                                    <input type="text" class="form-control p-3" id="" name="name">
                                    <span class="text-danger error-text  cover_image_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control p-3" id="inputPassword4" name="dob">
                                    <span class="text-danger error-text  dob_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Email</label>
                                    <input type="email" class="form-control p-3" id="" name="email">
                                    <span class="text-danger error-text  email_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Phone</label>
                                    <input type="text" class="form-control p-3" id="" name="phone">
                                    <span class="text-danger error-text  phone_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Job Title</label>
                                    <input type="text" class="form-control p-3" id="" name="job_title">
                                    <span class="text-danger error-text  job_title_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Salary</label>
                                    <input type="text" class="form-control p-3" id="" name="salary">
                                    <span class="text-danger error-text  salary_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Salary Type</label>
                                    <select class="form-select p-3" aria-label="Default select example" name="salary_type_id">
                                    <option value="1">Show</option>
                                    <option value="0">Hide</option>
                                    </select>
                                    <span class="text-danger error-text  salary_type_id_error "></span> 
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Introduction Video URL</label>
                                    <input type="text" class="form-control p-3" id="" name="introduction_video_url">
                                    <span class="text-danger error-text  introduction_video_url_error "></span> 
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Candidate Categories</label>
                                    <input type="text" class="form-control p-3" id="">
                                    <span class="text-danger error-text  cover_image_error "></span> 
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Description</label>                       
                                     <textarea class="form-control" id="editor" rows="5" name="description"></textarea>
                                     <span class="text-danger error-text  description_error "></span> 
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Candidate Locations</label>                       
                                    <input type="text" class="form-control p-3" id="" name="location_id ">
                                    <span class="text-danger error-text  location_id_error "></span> 
                                </div>
                                <div class="col-md-12 ">
                                    <label for="inputPassword4" class="form-label">Friendly Address</label>                       
                                    <input type="text" class="form-control p-3" id="" name="friendly_address">
                                    <span class="text-danger error-text  friendly_address_error "></span> 
                                </div>
                                <label for="inputPassword4" id="social" class="form-label ">Socials</label> 
                                <div class="row">
                                        <table class="table table-borderedless">
                                               
                                        
                                                <tbody>
                                                            <tr>
                                                                <td>
                                                                    <label for="inputPassword4" class="form-label">Network</label>                       
                                                                    <select class="form-control p-2"  data-live-search="true"  name="network[]" >
                                                                    <option value="1">Show</option>
                                                                    <option value="0">Hide</option>                                
                                                                    </select>
                                                                </td>

                                                                <td>
                                                                    <label for="inputPassword4" class="form-label">Url</label>                       
                                                                    <input type="text" class="form-control p-2" id="" name="url[]">
                                                                </td>

                                                                <td class="my-auto">

                                                                     <a href="#" class="btn btn-danger remove">Delete </a>
                                                                </td>
                                                            </tr>

                                                </tbody>

                                        </table>

                                        <div>
                                              <a href="#" class="btn btn-info addRow">add antoher network</a>
                                         </div>

                                </div>

                                <div class="col-md-12 ">
                                    <label for="inputPassword4" class="form-label">Candidate Tags</label>                       
                                    <input type="text" class="form-control p-3" id="" name="candidate_tags">
                                    <span class="text-danger error-text  candidate_tags_error "></span> 
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn px-4 text-white fw-bold py-3 btn-warning">Save Profile</button>
                                </div>
                    </form>           
                    
                </div>
                    

            </div>



        </div>

</div>



<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        });
</script>


<script type="text/javascript">

        $('.addRow').on('click',function(){
            addRow();
        });

        function addRow(){
                var tr =  '<tr>'+
                                                                '<td>'+
                                                                '<label for="inputPassword4" class="form-label">Network</label>'+                       
                                                                '<select class="form-select p-2" aria-label="Default select example" name="network[]">'+
                                                                '<option value="1">Show</option>'+
                                                                '<option value="0">Hide</option>'+
                                                                '</select>'+
                                                                '</td>'+

                                                                '<td>'+
                                                                '<label for="inputPassword4" class="form-label">Url</label>'+                       
                                                                '<input type="text" class="form-control p-2" id="" name="url[]">'+
                                                                '</td>'+
                                                                '<td class="my-auto">'+
                                                                    '<a href="#" class="btn btn-danger remove">Delete </a>'+
                                                                '</td>'+
                                                                '</tr>';

                          $('tbody').append(tr);              
        };


        $('tbody').on('click','.remove',function(){
            $(this).closest("tr").remove();
        });



        ////////////////////////////////////




        $("#milk_type_update").on('submit',function(e){

e.preventDefault();

$.ajax({

        url:$(this).attr('action'),
        method:$(this).attr('method'),
        data:new FormData(this),
        processData:false,
        dataType:'json',
        contentType:false,
        beforeSend:function(){

            $(document).find('span.error-text').text('')
        },
        success:function(data){

            if(data.status == 400){

                $.each(data.error,function(prefix,val){
                    $('span.'+prefix+'_error').text(val[0]);
                });

            }else if(data.status == 200){

                $('#milk_type_update')[0].reset();

                Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                    );

             window.location = "{{ route('admin.milk_management.milk_type.index') }}";

            }else if(data.status == 500){

              Swal.fire(
                            'Oops...',
                            'Something went wrong!',
                            'error'
                    );

             window.location = "{{ route('admin.milk_management.milk_type.index') }}"     

            }

        } 



});

});


});





</script>

@endsection