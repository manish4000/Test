@extends('website.layout')

@section('content')

<div class="container mt-5 mb-5">
   <div class="row g-2">
      <div class="col-md-3">
       
         <div class="processor p-2">
            <div class="heading d-flex justify-content-between align-items-center">
               <h6 class="text-uppercase">Category</h6>
               <span>--</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Intel Core i7 </label> </div>
               <span>3</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Core i6 </label> </div>
               <span>4</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Core i3 </label> </div>
               <span>14</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Centron </label> </div>
               <span>8</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Intel Pentinum </label> </div>
               <span>14</span> 
            </div>
         </div>
         <div class="brand p-2">
            <div class="heading d-flex justify-content-between align-items-center">
               <h6 class="text-uppercase">Location</h6>
               <span>--</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Apple </label> </div>
               <span>13</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Asus </label> </div>
               <span>4</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Dell </label> </div>
               <span>24</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Lenovo </label> </div>
               <span>18</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Acer </label> </div>
               <span>44</span> 
            </div>
         </div>
         <div class="type p-2 mb-2">
            <div class="heading d-flex justify-content-between align-items-center">
               <h6 class="text-uppercase">Type</h6>
               <span>--</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Hybrid </label> </div>
               <span>23</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Laptop </label> </div>
               <span>24</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Desktop </label> </div>
               <span>14</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Touch </label> </div>
               <span>28</span> 
            </div>
            <div class="d-flex justify-content-between mt-2">
               <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Tablets </label> </div>
               <span>44</span> 
            </div>
         </div>
         <div class="type p-2 mb-2">
         
         <div class="price-range-block">

                <div class="sliderText">jQuery UI Price Range Slider</div>

                <div id="slider-range" class="price-filter-range" name="rangeInput"></div>

                <div style="margin:30px auto">
                <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                </div>

                <button class="price-range-search" id="price-range-submit">Search</button>

                <div id="searchResults" class="search-results-block"></div>

                </div>

         
         </div>
      </div>
    
      
        <div class="col-md-9  ">
         <!-- <div class="container  overflow-hidden">

       
            <div class="row  ">

                    @for($i=1;$i<=10;$i++)

                    <div class="col-md-6 border">
                    <div class="product py-4">
        
                        <div class="text-center"> <img src="https://jobsbloc.com/wp-content/themes/careerup/images/placeholder.png" width="200"> </div>
                        <div class="about text-center">
                            <h5>Name</h5>
                            <span>$1,999.99</span> 
                        </div>
                        <div class=" d-grid mx-4 my-3 ">
                            <button type="submit" class="btn btn-warning rounded btn-large  text-white btn-block py-3 fw-bold px-5"> View Profile </button>
                        </div>
                    </div>
                    </div>

                    @endfor
            
             </div>
            </div>  -->

            <div class="container p-5">

                <p class="fs-5">Showing 1 – 6 of 825 results</p>

                <div class="mb-3">
                        <button type="submit" class="btn btn-warning   py-3  text-white  fw-bold px-5"> Get Candidate Alerts</button>
                    </div>

            <div class="row g-4">

            @for($i=1;$i<=10;$i++)

                                <div class="col-6 border">
                                <div class="product py-4">

                                    <div class="text-center"> <img src="https://jobsbloc.com/wp-content/themes/careerup/images/placeholder.png" width="200"> </div>
                                    <div class="about text-center">
                                        <h5>Name</h5>
                                        <span>4t5rtre</span> 
                                    <div class="d-flex justify-content-between px-4 bg-light py-3">
                                        <span class="text-danger ">Location</span>
                                        <span class="text-muted">Brazil</span>
                                    </div>    
                                    <div class="d-flex justify-content-between px-4 bg-light py-3">
                                        <span class="text-danger ">Sector</span>
                                        <span >
                                            <a href="#" class="text-decoration-none text-muted"" > Accounting / Finance,</a>
                                            <a href="#" class="text-decoration-none text-muted""> Automobile,</a>
                                        </span>
                                    </div>    
                                    </div>
                                    <div class=" d-grid mx-4 my-3 ">
                                        <button type="submit" class="btn btn-warning rounded btn-large  text-white btn-block py-3 fw-bold px-5"> View Profile </button>
                                    </div>
                                </div>
                                </div>

             @endfor

            </div>
            </div>
        </div>


   </div>
</div>


<script>
    $(document).ready(function(){
	
	$('#price-range-submit').hide();

	$("#min_price,#max_price").on('change', function () {

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());

	  if (min_price_range > max_price_range) {
		$('#max_price').val(min_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });
	  
	});


	$("#min_price,#max_price").on("paste keyup", function () {                                        

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());
	  
	  if(min_price_range == max_price_range){

			max_price_range = min_price_range + 100;
			
			$("#min_price").val(min_price_range);		
			$("#max_price").val(max_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$(function () {
	  $("#slider-range").slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 10000,
		values: [0, 10000],
		step: 100,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }
		  
		  $("#min_price").val(ui.values[0]);
		  $("#max_price").val(ui.values[1]);
		}
	  });

	  $("#min_price").val($("#slider-range").slider("values", 0));
	  $("#max_price").val($("#slider-range").slider("values", 1));

	});

	$("#slider-range,#price-range-submit").click(function () {

	  var min_price = $('#min_price').val();
	  var max_price = $('#max_price').val();

	  $("#searchResults").text("Here List of products will be shown which are cost between " + min_price  +" "+ "and" + " "+ max_price + ".");
	});

});
</script>

@endsection