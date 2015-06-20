@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Lista delle machine <em>pubblicate</em>:</div>
				<div class="panel-body">
					<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">								
								<thead>
                                       <tr>
                                            <th>Immagine</th>
                                            <th>Categoria</th>
                                            <th>Info</th>
                                            <th>Dettagli</th>
                                            <th>Immagini</th>
                                            
                                        </tr>
                                </thead>

								<tbody id="table-body">
									@foreach ($cars as $car)
									<tr>
										<td>
											
											<img src="../../" style="width=250px;height=150px;">
										</td>	
										<td>
											{{ $car->category }}
										</td>
										<td>
											<ul>
												<li>{{ $car->category }}</li>
												<li>{{ $car->type }}</li>
												<li>{{ $car->fuel_type }}</li>
												<li>{{ $car->mileage }}</li>
												<li>{{ $car->price }}</li>
											</ul>
										</td>	
										<td>
											<a href="{{ route('cars.show', $car->id) }}">Dettagli della machina</a>
										</td>
										<td>
											<a href="cars/images/{{$car->id}}">Immagini della machina</a>
										</td>
								
									</tr>
									@endforeach
								</tbody>			
							</table>
							
	
						<a href="{{ route('cars.create') }}">Crea nuova machina</a>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection