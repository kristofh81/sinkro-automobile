@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">More info on <strong> 
						@foreach ($car->marks as $mark)
							{{ $mark->name }}
						@endforeach
						</strong> creata da {{ $car->getCreatedAt($car->created_at) }} giorni.
				</div>

				<input type="text" ng-model="yourName">
				<h1>@{{yourName}}</h1>
				<div class="panel-body">

					<div class='col-md-8'>
						<div class="row">	
							<img src="../{{ $image_location }}" class="img-feature">
							<h4> Marca:
								@foreach ($car->marks as $mark)
									{{ $mark->name }}
								@endforeach
							</h4>
							<h4> Modello:
								{{ $carmodel->name }}
							</h4>
							<hr>
						</div>
						<div class="row">	
							<div class='col-md-8'>
							<dl class="dl-horizontal">
								<dt>Categoria:</dt>
									<dd>{{ $car->category }}</dd>
								<dt>Tipo:</dt>
									<dd>{{ $car->type }}</dd>
								<dt>Carburante:</dt>
									<dd>{{ $car->fuel_type }}</dd>
								<dt>Chilometraggio:</dt>
									<dd>{{ $car->mileage }} km</dd>
								<dt>Prezzo:</dt>
									<dd>{{ $car->price }} €</dd>											
								<dt>Potenza:</dt>
								    <dd>{{$car->potency}} kW</dd>
								<dt>Porte:</dt>
								    <dd>{{$car->doors}}</dd>
								<dt>Cambio:</dt>
								    <dd>{{$car->gears}}</dd>
								<dt>Cilindri:</dt>
								    <dd>{{$car->cilinders}} ccm.</dd>
								<dt>Data Revisione:</dt>
								    <dd>{{$car->frontDateFormat($car->revision_expiry_date)}}</dd>
								<dt>Data Bollino blu:</dt>
								    <dd>{{$car->frontDateFormat($car->bollino_blu_expiry_date)}}</dd>
								<dt>Data Immatricolazione:</dt>
								    <dd>{{$car->frontDateFormat($car->immatriculation_date)}}</dd>
								<dt>Numero proprietari precendenti:</dt>
								    <dd>{{$car->total_owners}}</dd>
								<dt>Incidentato?:</dt>
								    <dd>{{$car->accident_history}}</dd>
								<dt>Abilita di viaggare:</dt>
								    <dd>{{$car->travel_ability}}</dd>
								<dt>Codice:</dt>
								    <dd>{{$car->insert_code}}</dd>
								<dt>Numero Identificazione Veicolo (VIN):</dt>
								    <dd>{{$car->vin}}</dd>
								<dt>Descizione:</dt>
								    <dd>{{$car->description}}</dd>
								<dt>Prezzo per rivenditori:</dt>
								    <dd>{{$car->priceb2b}} €</dd>
								<dt>Disponibilità::</dt>
								    <dd>{{$car->frontDateFormat($car->availability_period)}}</dd>
								<dt>Pubblicato:</dt>
								    <dd>{{$car->publish_flag}}</dd>
								<dt>Riservato:</dt>
								    <dd>{{$car->reserved_flag}}</dd>
							</dl>
							</div>
						</div>
						<div class="row">
						<h4>Colori</h4>
							<div class='col-md-12'>
								<ul class="list-unstyled" id="ul-img-nav">
									<li><strong>Colore esterno:</strong> {{$color->color_type}}</li>
									<li><strong>Metallizato:</strong> {{$color->metallic}}</li>
									<li><strong>Produttore:</strong> {{$color->manufacturer}}</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="row">
							<h3>Emissioni e ambiente</h3>
							<div class='col-md-12'>
								<ul class="list-unstyled" id="ul-img-nav">
									<li><strong>Consumo carburante (urbano):</strong> {{$consumptionemission->consumption_urban}} l/100km</li>
									<li><strong>Consumo carburante (extraurbano):</strong> {{$consumptionemission->consumption_suburban}} l/100km</li>
									<li><strong>Consumo appross.:</strong> {{$consumptionemission->consumption_general}} l/100km</li>
									<li><strong>Emissioni CO2:</strong> {{$consumptionemission->emission_co2}} (g/km)</li>
									<li><strong>Classe di efficienza energia:</strong> Euro{{$consumptionemission->class_energy_efficiency}}</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="row">						
							<h3>Caratteristiche</h3>						
							
							@foreach ($characteristic->toArray() as $char_key => $char_value)
								@if($char_key == 'id')
									<div class='col-md-4'>
									<h5><strong>Comfort e interni</strong></h5>
								@elseif($char_key == 'tow_bar')
									</div>
									<div class='col-md-4'>
									<h5><strong>Caratteristiche esterne</strong></h5>
									
								@elseif($char_key == 'class_emission')
									</div>
									<div class='col-md-4'>
									<h5><strong>Sicurezza e ambiente</strong></h5>
									
								@elseif($char_key == 'access_handicapped')
									</div>
									<div class='col-md-4'>
									<h5><strong>Optional</strong></h5>
										
								@endif
								@if($char_value == 1)
									&rtrif; {{$characteristic->translateVar($char_key)}}<br>									
								@endif	
							@endforeach
							</div>
						</div>
					</div>
					<div class='col-md-4'>
						<div class="panel panel-info">
                       		<div class="panel-heading">
                        	 Opzioni:
                        	</div>
                        <div class="panel-body">
                        	    	
							<ul class="list-unstyled" id="ul-img-nav">
								<li><a href="{{ route('cars.images.show', $car->id)}}" class="btn btn-default btn-block">Guarda immagini</a></li>
								<li><a href="{{ route('cars.edit', $car->id) }}" class="btn btn-default btn-block">Modifica macchina</a></li>								
								<li><input type = "button" id = "delete-item" value="Elimina machina" class="btn btn-default btn-block"/></li>
								<li><a href="{{ url('/cars') }}" class="btn btn-default btn-block">Torna all' indice</a></li>							
								{!! Form::open(array('action' => ['CarController@destroy', $car->id],'method' => 'DELETE')) !!}
								<div id = "alert_placeholder"></div>
								{!! Form::close() !!}
							</ul>
						</div>
					</div>

				</div><!--end panel-body-->
			</div>
		</div>
	</div>
</div>
<a href="#" class="scrollToTop">
	<button type="button" class="btn btn-default btn-circle btn-lg">
        <img src="../img/arrow-up.png" class="arrow-up-scrolltop">
    </button>
</a>
@endsection

@section('scripts')
<script src="{{ asset('/js/scrollscript.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
bootstrap_alert = function() {}
bootstrap_alert.warning = function(message) {
            $('#alert_placeholder').html('<div class="alert alert-warning"><a class="close" data-dismiss="alert">&times;</a><span>'+message+'</span><br><br><span><input type = "submit"  class="btn btn-outline btn-danger " value="Elimina"></span></div>')
        }
    
$('#delete-item').on('click', function() {
            bootstrap_alert.warning('Sei securo di eliminare?');
});

});
</script>
@endsection

