@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Dati del veicolo</div>
					<div class="panel-body">
        			@include('errors.errorlist')
        			<div class="well">
        				@foreach ($images as $image)
							<img src="../../{{ $image->location }}" style="width:100px;height:75px;margin:1px;">
						@endforeach
						<hr><a href="{{route('cars.images.show' , $car->id)}}" class="btn btn-default btn-xs">Gestione immagini &gt;&gt;</a>
					</div>
					{!! Form::model($car, array('action' => ['CarController@update',$car->id], 'method' => 'PATCH', 'class' => 'form-horizontal')) !!}
					@include('cars.form')
					
					</div>
				</div>
				<!--just outer panel!-->
				<div style="text-align:right">
					{!! Form::submit('Aggiorna', array('class' => 'btn btn-default')) !!}
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

<a href="#" class="scrollToTop">
	<button type="button" class="btn btn-default btn-circle btn-lg">
        <img src="img/arrow-up.png" class="arrow-up-scrolltop">
    </button>
</a>
@endsection

@section('scripts')
<script src="{{ asset('/js/myscripts.js') }}"></script>
@endsection