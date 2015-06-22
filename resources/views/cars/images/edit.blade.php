@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Immagini della machina: <strong>{{$car_id}}</strong> :</h4></div>
				<div class="panel-body">
					@include('errors.errorlist')
					<div class="form-group row">
						<div class='col-md-8'>
							<div class="well">						
								<ul class="list-inline images">
								<p>Elimina una sola immagine (oppure tutte nel panello di gestione a destro)</p>	
									@foreach ($images as $image)
									<li class="images-car-li">
									{!! Form::open(array('action' => ['ImageController@destroy', $image->id], 'method' => 'DELETE', 'files' => true)) !!}
									<img src="../../../{{ $image->location }}" class="imglist">
									{!! Form::submit('&times;', array('class' => 'img-button btn btn-sm btn-default')) !!}
																
									{!! Form::close() !!}
									</li>
									@endforeach						
								</ul>
							</div>
						</div>

						<div class='col-md-4'>
							<div class="panel panel-info">
                        		<div class="panel-heading">
                        	    Gestione immagini:
                        		</div>
                        		<div class="panel-body">
								{!! Form::open(array('action' => ['ImageController@update', $car_id], 'method' => 'PATCH',  'class' => 'form-horizontal btn btn-default btn-block', 'files' => true)) !!}

									{!! Form::label('location_new', 'Scelgi altri immagini: *') !!}
								
									{!! Form::file('newimagesUpload[]', array('id'=>'fileElem', 'multiple', 'required', 'accept' => 'image/*', 'onChange'=>'handleFiles(this.files);')); !!}
									<br>
									<div style="text-align:right">
									{!! Form::submit('Aggiungi &gt;&gt;', array('class' => 'btn btn-sm btn-default')) !!}
									</div>
								{!! Form::close() !!}
									<br>
									<p>Si trovanno <strong>{{$count_images_in_db}}</strong> photo nel database per questa machina</p>
									<p><strong>Max. 12</strong> immagini da inserire</p>
									<br>
									<ul class="list-unstyled">
										<li><a href="../delete-all-images/{{$car_id}}" class="btn btn-default btn-block">Elimina tutte immagini</a></li>
										<li><a href="{{route('cars.images.show', $car_id)}}" class="btn btn-default btn-block">Indietro</a></li>
									</ul>
								</div>
								<div class="panel-footer">
                        		    
                        		</div>
							</div><!--end of panel-primary-->					
						</div>
					</div>
				</div>
				</div><!--end of panel-default-->				
			</div>
		</div>
	</div>
</div>

@endsection


