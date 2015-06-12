@extends('app')

@section('content')
<h1 style="text-align:center">Car Creation Page</h1><br>
<p style="text-align:center"><strong>Dati del veicolo</strong>&nbsp;&nbsp;/&nbsp;&nbsp;Immagini&nbsp;&nbsp;/&nbsp;&nbsp;Completato</p>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">1. Dati del veicolo</div>
					<div class="panel-body">
        			@include('errors.errorlist')

					{!! Form::open(array('route' => 'cars.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
					@include('cars.form')
			
					</div>
				</div>
				<!--just outer panel!-->
				<div style="text-align:right">
					{!! Form::submit('Immagini &gt;&gt;', array('class' => 'btn btn-default')) !!}
				</div>
					{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
	<script src="{{ asset('/js/myscripts.js') }}"></script>
@endsection