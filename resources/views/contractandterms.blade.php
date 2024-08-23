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


<h5 class="text-color-primary text-center">Shop Name</h5> 

<p class="">This Hire Purchase Agreement (hereinafter referred as <strong>Agreement’</strong>) was made on <i>.....………………………………..………………................................................................................. </i> 
<p class="text-center text-dark"> <strong> BY AND BETWEEN </strong> </p>

<p class="text-center"> BUY SIMU (hereinafter referred to as the OWNER)</p> 

<p class="text-center">AND</p>

<!-------include biodata her------->

<p> Name: (Mr/Mrs/Miss/Dr/Prof/Hon) ……………………………………………………………………..…………………………………………..…………………………………………………………………………………………………………..…………………………..<br>
National ID/Passport No: …………………..…………………………………………………………………………Date of Birth ...………..……………………….……………………………………………………………………………………………………………………<br>
Phone Number: …………………..…………………………….…………………………………………………….Alternative Number………………..…………………………………………….…………………………………………………………………………………….<br>
Email Address: ……………………………………………………………………..………………………………..……………..………………………………..……………………..………………………………………………………………………………………………………………………………
<br> Postal Address: P.O. Box …………………………………………..………………Postal Code………………………….…………..………….Town………………………………………………
Physical Address: Town……………..……………….………Estate…………………………….…..… Building………………………………….House Number……..………………………
<br> Next of Kin: ………………………………………………………………….………Phone Number…………………………….……………Relationship……………………………………………………………………………………………………………………………… </p>


<p>(Hereinafter referred to as the Hirer), Which terms or expression shall unless repugnant 

to the subject or contest mean and include his/her legal Heirs, executors, successors, administrators, 
legal representatives.<p class="text-center">AND WHEREAS,</p>

<p class="text-center"> the Owner has agreed with the Hirer to a hire purchase terms for a hire purchase price payable through an initial 
deposit and weekly installments indicated in the schedule below; under the terms of this deed the goods as fully described

for the indicated period. The Hirer has agreed to take the same, subject to the covenants, conditions and stipulations, 
hereafter in these presents expressed and contained.

</p>

<h5 class="text-center">SPECIFICATION OF THE PRODUCTS</h5>

</div>

<div class="col-4">

</div>


<div class="table-responsive">

<table class="table table-striped">

<thead>
<tr>
<!--<th>Loan Id</th> ---->

<th>Device Model</th>
<th>Serial No.</th>
<th>IMEI No.</th>
<th>Cash Price</th>
<th>Deposit</th>
<th>Client Id/Passport</th>
<th>Amount Financed</th>
<th>Insurance Premium</th>
<th>Weekly Payment</th>
<th>Loan Tenure</th>
<th>Total Amount Due</th>
<th>Loan Status</th>
<th>Condition</th>
</tr>
</thead>

<tbody>


</tbody>

</table>
               
		</div>

		<div class="col-4">
			
		</div>

<div class="d-flex">

    <a class="btn btn-outline-danger p-3" href="{{ route('dashboard') }}">Dashboard</a>

    <a class="btn btn-outline-danger p-3 ms-auto" href="{{ route('contractAgreement') }}">Agree</a>

</div>


 <p class="p-3">Page 1 of 4</p>


</div>

		</div>

	</div>

</div>


</body>
</html>
    
</x-app-layout>