@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">More info on <strong>{{ $car->type }}</strong> :</div>
				<div class="panel-body">
					
					<div>
						Personal info:
						<ul>						
							<li>{{ $car->description }}</li>
													
						</ul>

						Marca:
						@foreach ($car->marks as $mark)
							{{ $mark->name }}
						@endforeach

						
							<img src="../{{ $image->location }}">
						

						<br>
						

						<div class="table-responsive">
							<table class="table table-bordered">
								
								<thead>
									<strong>Specificazioni:</strong>
								</thead>
								<tbody id="table-body">
									<tr id="preview">							
									</tr>
									<tr id="">
										
									</tr>								
								</tbody>			
							</table>

						</div>
					</div>
					<br>
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
@endsection