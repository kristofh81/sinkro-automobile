@extends('app')

@section('content')
<h1 style="text-align:center">Car Creation Page</h1><br>
<p style="text-align:center">Dati del veicolo&nbsp;&nbsp;/&nbsp;&nbsp;Immagini&nbsp;&nbsp;/&nbsp;&nbsp;<strong>Completato</strong></p>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">3. Veicolo e stato creato</div>
					<div class="panel-body">
        			@include('errors.errorlist')

						@foreach ($car->marks as $mark)
							{{ $mark->name }}
						@endforeach

					<ul>
						<li><a href="{{ route('cars.edit', $car->id) }}">Edit this Car</a></li>
						<li><a href="{{ route('cars.destroy', $car->id) }}">Delete this Car</a></li>
						<li><a href="{{ url('/cars') }}">Back to Overview of Cars</a></li>
					</ul>
			
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection