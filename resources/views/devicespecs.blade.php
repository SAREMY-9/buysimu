@extends('back.pages.admin.home')
@section('content')



<form-group>

<form action="{{ route('userSearch')}}"  method="POST">


    @csrf

<h6>DEVICE SPECIFICATIONS</h6><br>
   
     <div class="input-group">

           <input type="text" name="idpassport" class="form-control" placeholder="Search ID OR PASSPORT......">
           <span class="input-group-text"><i class="fa fa-search"></i></span>
</div>
 
   <button type="submit" class="btn btn-danger">Verify</button>

     <br>
     <br>
     <br>
     
</form>



 
</form-group>


    
           


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