<x-app-layout>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('Buy Simu','Buy Simu')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


	</head>
	<body class="login-page">
		


    









             <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">

                            <div class="container"> 

                          <div class="row align-items-center">

                      <!-- Image Section -->


                      <div class="col-md-6 col-lg-7">

                           <img src="/back/vendors/images/banner-img.png" alt="" style="width:40rem" />

                       </div>

                           <!-- Form Section -->

                       <div class="col-md-6 col-lg-5">

                          <div class="login-box bg-white box-shadow border-radius-10">

                           <div class="login-title">

                        <h5 class="text-center text-danger p-3">PRODUCT SPECIFICATIONS</h5>

                          <div class="input-group mb-0">

                              <i class="btn btn-outline-danger btn-lg btn-block" href="javascript:void(0)"  onclick="alert('READ THE TERMS OF THE CONTRACT ON THE DASHBOARD')">Click Before Application</i>

                         </div>

                          </div>
  
                        <form action="{{route('applicationForm')}}" method="POST">

                                  @csrf

                           <!-- Start of Multi-Column Layout -->

                                <div class="row">

                            <!-- First Column -->

                            <div class="col-md-6">


                            
                                <div class="input-group custom mb-3">

                                    <input type="text" class="form-control form-control-sm" placeholder="Device Model" name="deviceModel" autocomplete="deviceModel"  old=""/>

                                     @error('deviceModel')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror

                                </div>

                                

                                <div class="input-group custom mb-3">
                                    <input type="text" class="form-control form-control-sm" placeholder="Serial Number" name="serialNumber" autocomplete="serialNumber" />
                                   

                                     @error('serialNumber')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror

                                </div>

                                <div class="input-group custom mb-3">
                                    <input type="number" class="form-control form-control-sm" placeholder="IMEI Number" name="imeiNumber" autocomplete="imeiNumber" />
            

                                    @error('imeiNumber')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror

                                </div>


                                <div class="input-group custom mb-3">
                                    <input type="text" class="form-control form-control-sm" placeholder="Cash Price" name="cashPrice" autocomplete="cashPrice" />
                            

                                    @error('cashPrice')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror


                                </div>



								 <div class="input-group custom mb-3">

                                    <input type="number" class="form-control form-control-sm" placeholder="Deposit" name="deposit" autocomplete="deposit" />

                                   

                                    @error('deposit')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror



                                </div>



								 <div class="input-group custom mb-3">

                                    <input type="number" class="form-control form-control-sm" placeholder="Client ID/PP Number" name="clientIdPassport" autocomplete="client Id/PassPort"/>

                                   

                                    @error('clientIdPassport')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror


                                 </div>



                                 <div class="input-group custom mb-3">

                                    <label for="agreementdate">Agreement Date</label>

                                    <input type="date" class="form-control form-control-sm" placeholder="Agreement Date" name="agreementDate" autocomplete="agreementDate"/>


                                </div>

                                @error('agreementDate')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror


                            </div>



                            <!-- Second Column -->

                            <div class="col-md-6">

                               

                                <div class="input-group custom mb-3">

                                    <input type="number" class="form-control form-control-sm" placeholder="Amount Financed" name="amountFinanced" autocomplete="Amount Financed" />
								
                                    
                                    @error('amountFinanced')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror


                                </div>

                                <div class="input-group custom mb-3">

                                    <input type="number" class="form-control form-control-sm" placeholder="Insurance Premium" name="insurancePremium" autocomplete="insurance premium"/>

                            
                                    @error('insurancePremium')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror


                                </div>

                                <div class="input-group custom mb-3">

                                    <input type="number" class="form-control form-control-sm" placeholder="Weekly Payment" name="weeklyPayment" autocomplete="Weekly Payment"/>


                                    @error('weeklyPayment')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror

                                </div>

                                <div class="input-group custom mb-3">

                                    <input type="text" class="form-control form-control-sm" placeholder="Loan Tenure" name="loanTenure" autocomplete="Loan Tenure"/>


                                    @error('loanTenure')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror
                                    
                                </div>


                                <div class="input-group custom mb-3">

                                    <input type="number" class="form-control form-control-sm" placeholder="Total Amount Due" name="totalAmountDue" autocomplete="Total Amount Due"/>

                                   
                                    @error('totalAmountDue')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror


                                </div>




                                <div class="input-group custom mb-3">

                                    <h6 class="form-control form-control-sm">Condition</h6>

                                    <select name="condition" autocomplete="class" class="form-control form-control-sm">

									
                                              

                                        <option value="New"></option>
                                        <option value="Refurb">Boxed-Factory-Refurbished</option>
                                        <option value="Ex-Uk">Ex-Uk/used</option>
                                        <option value="New">New</option>
                                     
                                    </select>
                                    
                                    @error('condition')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror

                                </div>

    

                                <div class="input-group custom mb-3">

                                    <input type="text" class="form-control form-control-sm" placeholder="Shop Name" name="shopName" autocomplete="Shop Name"/>

                                    
                                    @error('shopName')

                                     <span class="text-danger">{{ $message }}</span>

                                     @enderror



                                </div>


                            </div>
                        </div>
                        <!-- End of Multi-Column Layout -->

                         <!-- Signature Pad Section -->

                <!---  

                    <div class="form-group">

                        <label for="signature">Client Signature</label>

                        <div class="border p-2">

                        <canvas id="signature-pad" class="signature-pad" width=350 height=200 style="border: 1px solid #000;"></canvas>
                    </div>

                        <button type="button" class="btn btn-warning mt-2" id="clear-signature">Clear Signature</button>

                        <input type="hidden" name="signature" id="signature" />
                        

                    </div>

                --->    

                        <!-- Submit Button -->

                        <div class="row">

                           <div class="input-group mb-3">

                             <a class="btn btn-outline-danger btn-lg btn-block text">Confirm with loan calculator the data entered. </a>

                          </div>

                            <div class="col-sm-12">

                                <div class="input-group mb-0">

                                    <button class="btn btn-danger btn-lg btn-block" href=""  
                                    
                                   type="submit">Submit Application</button>

                                </div>
                            </div>
                        </div>

                    </form>


                    <!-- OR Divider -->
                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>

                    <!-- Go to Dashboard Button -->
                    <div class="input-group mb-0">
                        <a class="btn btn-outline-danger btn-lg btn-block" href="{{route('dashboard')}}">Go to Dashboard</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
	
			
		</div>
		
		<!-- welcome modal end -->
		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>




        <!---


                    <script>
                     
                        var canvas = document.getElementById('signature-pad');

                        var signaturePad = new SignaturePad(canvas);

                        document.getElementById('clear-signature').addEventListener('click', function () {

                        signaturePad.clear();

                         });



                          document.querySelector('form').addEventListener('submit', function (e) {

                            console.log('Form submit event triggered');

                           if (signaturePad.isEmpty()) {

                               alert("Please provide your signature.");

                            e.preventDefault();

                            } else {

                            var signatureData = signaturePad.toDataURL();

                         document.getElementById('signature').value = signatureData;
                            }
                            });

                    </script>


        --->

	</body>

</html>
</x-app-layout>