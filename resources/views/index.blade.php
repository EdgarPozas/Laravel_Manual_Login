@extends("template.template")

@section("title","Home")

@section("body")
	
	@if($user??false)
		<h1>Welcome {{$user->name}}</h1>
	@else
		<h1>Welcome</h1>
	@endif

	<h3>{{$message ?? ""}}</h3>
    
@endsection