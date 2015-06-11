@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Dati del veicolo</div>
					<div class="panel-body">
        			@include('errors.errorlist')

					{!! Form::open(array('route' => 'cars.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
					@include('cars.form')
					{!! Form::submit('Invia', array('class' => 'btn btn-default')) !!}
					{!! Form::close() !!}
					</div>
				</div>
				<!--just outer panel!-->
				<div style="text-align:right">
					{!! Form::submit('Immagini &gt;&gt;', array('class' => 'btn btn-default')) !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection