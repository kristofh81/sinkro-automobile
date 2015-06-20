@extends('app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">More info on <strong></strong> :</div>
				<div class="panel-body">
					
					<div class="form-group row">
						<div class='col-md-8'>
							<div class="well">
							<h4>Immagini della machina:</h4>
								<ul class="list-inline">	
									@foreach ($images as $image)
									<li><img src="../../{{ $image->location }}" style="width:150px;height:100px;"></li>
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
										<li><a href="{{action('ImageController@edit', $car_id)}}" class="btn btn-default btn-block">Aggiungi altri immagini</a></li>
										<li><a href="{{action('ImageController@edit', $car_id)}}" class="btn btn-default btn-block">Elimina e scelgi altri</a></li>
										<li><a href="" class="btn btn-default btn-block">Elimina tutto</a></li>
										<li><a href="{{URL::previous()}}" class="btn btn-default btn-block">Indietro</a></li>
									</ul>
                        		</div>
                        		<div class="panel-footer">
                        	    	Panel Footer
                        		</div>
                    		</div><!--end of panel-primary-->
                    	</div>
					</div>
				</div>
				</div>
				<a href="{{URL::previous()}}" class="btn btn-default">&lt;&lt;Indietro alla lista</a>

			</div>
		</div>
	</div>
</div>
@endsection