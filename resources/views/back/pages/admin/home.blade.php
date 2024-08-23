@extends('back.layout.pageslayout')
@section('pageTitle', Isset($pageTitle) ? $pageTitle : 'Buy Simu')
@section('content')

Africa's most valued Digital Finacial Partner...........

@if(session('success'))

							<div class="alert alert-success btn btn-close">

								{{session('success')}}
								
							</div>

							@endif




@endsection
 

