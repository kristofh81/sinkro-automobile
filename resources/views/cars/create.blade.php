@extends('app')

@section('content')
<h1 style="text-align:center">Car Creation Page</h1><br>
<p style="text-align:center"><strong>Dati del veicolo</strong>&nbsp;&nbsp;/&nbsp;&nbsp;Immagini&nbsp;&nbsp;/&nbsp;&nbsp;Completato</p><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>1. Dati del veicolo</h4></div>
					<div class="panel-body">
        			@include('errors.errorlist')

					{!! Form::open(array('route' => 'cars.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
					@include('cars.form', ['car' => 'create'])			
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
<a href="#" class="scrollToTop">
	<button type="button" class="btn btn-default btn-circle btn-lg">
        <img src="../img/arrow-up.png" class="arrow-up-scrolltop">
    </button>
</a>
@endsection

@section('scripts')
<script src="{{ asset('/js/myscripts.js') }}"></script>
@endsection