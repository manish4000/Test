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
                    <form class="row g-3" action="{{route('candidate.profile.update')}}" method="POST" id="profile_update" >

                                     @csrf
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Featured Image</label>
                                    <input type="file" class="form-control p-3 shadow-sm" id="featured_image" name="featured_image">
                                    <span class="text-danger error-text  featured_image_error "></span>
                                </div>
                                <div class="col-md-6">
                                    <img id="featured_image-preview-image-before-upload" src="https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg"
                                        alt="preview image" style="max-height: 100px;">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Cover Photo</label>
                                    <input type="file" class="form-control p-3 shadow-sm" id="cover_image" name="cover_image">
                                    <span class="text-danger error-text  cover_image_error "></span> 
                                    
                                </div>
                                                            
                                <div class="col-md-6 ">
                                    <img id="cover_image-preview-image-before-upload" src="https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg"
                                        alt="preview image" style="max-height: 100px;">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Show my profile</label>
                                    <select class="form-select p-3" aria-label="Default select example">
                                    <option value="1">Show</option>
                                    <option value="0">Hide</option>
                              
                                    </select>
                                    <span class="text-danger error-text   "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="text" class="form-label">Profile url</label>
                                    <input type="text" class="form-control p-3 shadow-sm" id="profile_url">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Full Name</label>
                                    <input type="text" class="form-control p-3 shadow-sm" id="" name="name" value="{{$user_details->name}}">
                                    <span class="text-danger error-text  name_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control p-3 shadow-sm" id="inputPassword4" name="dob">
                                    <span class="text-danger error-text  dob_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Email</label>
                                    <input type="email" class="form-control p-3 shadow-sm " id="" name="email" value="{{$user_details->email}}">
                                    <span class="text-danger error-text  email_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Phone</label>
                                    <input type="text" class="form-control p-3 shadow-sm" id="" name="phone" value="{{$user_details->phone}}">
                                    <span class="text-danger error-text  phone_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Job Title</label>
                                    <input type="text" class="form-control p-3 shadow-sm" id="" name="job_title">
                                    <span class="text-danger error-text  job_title_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Salary</label>
                                    <input type="text" class="form-control p-3 shadow-sm" id="" name="salary">
                                    <span class="text-danger error-text  salary_error "></span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Salary Type</label>
                                    <select class="form-select p-3" aria-label="Default select example" name="salary_type_id">
                                    
                                     @foreach($salary_types as $type)   
                                     <option value="{{$type->id}}">{{$type->title}}</option>
                                     @endforeach
                                    </select>
                                    <span class="text-danger error-text  salary_type_id_error "></span> 
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Introduction Video URL</label>
                                    <input type="text" class="form-control p-3 shadow-sm" id="" name="introduction_video_url">
                                    <span class="text-danger error-text  introduction_video_url_error "></span> 
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Candidate Categories</label>
                                    <input type="text" class="form-control p-3 shadow-sm" id="">
                                    <span class="text-danger error-text   "></span> 
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Description</label>                       
                                     <textarea class="form-control" id="editor" rows="5" name="description"></textarea>
                                     <span class="text-danger error-text  description_error "></span> 
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Candidate Locations</label>                       
                                    <input type="text" class="form-control p-3 shadow-sm" id="" name="location_id ">
                                    <span class="text-danger error-text  location_id_error "></span> 
                                </div>
                                <div class="col-md-12 ">
                                    <label for="inputPassword4" class="form-label">Friendly Address</label>                       
                                    <input type="text" class="form-control p-3 shadow-sm" id="" name="friendly_address">
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
                                    <input type="text" class="form-control p-3 shadow-sm" id="" name="candidate_tags">
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




        $("#profile_update").on('submit',function(e){

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

            console.log(data);

            if(data.status == 401){

                $.each(data.error,function(prefix,val){
                    $('span.'+prefix+'_error').text(val[0]);
                });

            }else if(data.status == 200){

                Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                    );

             window.location = "";

            }else if(data.status == 500){

              Swal.fire(
                            'Oops...',
                            'Something went wrong!',
                            'error'
                    );

             window.location = ""     

            }

        } 



});

});







</script>
<script type="text/javascript">
      
$(document).ready(function (e) {
 
   
   $('#featured_image').change(function(){
            
    let reader = new FileReader();
 
    reader.onload = (e) => { 
 
      $('#featured_image-preview-image-before-upload').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   $('#cover_image').change(function(){
            
    let reader = new FileReader();
 
    reader.onload = (e) => { 
 
      $('#cover_image-preview-image-before-upload').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   
});
 
</script>


@endsection