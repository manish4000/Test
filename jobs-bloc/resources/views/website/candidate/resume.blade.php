@extends('website.layout')




@section('content')

<div class="container">

        <div class="row">

            <div class="col-12 col-md-3">
              @include('website.candidate.layout')
            </div>


            <div class="col-12 col-md-9  py-4 px-3">

                <div class="px-4 py-2 border ">
                        <h4 class="my-4">Edit Resume</h4>
                    <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Portfolio Photos</label>
                                    <input type="file" class="form-control p-3" id="inputfile4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">CV Attachment</label>
                                    <input type="file" class="form-control p-3" id="inputPassword4">
                                </div>

                                <label for="inputPassword4" id="" class="form-label fw-bold">Education</label> 
                                                                           
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
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="title[]" placeholder="title">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="academy[]" placeholder="academy">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="year[]" placeholder="year">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                    
                                                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description[]">                                                                
                                                                      </textarea>
                                                                    </div>
                                                                </td>

                                                                <td class="my-auto">

                                                                     <a href="#" class="btn btn-danger remove">Delete </a>
                                                                </td>
                                                            </tr>

                                                 </tbody>

                                        </table>

                                        <div>
                                              <a href="#" class="btn btn-info addRow">add antoher Education</a>
                                         </div>

                                </div>


                                <label for="inputPassword4" id="" class="form-label fw-bold">Experience</label> 
                                                                           
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
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="title[]" placeholder="title">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="start_date[]" placeholder="start_date">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="end_date[]" placeholder="end_date">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="company[]" placeholder="company">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      
                                                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description[]">                                                                
                                                                      </textarea>
                                                                    </div>
                                                                </td>

                                                                <td class="my-auto">

                                                                     <a href="#" class="btn btn-danger removeExperience">Delete </a>
                                                                </td>
                                                            </tr>

                                                 </tbody>

                                        </table>

                                        <div>
                                              <a href="#" class="btn btn-info addExperience">add antoher Experience</a>
                                         </div>

                                </div>


                                <label for="inputPassword4" id="" class="form-label fw-bold">Award</label> 
                                                                           
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
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="title[]" placeholder="title">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      <input type="year" class="form-control p-2" id="" name="year[]" placeholder="year">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      
                                                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description[]">                                                                
                                                                      </textarea>
                                                                    </div>
                                                                </td>

                                                                <td class="my-auto">

                                                                     <a href="#" class="btn btn-danger removeAward">Delete </a>
                                                                </td>
                                                            </tr>

                                                 </tbody>

                                        </table>

                                        <div>
                                              <a href="#" class="btn btn-info addAward">add antoher Award</a>
                                         </div>

                                </div>

                                <label for="inputPassword4" id="" class="form-label fw-bold">Skill</label> 
                                                                           
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
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="title[]" placeholder="title">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                      <input type="text" class="form-control p-2" id="" name="percentage[]" placeholder="Percentage">
                                                                    </div>
                                                                   
                                                                </td>

                                                                <td class="my-auto">

                                                                     <a href="#" class="btn btn-danger removeSkill">Delete </a>
                                                                </td>
                                                            </tr>

                                                 </tbody>

                                        </table>

                                        <div>
                                              <a href="#" class="btn btn-info addSkill">add antoher Award</a>
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
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="title[]" placeholder="title">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="academy[]" placeholder="academy">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="year[]" placeholder="year">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="description[]" placeholder="description">'+
                                                                    '</div>'+
                                                                '</td>'+

                                                                '<td class="my-auto">'+

                                                                     '<a href="#" class="btn btn-danger remove">Delete </a>'+
                                                                '</td>'+
                                                            '</tr>';



                        
                          $('tbody').append(tr);              
        };

        $('.addExperience').on('click',function(){
            addExperience();
        });


        function addExperience(){

            var tr = '<tr>'
                                                                +'<td>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="title[]" placeholder="title">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="start_date[]" placeholder="start_date">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="end_date[]" placeholder="end_date">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="company[]" placeholder="company">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      
                                                                      '<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description[]">'+                                                                
                                                                      '</textarea>'+
                                                                    '</div>'+
                                                                '</td>'+

                                                                '<td class="my-auto">'+

                                                                     '<a href="#" class="btn btn-danger removeExperience">Delete </a>'+
                                                                '</td>'+
                                                            '</tr>' ;
        }
        $('.addAward').on('click',function(){
            addAward();
        });


        function addAward(){

            var tr = '<tr>'+
                                                                '<td>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="title[]" placeholder="title">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="year" class="form-control p-2" id="" name="year[]" placeholder="year">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      
                                                                      '<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description[]">'+                                                                
                                                                      '</textarea>'+
                                                                    '</div>'+
                                                                '</td>'+

                                                                '<td class="my-auto">'+

                                                                     '<a href="#" class="btn btn-danger removeAward">Delete </a>'+
                                                                '</td>'+
                                                            '</tr>';
        }
        $('.addSkill').on('click',function(){
            addSkill();
        });


        function addSkill(){

            var tr = '<tr>'
                                                                +'<td>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="title[]" placeholder="title">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="start_date[]" placeholder="start_date">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="end_date[]" placeholder="end_date">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      '<input type="text" class="form-control p-2" id="" name="company[]" placeholder="company">'+
                                                                    '</div>'+
                                                                    '<div class="col-12 mb-2">'+
                                                                      
                                                                      '<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description[]">'+                                                                
                                                                      '</textarea>'+
                                                                    '</div>'+
                                                                '</td>'+

                                                                '<td class="my-auto">'+

                                                                     '<a href="#" class="btn btn-danger removeExperience">Delete </a>'+
                                                                '</td>'+
                                                            '</tr>' ;
        }






        $('tbody').on('click','.removeExperience',function(){
            $(this).closest("tr").remove();
        });
        $('tbody').on('click','.removeAward',function(){
            $(this).closest("tr").remove();
        });
        $('tbody').on('click','.removeskill',function(){
            $(this).closest("tr").remove();
        });
        $('tbody').on('click','.removeExperience',function(){
            $(this).closest("tr").remove();
        });

</script>

@endsection