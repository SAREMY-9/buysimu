<x-app-layout>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title','Buy Simu')</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

	
<div class="container-md my-5 bg-white p-4">



	<div class="row">
		<div class="col-12">

		

			<h6 class="">     12. CONFIDENTIALITY OF INFORMATION </h6>
                
            <p class=""> 
                

                 The Owner may hold and process, by computer or otherwise, any information obtained about the Hirer as a consequence of this Agreement. <br> <br>
    a) The Hirer agrees that the Owner may:  <br><br>
    i) Permit other lenders within the Owner’s group to use personal data and any other information it holds about the Hirer on the <br> 
    Owner’s loan management system to bring to its attention products and services which may be of interest to the Hirer. <br> <br> 
    ii) Disclose its data and/or information relating to the Hirer, including data and information relating to any transaction documents or the assets. <br>
    b)  The Hirer acknowledges and agrees that, notwithstanding the terms of any other agreement between the Hirer and the Owner, a disclosure <br> of 
    information by the Owner in the circumstances contemplated by this paragraph does not violate any duty owed to the Hirer either in <br>
     common law or pursuant to any agreement between the Owner and the Hirer, or in the ordinary course of the Owner's business and the <br>
      customs, usage, and practice related thereto, without further authority from the Hirer and without inquiry by the Owner as to the <br> justification for or validity of such disclosure. <br><br>

      <strong>
By signing this contract, the Hirer will be deemed to have exercised his/her freedom to enter into the Agreement, understood the suitability of the product,
 and the terms and conditions of the contract.   </strong>
        
        
             </p>
               
		</div>


		<div class="col-4">


			
		</div>

		
	

     <div class="form-check p-4 d-flex">
            <input class="form-check-input" type="checkbox" id="termsCheckbox">
            <label class="form-check-label" for="termsCheckbox">
                I have read and agreed to the <a href="#" target="_blank" class="text-decoration-none">terms of the contract</a>
            </label>
        </div>




<div class="d-flex">
    
    <a class="btn btn-outline-danger p-3" href="{{ route('ContractAgreement') }}">Back</a>
                                        
</div>


 <p class="p-3">Page 4 of 4</p>


</div>

		</div>

	</div>

</div>

    
<script>
    document.getElementById('termsCheckbox').addEventListener('change', function() {
        if (this.checked) {
            window.location.href = "{{ route('application') }}";
        }
    });
</script>


</body>
</html>
    
</x-app-layout>