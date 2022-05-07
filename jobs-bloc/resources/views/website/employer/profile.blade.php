@extends('website.layout')




@section('content')

<div class="container">

        <div class="row">
            <div class="col-12 col-md-3">
              @include('website.employer.layout')
            </div>


            <div class="col-12 col-md-9  py-4 px-3">

                <div class="px-4 py-2 border ">
                        <h4 class="my-4">Edit Profile</h4>
                    <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Featured Image</label>
                                    <input type="file" class="form-control p-3" id="inputfile4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Cover Photo</label>
                                    <input type="file" class="form-control p-3" id="inputPassword4">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Title</label>
                                    <input type="password" class="form-control p-3" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Founded Date</label>
                                    <input type="date" class="form-control p-3" id="">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Email</label>
                                    <input type="email" class="form-control p-3" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Website</label>
                                    <input type="url" class="form-control p-3" id="" name="website">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Phone</label>
                                    <input type="text" class="form-control p-3" id="">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Categories</label>
                                    <input type="text" class="form-control p-3" id="">
                                </div>
                               
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Introduction Video URL</label>
                                    <input type="text" class="form-control p-3" id="">
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Description</label>                       
                                     <textarea class="form-control" id="editor" rows="5"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Locations</label>                       
                                    <input type="text" class="form-control p-3" id="">
                                </div>
                                
                                <div class="col-md-12 ">
                                    <label for="inputPassword4" class="form-label">Friendly Address</label>                       
                                    <input type="text" class="form-control p-3" id="">
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Profile  Photo</label>
                                    <input type="file" class="form-control p-3" id="inputPassword4">
                                </div>


                                <label for="inputPassword4" id="social" class="form-label ">Socials</label> 
                                
                                <div class="accordion" id="accordionExample">
                                      <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#social" aria-expanded="false" aria-controls="social">
                                        Socials
                                      </button>
                                      </h2>
                                      <div id="social" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">

                                                    <div class="row">
                                                        <table class="table table-borderedless">
                                                                <tbody id="social_body">
                                                                            <tr>
                                                                                <td>
                                                                                    <label for="inputPassword4" class="form-label">Network</label>                       
                                                                                    <select class="form-select p-2" aria-label="Default select example" name="network[]">
                                                                                    <option value="1">Show</option>
                                                                                    <option value="0">Hide</option>                                
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <label for="inputPassword4" class="form-label">Url</label>                       
                                                                                    <input type="text" class="form-control p-2" id="" name="url[]">
                                                                                </td>

                                                                                <td class="my-auto">

                                                                                    <a href="#" class="btn btn-danger removeSocial">Delete </a>
                                                                                </td>
                                                                            </tr>

                                                                </tbody>

                                                        </table>

                                                        <div>
                                                            <a href="#" class="btn btn-info addSocial">add antoher network</a>
                                                        </div>

                                                    </div>

                                                </div>
                                     </div>
                                  </div>                                                               
                                </div>     
                                <label for="inputPassword4" id="social" class="form-label ">Team Members</label> 
                                
                                <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#team" aria-expanded="false" aria-controls="team">
                                    team
                                      </button>
                                    </h2>
                                    <div id="team" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">

                                                                           
                                          <div class="row">
                                                  <table class="table table-borderedless">
                                                          <tbody id="team_body">
                                                                      <tr>
                                                                          <td>
                                                                              <div class="col-12 mb-2">
                                                                                 
                                                                                <input type="text" class="form-control p-2" id="" name="name[]" placeholder="name">
                                                                              </div>
                                                                              <div class="col-12 mb-2">
                                                                                <input type="text" class="form-control p-2" id="" name="designation[]" placeholder="Designation">
                                                                              </div>
                                                                              <div class="col-12 mb-2">
                                                                                <input type="text" class="form-control p-2" id="" name="experience[]" placeholder="Experience">
                                                                              </div>
                                                                              <div class="col-12 mb-2">
                                                                                <input type="file" class="form-control p-2" id="" name="profile_image[]" placeholder=" Profile Image">
                                                                              </div>

                                                                              <div class="col-12 mb-2">
                                                                                <input type="text" class="form-control p-2" id="" name="facebook[]" placeholder=" Facebook Url">
                                                                              </div>
                                                                              <div class="col-12 mb-2">
                                                                                <input type="text" class="form-control p-2" id="" name="twitter[]" placeholder="Twitter Url">
                                                                              </div>
                                                                              <div class="col-12 mb-2">
                                                                                <input type="text" class="form-control p-2" id="" name="linkedin[]" placeholder="Linkedin Url">
                                                                              </div>
                                                                              <div class="col-12 mb-2">
                                                                                <input type="text" class="form-control p-2" id="" name="instagram[]" placeholder=" Instagram url">
                                                                              </div>
                                                                              <div class="col-12 mb-2">
                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description[]">Description                                                            
                                                                                </textarea>
                                                                              </div>
                                                                              
                                                                          </td>

                                                                          <td class="my-auto">
                                                                              <a href="#" class="btn btn-danger removeTeam">Delete </a>
                                                                          </td>
                                                                      </tr>

                                                          </tbody>

                                                   </table>

                                                  <div>
                                                        <a href="#" class="btn btn-info addTeam">add antoher Mamber</a>
                                                  </div>

                                          </div>
                                               <!--  -->
                                               </div>
                                    </div>
                                  </div>
                                 
                                 
                                </div>
                                <div class="col-md-12 ">
                                    <label for="inputPassword4" class="form-label">Candidate Tags</label>                       
                                    <input type="text" class="form-control p-3" id="">
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
        } );
</script>


<script type="text/javascript">

    $('.addTeam').on('click',function(){
        addTeam();
    });

   
    
        function addTeam(){
                var team = '<tr>'+
                                                                          '<td>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                '<input type="text" class="form-control p-2" id="" name="name[]" placeholder="name">'+
                                                                              '</div>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                '<input type="text" class="form-control p-2" id="" name="designation[]" placeholder="Designation">'+
                                                                              '</div>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                '<input type="text" class="form-control p-2" id="" name="experience[]" placeholder="Experience">'+
                                                                              '</div>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                '<input type="file" class="form-control p-2" id="" name="profile_image[]" placeholder=" Profile Image">'+
                                                                              '</div>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                '<input type="text" class="form-control p-2" id="" name="facebook[]" placeholder=" Facebook Url">'+
                                                                              '</div>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                '<input type="text" class="form-control p-2" id="" name="twitter[]" placeholder="Twitter Url">'+
                                                                              '</div>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                '<input type="text" class="form-control p-2" id="" name="linkedin[]" placeholder="Linkedin Url">'+
                                                                              '</div>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                '<input type="text" class="form-control p-2" id="" name="instagram[]" placeholder=" Instagram url">'+
                                                                              '</div>'+
                                                                              '<div class="col-12 mb-2">'+
                                                                                
                                                                                '<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description[]">'+'Description'+                                                            
                                                                                '</textarea>'+
                                                                              '</div>'+
                                                                              
                                                                          '</td>'+

                                                                          '<td class="my-auto">'+

                                                                              '<a href="#" class="btn btn-danger removeTeam">' +'Delete'+ '</a>'+
                                                                          '</td>'+
                                                                      '</tr>' ;



                        
                          $('#team_body').append(team);              
        };



        $('tbody').on('click','.removeTeam',function(){
            $(this).closest("tr").remove();
        });


     $('.addSocial').on('click',function(){
        addSocial();
    });  

    function addSocial(){

        var social ='<tr>'+
                                                                                '<td>'+
                                                                                    '<label for="inputPassword4" class="form-label">'+ 'Network'+'</label>'+                       
                                                                                    '<select class="form-select p-2" aria-label="Default select example" name="network[]">'+
                                                                                    '<option value="1">'+'Show'+'</option>'+
                                                                                    '<option value="0">'+'Hide'+'</option>'+                                
                                                                                    '</select>'+
                                                                                '</td>'+

                                                                                '<td>'+
                                                                                    '<label for="inputPassword4" class="form-label">'+'Url'+'</label>'+                       
                                                                                    '<input type="text" class="form-control p-2" id="" name="url[]">'+
                                                                                '</td>'+

                                                                                '<td class="my-auto">'+

                                                                                    '<a href="#" class="btn btn-danger removeSocial">'+'Delete'+ '</a>'+
                                                                                '</td>'+
                                                                            '</tr>' ;
        
                                                  $('#social_body').append(social); 
    }

    $('tbody').on('click','.removeSocial',function(){
            $(this).closest("tr").remove();
        });

</script>

@endsection