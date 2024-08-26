@extends('back.pages.admin.home')
@section('content')



<form-group>

<form action="{{ route('pTest')}}"  method="POST">


    @csrf

<h6>CLIENT VERIFICATION</h6><br>
   
     <div class="input-group">

           <input type="text" name="userId" class="form-control" placeholder="Search ID OR PASSPORT......">
           <span class="input-group-text"><i class="fa fa-search"></i></span>
</div>
 
   <button type="submit" class="btn btn-danger">Verify</button>

     <br>
     <br>
     <br>
     
</form>



 
</form-group>


    
                <!---new table----->

                 <h5 class="text-center mb-4">CLIENT DETAILS</h5>

        <div class="table-responsive p-3">
            <table class="table table-striped table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Names</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Alt Phone</th>
                        <th>ID/Passport</th>
                        <th>Client Id/Passport</th>
                        <th>DoB</th>
                        <th>Postal Address</th>
                        <th>Town</th>
                        <th>Physical Address</th>
                        <th>Estate</th>
                        <th>Building</th>
                        <th>Next of kin</th>
                         <th>Next of No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                   
                    
                    
                    
                    </tr>
                </tbody>
            </table>
        </div>


       



  @if(session('success'))

   <div class="alert alert-success">

       {{session('success')}}

   </div>

   @endif




<a href="{{route('admin.home')}}" class="btn btn-light"><h6>Home</h6></a>

<!-- report errors --> 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
     
    @endif

@endsection