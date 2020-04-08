<div>
	@if($user)
		<a href="/">Home</a>
		<form action="/logout" method="post">
			@csrf
			<input type="submit" value="Logout">
		</form>
		<label for=""></label>
	@else
		<a href="/">Home</a>
		<a href="/login">Login</a>
		<a href="/register">Register</a>
	@endif
	<hr>
</div>