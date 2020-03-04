@extends('app')

@section('content')
	<div class="show-found-content" style="margin-top: 50px;">
	<div class="container">
	<!-- Addresses -->	
		@if($clientId->addresses->count() > 0)
			<center>	
				<div ><h3>Адреса пользователя</h3></div>
			</center>	
		@else
			<div><h3>Нет адресов</h3></div>	
		@endif
		
		<ol style="margin-top: 30px;">	
			@foreach($clientId->addresses as $address)
			<li style=" border: 4px  black; background: #BDBDBD; padding: 20px;">     			
				<span style="background-color: #D8D8D8">Город: {{$address->city}}</span></br>
				<span style="background-color: #D8D8D8">Индекс: {{$address->postcode}}</span></br>
				<span style="background-color: #D8D8D8">Область: {{$address->region}}</span></br>
				<span style="background-color: #D8D8D8">Улица: {{$address->street}}</span></br>
				<a href="delete/{{ $address->id }}" class="btn btn-warning">Удалить</a>
				<br>
			</li>	
			@endforeach
		</ol>	
	<!-- End Addresses -->
	
	<!-- Add Addresses -->
		<form method="post" action="/clientAddress/add" id="myModal">
			@csrf
			<div class="col-5">
			<center>	
					<div style="margin: 30px 0 30px 0;"><h3>Добавить адрес</h3></div>
				</center>	
				<div>
					<div class="form-group">						
						<input type="hidden" name="client_id" value="{{$clientId->id}}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">City</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" name="city" value="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Postcode</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" name="postcode" value="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Region</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" name="region" value="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Street</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" name="street" value="">
					</div>
					
					<div class="form-group">				
						<input type="submit" id="submit" class="btn btn-primary" value="Submit">
					</div>
				</div>
			</div>			
		</form>	
	<!-- End add Addresses -->	
	</div>
</div>	
@endsection