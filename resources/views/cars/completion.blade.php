@extends('app')

@section('content')
<h1 style="text-align:center">Car Creation Page</h1><br>
<p style="text-align:center">Dati del veicolo&nbsp;&nbsp;/&nbsp;&nbsp;Immagini&nbsp;&nbsp;/&nbsp;&nbsp;<strong>Completato</strong></p><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>3. Nuovo veicolo creato</h4></div>
					<div class="panel-body">
        			@include('errors.errorlist')
        				<div class="row">
        					<div class="centered">						
							<img src="../../{{ $image_location }}" class="img-feature">						
							<br>						
							</div>
						</div>
						<br>
						<div class="row">
							<div class="centered">
							<div>
								<h4><strong>Hai inserito un veicolo {{ $car->category }}!</h4></strong>
								<ul class="list-unstyled">						
									<li>
										@foreach ($car->marks as $mark)
										{{ $mark->name }}
										@endforeach
									</li>
									<li>{{ $car->type }}</li>
									<li>{{ $car->fuel_type }}</li>
									<li>{{ $car->mileage }} km</li>
									<li>{{ $car->price }} €</li>							
									<li>{{ $car->description }}</li>											
								</ul>
							</div>
							</div>			
						</div>
					</div>
					<div class="panel-footer">
						<ul class="list-inline centered">
							<li><a href="{{ route('cars.edit', $car->id ) }}" class="btn btn-default">Modifica macchina</a></li>
							<li><a href="{{ route('cars.destroy', $car->id ) }}" class="btn btn-default">Elimina macchina</a></li>
							<li><a href="{{ url('/cars') }}" class="btn btn-default">Indice macchine</a></li>
						</ul>
					</div>
			
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection