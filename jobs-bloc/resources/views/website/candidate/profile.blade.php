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
                                    <label for="inputPassword4" class="form-label">Show my profile</label>
                                    <select class="form-select p-3" aria-label="Default select example">
                                    <option value="1">Show</option>
                                    <option value="0">Hide</option>
                              
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Profile url</label>
                                    <input type="password" class="form-control p-3" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Full Name</label>
                                    <input type="password" class="form-control p-3" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control p-3" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Email</label>
                                    <input type="email" class="form-control p-3" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Phone</label>
                                    <input type="text" class="form-control p-3" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Job Title</label>
                                    <input type="text" class="form-control p-3" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Salary</label>
                                    <input type="text" class="form-control p-3" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Salary Type</label>
                                    <select class="form-select p-3" aria-label="Default select example">
                                    <option value="1">Show</option>
                                    <option value="0">Hide</option>
                              
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Introduction Video URL</label>
                                    <input type="text" class="form-control p-3" id="">
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Candidate Categories</label>
                                    <input type="text" class="form-control p-3" id="">
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Description</label>                       
                                     <textarea class="form-control" id="editor" rows="5"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Candidate Locations</label>                       
                                    <input type="text" class="form-control p-3" id="">
                                </div>
                                <div class="col-md-12 ">
                                    <label for="inputPassword4" class="form-label">Friendly Address</label>                       
                                    <input type="text" class="form-control p-3" id="">
                                </div>
                                <label for="inputPassword4" id="social" class="form-label ">Socials</label> 
                                                                           

                                <div class="row">
                                        <table class="table table-borderedless">
                                                <!-- <thead>
                                                    <tr>
                                                        <th>network</th>
                                                        <th>url </th>
                                                        <th>delete</th>
                                                    </tr>
                                                </thead> -->

                                                <tbody>
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

</script>

@endsection