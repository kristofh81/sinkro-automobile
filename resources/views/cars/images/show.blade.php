@extends('app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Immagini della machina: <strong>{{$car_id}}</strong> :</h4></div>
				<div class="panel-body">
					@include('errors.errorlist')
					<div class="form-group row">
						<div class='col-md-8'>
							<div class="well">
							<p>Immagini attuali della machina:</p>
								<ul class="list-inline images">	
									@foreach ($images as $image)
									<li class="images-car-li"><img src="../../{{ $image->location }}" class="imglist"></li>
									@endforeach						
								</ul>
							</div>
						</div>
						<div class='col-md-4'>
							<div class="panel panel-info">
                        		<div class="panel-heading">
                        	    Opzioni:
                        		</div>
                        		<div class="panel-body">
                        	    	<ul class="list-unstyled">
										<li><a href="{{action('ImageController@edit', $car_id)}}" class="btn btn-default btn-block">Gestione immagini</a></li>
										<li><a href="{{route('cars.show', $car_id)}}" class="btn btn-default btn-block">Torna alla machina</a></li>
										<li><a href="{{route('cars.index')}}" class="btn btn-default btn-block">Torna all' indice dei veicoli</a></li>
									</ul>
                        		</div>

                    		</div><!--end of panel-primary-->
                    	</div>
					</div>
				</div>
				</div>
				<a href="{{route('cars.index')}}" class="btn btn-default">&lt;&lt;Indietro alla lista</a>

			</div>
		</div>
	</div>
</div>
@endsection