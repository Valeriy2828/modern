@extends('app')

@section('content')
<!-- Add Clients -->
<div class="show-found-content" style="margin-top: 50px;">
	<div class="container">					
		<form method="post" action="/clientAdd/add" id="myModal">
			@csrf
			<div class="col-5">
				<center>	
					<div style="margin: 20px 0 30px 0;"><h3>Добавить пользователя</h3></div>
				</center>	
				<div>
					<div class="form-group">
						<label for="exampleInputEmail1">Firstname</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" name="firstname" value="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Lastname</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" name="lastname" value="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-check">
						<input type="hidden" name="client_type" value="0">
						<input class="form-check-input" name="client_type" type="checkbox" value="1" id="defaultCheck1">		
						<label class="form-check-label" for="defaultCheck1">Admin</label>											  
					</div>
					<div class="form-group" style="margin-top: 10px;">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="form-group">						
						<input type="submit" id="submit" class="btn btn-primary" value="Submit">
					</div>
				</div>
			</div>
			<script>
		
		</script>
		</form>		
	</div>
</div>
<!-- End add Clients -->	
@endsection