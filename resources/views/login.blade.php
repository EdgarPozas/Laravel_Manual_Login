@extends("template.template")

@section("title","Login")

@section("body")
	

	<h1>Login</h1>

	<h3>{{ $message ?? "" }}</h3>
	
    <form action="/login" method="post">
    	@csrf
    	<label for="">Email</label>
    	<input type="email" name="email">
    	<label for="">Password</label>
    	<input type="password" name="password">
    	<input type="submit" value="Login">
    </form>

@endsection