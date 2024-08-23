
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Buy Simu')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<div class="container-md my-5 bg-white p-4 rounded shadow-sm">

    @if($user)

        <div class="text-center mb-4">
            <h5 class="text-color-primary">{{$user->shopName}}</h5>
            <p>This Hire Purchase Agreement (hereinafter referred to as <strong>‘Agreement’</strong>) was made on <i>{{$user->agreementDate}}</i></p>
        </div>

        <div class="text-center mb-4">
            <p><strong>BY AND BETWEEN</strong></p>
            <p>BUY SIMU (hereinafter referred to as the OWNER)</p>
            <p class="text-danger">AND</p>
        </div>

        <div class="mb-4">
            <p><strong>Name:</strong> (Mr/Mrs/Miss/Dr/Prof/Hon) ................................................................................................................................................................................................</p>
            <p><strong>National ID/Passport No:</strong>  ............................................................... ....................................................................................................................................</p>
            <p><strong>Date of Birth:</strong> . ..................................................................................................</p>
            <p><strong>Phone Number:</strong> . .................................................................................................. <strong>Alternative Number:</strong>  ...................................................................................................</p>
            <p><strong>Email Address:</strong> . ..... .............................................................................................................................................................................................</p>
            <p><strong>Postal Address:</strong> P.O. Box . .... ..............................................................................................................................................................................................</p>
            <p><strong>Physical Address:</strong> Town .. ................................................................................................. Estate . .............................................................
            <p>Building ...........................................................................................
            House Number  ........................................................................
            <p><strong>Next of Kin:</strong> ................................................................ <strong>Phone Number:</strong> .................................................. <strong>Relationship:</strong> ..................................................</p>
        </div>

        <div class="text-center mb-4">
            <p>The Owner has agreed with the Hirer to hire purchase terms for a hire purchase price payable through an initial deposit and weekly installments...</p>
        </div>

        <h5 class="text-center mb-4">SPECIFICATION OF THE PRODUCTS</h5>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
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
                    <tr>
                        <td>{{$user->deviceModel}}</td>
                        <td>{{$user->serialNumber}}</td>
                        <td>{{$user->imeiNumber}}</td>
                        <td>{{$user->cashPrice}}</td>
                        <td>{{$user->deposit}}</td>
                        <td>{{$user->clientIdPassport}}</td>
                        <td>{{$user->amountFinanced}}</td>
                        <td>{{$user->insurancePremium}}</td>
                        <td>{{$user->weeklyPayment}}</td>
                        <td>{{$user->loanTenure}}</td>
                        <td>{{$user->totalAmountDue}}</td>
                        <td>{{$user->status}}</td>
                        <td>{{$user->condition}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a class="btn btn-outline-danger p-3" href="{{ route('dashboard') }}">Close</a>
            <a class="btn btn-outline-danger p-3" href="{{ route('contractAgreement') }}">Next</a>
        </div>

        <p class="text-center mt-3">Page 1 of 4</p>

    @else

        <p>{{session('error')}}</p>

    @endif

    @if(session('error'))
        <div class="alert alert-danger mt-3">
            {{session('error')}}
        </div>
    @endif

</div>

</body>
</html>
