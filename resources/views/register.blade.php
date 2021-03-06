@extends("template.template")

@section("title","Register")

@section("body")
	
	<h1>Register</h1>

	<h3>{{ $message ?? "" }}</h3>
	
    <form action="/register" method="post">
    	@csrf
    	<label for="">Name</label>
    	<input type="text" name="name">
    	<label for="">Email</label>
    	<input type="email" name="email">
    	<label for="">Password</label>
    	<input type="password" name="password">
    	<input type="submit" value="Register">
    </form>
    

@endsection