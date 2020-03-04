@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<!-- List of clients -->
			<div class="col-4" style="margin-top: 33px;">			
				<ul class="list-group">
					<li class="list-group-item">
						<a href="{{ url('adressAll') }}">Все пользователи</a>
					</li>
				@foreach($clients as $client)
					<li class="list-group-item">
						<a href="{{ url('adressAll/'.$client->id) }}">{{ $client->firstname }} {{ $client->lastname }}</a>
						{{ $client->addresses->count() }}
					</li>
				@endforeach
				</ul>			
			</div>
		<!-- End list of clients -->
		
		<!-- Address list -->
			@if($address->count() > 0)
			<div class="col-8">
				<ol style="margin-top: 30px;">	
					@foreach($address as $addresses)
						<li>     			
							<span style="background-color: #D8D8D8">Город: {{$addresses->city}}</span></br>
							<span style="background-color: #D8D8D8">Индекс: {{$addresses->postcode}}</span></br>
							<span style="background-color: #D8D8D8">Область: {{$addresses->region}}</span></br>
							<span style="background-color: #D8D8D8">Улица: {{$addresses->street}}</span></br>
							<br>
						</li>	
					@endforeach
				</ol>			
			</div>
			@else
			<div class="col-8" style="margin-top: 30px;">
				<h3>У пользователя не добавлено ни одного адреса!!</h3>
			</div>
			@endif
		<!-- End address list -->
		
		<div class="col-12" style="margin-top: 40px;">
			<center>				
				{!! $address->links() !!}				
			</center>
		</div>
	</div>	
</div>

@endsection	