@extends('app')

@section('content')
<!-- Clients -->
	<div class="container">	
		<div class="col-10">		
		@if($clients->count() > 0)
			<center>	
				<div style="margin-top: 20px;"><h3>Добавленные пользователи</h3></div>
			</center>	
		@else
			<div style="margin-top: 20px;"><h3>Нет пользователей</h3></div>	
		@endif
			<ol style="margin-top: 30px;">				
				@foreach($clients as $client)				
				<li style=" border: 4px  black; background: #BDBDBD; padding: 20px;">     
										
						<a href="{{ url('/clientAddress/'.$client->id) }}">
							<span style="background-color: #D8D8D8">Имя: {{$client->firstname}}</span></br>					
							<span style="background-color: #D8D8D8">Фамилия: {{$client->lastname}}</span></br>	
						</a>
							<span style="background-color: #D8D8D8">Почта: {{$client->email}}</span></br>
						@if($client->client_type == 1)	
							<span style="background-color: #D8D8D8"><b>админ</b></span></br>
						@endif
					<br>
				</li>	
				@endforeach	
				
			</ol>			
		</div>
	</div>
<!-- End clients -->	
@endsection